<?php

namespace App\Http\Controllers\Admin;

use App\Warning;
use Illuminate\Http\Request;

class WarningController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = session()->get('locale');
        $data = Warning::select('id', 'message_' . $lang . ' as message', 'product_id', 'created_at', 'seen')->orderBy('id', 'desc')->get();

        return view('admin.warnings', compact('data'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Warning::where('id', $id)->first();
        $data->update(['seen' => 1]);

        return redirect()->back()
        ->with('success', __('messages.marked_as_read'));
    }

   
}
