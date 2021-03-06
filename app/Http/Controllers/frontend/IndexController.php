<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;


class IndexController extends Controller
{
    public function index(){
        return view('frontend.index');
    } //end

    public function UserLogout(){
         Auth::logout();
        return Redirect()->route('login');
    } //end

    public function UserProfile(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('frontend.profile.user_profile', compact('user'));
    } //end

    public function UserProfileUpdate(Request $request){
        $data = User::find(Auth::user()->id);
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;

        if($request->file('profile_photo_path')){
            $file = $request->file('profile_photo_path');
            @unlink(public_path('upload/user_images/'.$data->profile_photo_path));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $data['profile_photo_path'] = $filename;   
        }
        $data->save();
        $notification = array(
            'message'       => 'Profile Updated Successfully',
            'alert-type'    => 'success'
        );
        return redirect()->route('dashboard')->with($notification);

    } //end

    public function UserChangePassword(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('frontend.profile.change_password', compact('user'));
    } //end

    public function UserPasswordUpdate(Request $request){
        $validateData = $request->validate([
            'oldpassword'       => 'required',
            'password'          =>  'confirmed|required'
        ]);

        $hasedPassword = Auth::user()->password;
        if(Hash::check($request->oldpassword, $hasedPassword)){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('user.logout');
        }else{
            return redirect()->back();
        }
    }
}
