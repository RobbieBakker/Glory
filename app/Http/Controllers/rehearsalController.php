<?php

namespace App\Http\Controllers;

use App\Rehearsal;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use Validator;
use Input;
use Illuminate\Support\Facades\Redirect;
use Session;
use DateTime;

class rehearsalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all the nerds
        $datetime = new DateTime('yesterday');
        $rehearsals = Rehearsal::where('date', '>', $datetime)->orderBy('date', 'asc')->get();

        // load the view and pass the nerds
        return View::make('admin/rehearsals')
            ->with('rehearsals', $rehearsals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'date'       => 'required|date',
            'start_time'      => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'description' => '',
            'location_name' => 'required',
            'location_address' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/repetities/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $rehearsal = new Rehearsal;
            $rehearsal->date       = Input::get('date');
            $rehearsal->start_time      = Input::get('start_time');
            $rehearsal->end_time = Input::get('end_time');
            $rehearsal->description      = Input::get('description');
            $rehearsal->location_name = Input::get('location_name');
            $rehearsal->location_address       = Input::get('location_address');
            $rehearsal->save();

            // redirect
            Session::flash('message', 'Succesvolle toevoeging van de repetitie!');
            return Redirect::to('admin/repetities');
        }
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
        $rehearsal = Rehearsal::find($id);
        $rehearsal->delete();

        // redirect
        Session::flash('message', 'Succesvolle verwijdering van de repetitie!');
        return Redirect::to('admin/repetities');
    }
}
