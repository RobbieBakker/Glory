<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\AccountSettings;
use Illuminate\Support\Facades\Storage;
use Input;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Hash;
use Image;
use File;
use Session;

class ProfileController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('/profiel');
    }

    public function edit()
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        return view('/profiel', compact('user'));
    }

    public function update(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        $user->firstName=$request->input('firstName');
        $user->namePrefix=$request->input('namePrefix');
        $user->lastName=$request->input('lastName');
        $user->email=$request->input('email');
        $user->birthday=$request->input('birthday');
        $user->voice=$request->input('voice');

        $user->save();
        return redirect()->action('ProfileController@edit');
    }

    public function changePassword(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Je huidige wachtwoord is nietYour current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","Het nieuwe wachtwoord mag niet hetzelfde zijn als het huidige wachtwoord. Kies een ander wachtwoord.");
        }

//        $validatedData = $this->validate($request, [
//            'current-password' => 'required',
//            'new-password' => 'required|string|min:6|confirmed',
//        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Wachtwoord is gewijzigd!");

    }

    public function updateAvatar(Request $request){

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $img = Image::make($avatar)->widen(300)->crop(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

            $user = Auth::user();
            if(strcmp($user->avatar, "user.jpg") ) {
                File::delete(public_path('/uploads/avatars/' . $user->avatar));
            }
            $user->avatar = $filename;
            $user->save();
            $img->destroy();

            Session::flash('avatarSuccess', 'Profielfoto is succesvol gewijzigd!');
            return redirect()->action('ProfileController@edit');
        }
        Session::flash('avatarError', 'Oeps, er is wat misgegaan');
        return redirect()->back();
    }
}