<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use App\User;
use JD\Cloudder\Facades\Cloudder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Helpers\APIHelpers;
use App\UserNotification;
use App\Notification;
use App\Setting;
use App\Visitor;
use Cloudinary;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api' , ['except' => ['resetforgettenpassword' , 'checkphoneexistance']]);
    }

    public function getprofile(Request $request){
        if (!$request->header('uniqueid') || empty($request->header('uniqueid'))) {
            $response = APIHelpers::createApiResponse(true , 406 , 'uniqueid required header' , 'unique_id required header' , null , $request->lang);
            return response()->json($response , 406);
        }
        $visitor = Visitor::where('unique_id', $request->header('uniqueid'))->select('country_code')->first();
        $country = Country::where('country_code', $visitor->country_code)->select('icon', 'currency_' . $request->lang . ' as currency')->first();
        $user = auth()->user();
        $returned_user['image'] = $user['image'];
        $returned_user['user_name'] = $user['name'];
        $returned_user['phone'] = $user['phone'];
        $returned_user['email'] = $user['email'];
        $returned_user['join_date'] = $user['created_at']->format('d,m,Y');
        $returned_user['vip_type'] = "";
        if ($user->vip) {
            if ($request->lang == 'en') {
                $returned_user['vip_type'] = $user->vip->title_en;
            }else {
                $returned_user['vip_type'] = $user->vip->title_ar;
            }
        }
        $returned_user['currency'] = '';
        $returned_user['country'] = '';
        if ($country) {
            $returned_user['currency'] = $country->currency;
            $returned_user['country'] = $country->icon;
        }
        $whats = Setting::select('app_phone')->find(1);
        $returned_user['whats_app'] = $whats->app_phone;
        
        

        $response = APIHelpers::createApiResponse(false , 200 , '' , '' , $returned_user , $request->lang);
        return response()->json($response , 200);  
    }

    public function updateprofile(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            "email" => 'required',
        ]);

        if ($validator->fails()) {
            $response = APIHelpers::createApiResponse(true , 406 , 'Missing Required Fields' , 'بعض الحقول مفقودة' , null , $request->lang);
            return response()->json($response , 406);
        }

        $currentuser = auth()->user();
        $user_by_phone = User::where('phone' , '!=' , $currentuser->phone )->where('phone', $request->phone)->first();
        if($user_by_phone){
            $response = APIHelpers::createApiResponse(true , 409 , 'Phone Exists Before' , 'رقم الهاتف موجود من قبل' , null , $request->lang);
            return response()->json($response , 409);
        }

        $user_by_email = User::where('email' , '!=' ,$currentuser->email)->where('email' , $request->email)->first();
        if($user_by_email){
            $response = APIHelpers::createApiResponse(true , 409 , 'Email Exists Before' , 'البريد الإلكتروني موجود من قبل' , null , $request->lang);
            return response()->json($response , 409); 
        }
        $profileImage = $currentuser->image;
        if ($request->image) {
            $image = $request->image;  // your base64 encoded
            $image = 'data:image/png;base64,' . $image;
            // dd($image);
            // Cloudder::upload($image, null);
            $front_imageereturned = Cloudinary::upload($image);
            $front_image_id = $front_imageereturned->getPublicId();
            $front_image_format = $front_imageereturned->getExtension();  
            $front_image_new_name = $front_image_id.'.'.$front_image_format;
            $profileImage = $front_image_new_name;
        }

        User::where('id' , $currentuser->id)->update([
            'name' => $request->name , 
            'phone' => $request->phone , 
            'email' => $request->email,
            'image' => $profileImage  ]);

        $newuser = User::find($currentuser->id);
        $response = APIHelpers::createApiResponse(false , 200 , '' , '' , $newuser , $request->lang);
        return response()->json($response , 200);    
    }

    // update email
    public function updateEmail(Request $request) {
        $validator = Validator::make($request->all(), [
            "email" => 'required',
        ]);

        if ($validator->fails()) {
            $response = APIHelpers::createApiResponse(true , 406 , 'email is Required Field' , 'البريد الإلكترونى حقل مطلوب' , null , $request->lang);
            return response()->json($response , 406);
        }

        $user = auth()->user();

        $user->email = $request->email;

        $user->save();

        $response = APIHelpers::createApiResponse(false , 200 , '' , '' , $user , $request->lang);
        return response()->json($response , 200);
    }


    public function resetpassword(Request $request){
        $validator = Validator::make($request->all() , [
            'password' => 'required',
			"old_password" => 'required'
        ]);

        if($validator->fails()) {
            $response = APIHelpers::createApiResponse(true , 406 , 'Missing Required Fields' , 'بعض الحقول مفقودة' , null , $request->lang);
            return response()->json($response , 406);
        }

        $user = auth()->user();
		if(!Hash::check($request->old_password, $user->password)){
			$response = APIHelpers::createApiResponse(true , 406 , 'Wrong old password' , 'كلمه المرور السابقه خطأ' , null , $request->lang);
            return response()->json($response , 406);
		}
		if($request->old_password == $request->password){
			$response = APIHelpers::createApiResponse(true , 406 , 'You cannot set the same previous password' , 'لا يمكنك تعيين نفس كلمه المرور السابقه' , null , $request->lang);
            return response()->json($response , 406);
		}
        User::where('id' , $user->id)->update(['password' => Hash::make($request->password)]);
        $newuser = User::find($user->id);
        $response = APIHelpers::createApiResponse(false , 200 , '' , '' , $newuser , $request->lang);
        return response()->json($response , 200);
    }

    public function resetforgettenpassword(Request $request){
        $validator = Validator::make($request->all() , [
            'password' => 'required',
            'email' => 'required'
        ]);

        if($validator->fails()) {
            $response = APIHelpers::createApiResponse(true , 406 , 'Missing Required Fields' , 'بعض الحقول مفقودة' , null , $request->lang);
            return response()->json($response , 406);
        }

        $user = User::where('email', $request->email)->first();
        if(! $user){
            $response = APIHelpers::createApiResponse(true , 403 , 'email Not Exists Before' , 'البريد الالكترونى غير موجود' , null , $request->lang);
            return response()->json($response , 403);
        }

        User::where('email' , $user->email)->update(['password' => Hash::make($request->password)]);
        $newuser = User::where('email' , $user->email)->first();
		
		$token = auth()->login($newuser);
        $newuser->token = $this->respondWithToken($token);
		
        $response = APIHelpers::createApiResponse(false , 200 , '' , '' , $newuser , $request->lang);
        return response()->json($response , 200);
    }

    // check if phone exists before or not
    public function checkphoneexistance(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'phone' => 'required'
        ]);

        if($validator->fails()) {
            $response = APIHelpers::createApiResponse(true , 406 , 'Missing Required Fields' , 'حقل الهاتف اجباري' , null , $request->lang);
            return response()->json($response , 406);
        }
        
        $user = User::where('phone' , $request->phone)->first();
        if($user){
            $response = APIHelpers::createApiResponse(false , 200 , '' , '' , $user , $request->lang);
            return response()->json($response , 200);
        }

        $response = APIHelpers::createApiResponse(true , 403 , 'Phone Not Exists Before' , 'الهاتف غير موجود من قبل' , null , $request->lang);
        return response()->json($response , 403);

    }

 
    // get notifications
    public function notifications(Request $request){
        $user = auth()->user();
        if($user->active == 0){
            $response = APIHelpers::createApiResponse(true , 406 , 'Your Account Blocked By Admin' , 'تم حظر حسابك من الادمن' , null , $request->lang);
            return response()->json($response , 406);
        }

        $user_id = $user->id;
        $notifications_ids = UserNotification::where('user_id' , $user_id)->orderBy('id' , 'desc')->select('notification_id')->get();
        $notifications = [];
        for($i = 0; $i < count($notifications_ids); $i++){
            $notifications[$i] = Notification::select('id','title' , 'body' ,'image' , 'created_at')->find($notifications_ids[$i]['notification_id']);
        }
        $data['notifications'] = $notifications;
        $response = APIHelpers::createApiResponse(false , 200 ,  '' , '' ,$data['notifications'] , $request->lang);
        return response()->json($response , 200);  
    }
	
	    protected function respondWithToken($token)
    {
        return [
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 432000
        ];
    }


}
