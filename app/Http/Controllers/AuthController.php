<?php

namespace App\Http\Controllers;

use JD\Cloudder\Facades\Cloudder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Helpers\APIHelpers;
use App\Http\Controllers\Controller;
use Cloudinary;
use App\User;
use App\Visitor;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login' , 'register' , 'invalid', 'resetforgettenpasswordByEmail', 'checkVerficationCode']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        if ($request->login_type == 1) {
            if(!$request->unique_id || !$request->type || !$request->login_type || !$request->email){
                $response = APIHelpers::createApiResponse(true , 406 , 'Missing Required Fields' , 'بعض الحقول مفقودة' , null , $request->lang);
                return response()->json($response , 406);
            }
            $credentials = request(['email', 'password']);

            if (! $token = auth()->attempt($credentials)) {
                $response  = APIHelpers::createApiResponse(true , 401 , 'Invalid email or password' , 'يرجي التاكد من البريد الإلكترونى او كلمة المرور' , null , $request->lang);
                return response()->json($response, 401);
            }
        }elseif ($request->login_type == 2) {
            if(!$request->unique_id || !$request->type || !$request->login_type || !$request->social_id || !$request->email){
                $response = APIHelpers::createApiResponse(true , 406 , 'Missing Required Fields' , 'بعض الحقول مفقودة' , null , $request->lang);
                return response()->json($response , 406);
            }
            $user = User::where('facebook_id', $request->social_id)->first();


            if (! $user) {
                $image = "";
                $email = "";
                $name = "";
                if ($request->image) {
                    $image = $request->image;  // your base64 encoded
                    $imagereturned = Cloudinary::upload($image);
                    $front_image_id = $imagereturned->getPublicId();
                    $front_image_format = $imagereturned->getExtension();
                    $front_image_new_name = $front_image_id.'.'.$front_image_format;
                    $image = $front_image_new_name;
                }
                if ($request->name) {
                    $name = $request->name;
                }
                $fcm = '';
                if ($request->fcm_token) {
                    $fcm = $request->fcm_token;
                }
                if ($request->email) {
                    $email = $request->email;
                }
                $user = User::create([
                    'name' => $name,
                    'email' => $email,
                    'fcm_token' => $fcm,
                    'image' => $image,
                    'facebook_id' => $request->social_id
                ]);
                auth()->login($user);
            }else {
                if ($request->email) {
                    $user->email = $request->email;
                    $user->save();
                }
                
                auth()->login($user);
            }
        }else {
            if(!$request->unique_id || !$request->type || !$request->login_type || !$request->social_id || !$request->email){
                $response = APIHelpers::createApiResponse(true , 406 , 'Missing Required Fields' , 'بعض الحقول مفقودة' , null , $request->lang);
                return response()->json($response , 406);
            }
            $user = User::where('google_id', $request->social_id)->first();


            if (! $user) {
                $image = "";
                $email = "";
                $name = "";
                if ($request->image) {
                    $image = $request->image;  // your base64 encoded
                    $imagereturned = Cloudinary::upload($image);
                    $front_image_id = $imagereturned->getPublicId();
                    $front_image_format = $imagereturned->getExtension();
                    $front_image_new_name = $front_image_id.'.'.$front_image_format;
                    $image = $front_image_new_name;
                }
                if ($request->name) {
                    $name = $request->name;
                }
                $fcm = '';
                if ($request->fcm_token) {
                    $fcm = $request->fcm_token;
                }
                if ($request->email) {
                    $email = $request->email;
                }
                $user = User::create([
                    'name' => $name,
                    'email' => $email,
                    'fcm_token' => $fcm,
                    'image' => $image,
                    'google_id' => $request->social_id
                ]);
                auth()->login($user);
            }else {
                if ($request->email) {
                    $user->email = $request->email;
                    $user->save();
                }
                
                auth()->login($user);
            }
        }
        

        $user = auth()->user();
        if ($request->fcm_token) {
            $user->fcm_token = $request->fcm_token;
        }
        $user->save();

        $visitor = Visitor::where('unique_id' , $request->unique_id)->first();
        if($visitor){
            $visitor->user_id = $user->id;
            $visitor->unique_id = $request->unique_id;
            if ($request->fcm_token) {
                $visitor->fcm_token = $request->fcm_token;
            }
            $visitor->save();
        }else{
            $visitor = new Visitor();
            $visitor->unique_id = $request->unique_id;
            if ($request->fcm_token) {
                $visitor->fcm_token = $request->fcm_token;
            }
            $visitor->type = $request->type;
            $visitor->user_id = $user->id;
            $visitor->save();
        }
        
        $token = auth()->login($user);
        $user->token = $this->respondWithToken($token);

        $response = APIHelpers::createApiResponse(false , 200 , '' , '' , $user , $request->lang);
        return response()->json($response , 200);

    }

    public function invalid(Request $request){
        
        $response = APIHelpers::createApiResponse(true , 401 , 'Invalid Token' , 'تم تسجيل الخروج' , null , $request->lang);
        return response()->json($response , 401);
    }

    /* 
    * create user 
    */
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            "email" => 'required',
            "password" => 'required',
            // "fcm_token" => 'required',
            "type" => "required", // 1 -> iphone , 2 -> android
            "unique_id" => "required",            
        ]);

        if ($validator->fails()) {
            $response = APIHelpers::createApiResponse(true , 406 , 'Missing Required Fields' , 'بعض الحقول مفقودة' , null , $request->lang);
            return response()->json($response , 406);
        }

        // check if phone number register before
        $prev_user_phone = User::where('phone', $request->phone)->first();
        if($prev_user_phone){
            $response = APIHelpers::createApiResponse(true , 409 , 'Phone Exists Before' , 'رقم الهاتف موجود من قبل' , null , $request->lang);
            return response()->json($response , 409);
        }

        // check if email registered before
        $prev_user_email = User::where('email', $request->email)->first();
        if($prev_user_email){
            $response = APIHelpers::createApiResponse(true , 409 , 'Email Exists Before' , 'البريد الإلكتروني موجود من قبل' , null , $request->lang);
            return response()->json($response , 409);
        }

        $user = new User();
        if ($request->image) {
            $image = $request->image;  // your base64 encoded
            $image = 'data:image/png;base64,' . $image;
            $imagereturned = Cloudinary::upload($image);
            $front_image_id = $imagereturned->getPublicId();
            $front_image_format = $imagereturned->getExtension();
            $front_image_new_name = $front_image_id.'.'.$front_image_format;
            $user->image = $front_image_new_name;
        }
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($request->fcm_token) {
            $user->fcm_token = $request->fcm_token;
        }
        $user->save();

        $visitor = Visitor::where('unique_id' , $request->unique_id)->first();
        if($visitor){
            $visitor->user_id = $user->id;
            if ($request->fcm_token) {
                $visitor->fcm_token = $user->fcm_token;
            }
            $visitor->save();
        }else{
            $visitor = new Visitor();
            $visitor->unique_id = $request->unique_id;
            if ($request->fcm_token) {
                $visitor->fcm_token = $user->fcm_token;
            }
            $visitor->type = $request->type;
            $visitor->user_id = $user->id;
            $visitor->save();
        }

        $token = auth()->login($user);
        $user->token = $this->respondWithToken($token);

        $response = APIHelpers::createApiResponse(false , 200 , '' , '' , $user , $request->lang);
        return response()->json($response , 200);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me(Request $request)
    {
        $user = auth()->user();
        $response = APIHelpers::createApiResponse(false , 200 , '' , '' , $user , $request->lang);
        return response()->json($response , 200);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        auth()->logout();
        $response = APIHelpers::createApiResponse(false , 200 , '', '' , [] , $request->lang);
        return response()->json($response , 200);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh(Request $request)
    {
        $responsewithtoken = $this->respondWithToken(auth()->refresh());
        $response = APIHelpers::createApiResponse(false , 200 , '', '' , $responsewithtoken , $request->lang);
        return response()->json($response , 200);
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return [
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 432000
        ];
    }

    public function resetforgettenpasswordByEmail(Request $request){
        $validator = Validator::make($request->all() , [
            'email' => 'required|email'
        ]);

        if($validator->fails()) {
            $response = APIHelpers::createApiResponse(true , 406 , 'Missing Required Fields' , 'بعض الحقول مفقودة' , null , $request->lang);
            return response()->json($response , 406);
        }

        $user = User::where('email', $request->email)->first();
        if(! $user){
            $response = APIHelpers::createApiResponse(true , 403 , 'Email Not Exists Before' , 'بريد إلكترونى غير موجود' , null , $request->lang);
            return response()->json($response , 403);
        }
        $random_pass = Str::random(8);
        $data['random_pass'] = $random_pass;
        $data['user'] = $user;
        Mail::send('reset_pass', $data, function($message) use ($user) {
            $message->to($user->email, $user->name)->subject
                ('Reset password');
            $message->from('modaapp9@gmail.com','Al thuraya');
        });

        User::where('email' , $user->email)->update(['remember_token' => $data['random_pass']]);
        $newuser = User::where('email' , $user->email)->first();
		
        $response = APIHelpers::createApiResponse(false , 200 , '' , '' , $newuser , $request->lang);
        return response()->json($response , 200);
    }

    public function checkVerficationCode(Request $request) {
        $validator = Validator::make($request->all() , [
            'code' => 'required',
            'email' => 'required|email'
        ]);

        if($validator->fails()) {
            $response = APIHelpers::createApiResponse(true , 406 , 'Missing Required Fields' , 'بعض الحقول مفقودة' , null , $request->lang);
            return response()->json($response , 406);
        }

        $user = User::where('email', $request->email)->where('remember_token', $request->code)->first();
        
        $data['verified'] = false;
        if ($user) {
            $data['verified'] = true;
        }

        $response = APIHelpers::createApiResponse(false , 200 , '' , '' , $data , $request->lang);
        return response()->json($response , 200);
    }
}