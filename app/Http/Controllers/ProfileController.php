<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\AccountSettings;
use Input;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
        $user->lastName=$request->input('lastName');
        $user->email=$request->input('email');
        $user->birthday=$request->input('birthday');
        $user->voice=$request->input('voice');

        $user->save();
        return redirect()->route('/');
    }
}