<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use View;
use Validator;
use Input;
use Redirect;
use Session;
use File;

class UserController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all the nerds
        $users = User::all();

        // load the view and pass the nerds
        return View::make('admin/users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // load the create form (app/views/nerds/create.blade.php)
        return View::make('admin/users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'firstName' => 'required|max:255',
            'namePrefix' => 'max:255',
            'lastName' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'birthday' => '|date|before:today',
            'voice' => '',
            'role' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/users/create')
                ->withErrors($validator)
                ->withInput();
        } else {

            $pw = User::generatePassword();
            // store
            $user = new User;
            $user->firstName       = Input::get('firstName');
            $user->namePrefix      = Input::get('namePrefix');
            $user->lastName        = Input::get('lastName');
            $user->email       = Input::get('email');
            $user->birthday      = Input::get('birthday');
            $user->voice        = Input::get('voice');
            $user->role        = Input::get('role');
            $user->password     = bcrypt($pw);
            $user->save();

            User::sendWelcomeEmail($user, $pw);

            // redirect
            Session::flash('message', 'De gebruiker succesvol aangemaakt!');
            return Redirect::to('admin/users');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get the nerd
        $user = User::find($id);

        // show the edit form and pass the nerd
        return View::make('admin/users.edit')
            ->with('user', $user);
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
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'firstName'       => 'required|max:255',
            'namePrefix'      => 'required|max:255',
            'lastName' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'birthday' => 'required|date|before:today',
            'voice' => 'required',
            'role' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        $user = User::findOrFail($id);
        $user->firstName=$request->input('firstName');
        $user->namePrefix=$request->input('namePrefix');
        $user->lastName=$request->input('lastName');
        $user->email=$request->input('email');
        $user->birthday=$request->input('birthday');
        $user->voice=$request->input('voice');
        $user->role=$request->input('role');
        $user->save();

        // redirect
        Session::flash('message', 'De gebruiker succesvol bewerkt!');
        return Redirect::to('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $user = User::find($id);
        $user->delete();

        // redirect
        Session::flash('message', 'De gebruiker succesvol verwijderd!');
        return Redirect::to('/admin/users');
    }

    public function deleteAvatar($id){

        $user = User::find($id);
        if(strcmp($user->avatar, "user.jpg") ) {
            File::delete(public_path('/uploads/avatars/' . $user->avatar));
        }
        $user->avatar = "user.jpg";
        $user->save();

        // show the edit form and pass the nerd
        return View::make('admin/users.edit')
            ->with('user', $user);

    }
}
