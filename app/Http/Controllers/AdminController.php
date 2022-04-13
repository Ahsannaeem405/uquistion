<?php

namespace App\Http\Controllers;

use App\Models\Contact_form;
use App\Models\Logo;
use App\Models\User;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;





class AdminController extends Controller
{
    function index(){
        return view('Admin_asstes.index');
    }
    function contact(){
        $headers=Contact_form::all();
        return view('Admin_asstes.users',compact('headers'));
    }
    function delete_contact($id){
        $headers=Contact_form::find($id);
        $headers->delete();
        return back()->with("success","Successfully Deleted");

    }
    function profile(){
$user=Auth::user();
return view('Admin_asstes.profile',compact('user'));
    }
    function updateprofile(Request $request)
    {
        $user = User::find(Auth::user()->id);
        // if ($request->hasFile('file')) {
        //     $file2 = $request->file('file');
        //     $extension = $request->file->extension();
        //     $fileName2 = rand(11111, 99999) . "_." . $extension;
        //     $request->file->move('upload/admin_profile/', $fileName2);
        //     $user->image = $fileName2;
        // }
        $user->name = $request->name;
        $user->number = $request->number;
        if ($request->email == null) {
            return redirect()->back()->with('error', 'Please Enter Email');
        }
        $user->email = $request->email;
        if ($request->newpassword != null) {
            if ($request->newpassword == $request->confirmpassword) {
                if (Hash::check($request->oldpassword, $user->password)) {
                    $user->password = Hash::make($request->newpassword);
                } else {
                    return redirect()->back()->with('error', 'Please enter correct old password');
                }
            } else {
                return redirect()->back()->with('error', 'Confirm Password does not match');
            }

        }
        $user->save();
        return redirect()->back()->with('success', 'Successfully Updated');

    }
    function logo(){
        $headers=Logo::all();
        return view('Admin_asstes.logo',compact('headers'));
    }
    function edit_logo($id){
        $header=Logo::find($id);
        return view('Admin_asstes.edit_logo',compact('header'));
    }
    function updatelogo(Request $request){
        $logo=Logo::find($request->id);
        if ($request->hasFile('image')) {
            // $destination='upload/logo/'.$logo->image;
            // if (File::exists($destination)) {
            //     File::delete($destination);
            // }
            $file = $request->file('image');
            $extension = $request->image->extension();
            $fileName = rand(11111, 99999) . "_." . $extension;
            $request->image->move('upload/logo/', $fileName);
            $logo->image = $fileName;
        }
        $logo->save();
        return back()->with('success','Successfully Updated');
    }
}
