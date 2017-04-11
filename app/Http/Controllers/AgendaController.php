<?php

namespace App\Http\Controllers;

use App\AgendaItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use Validator;
use Input;
use Illuminate\Support\Facades\Redirect;
use Session;
use DateTime;

class AgendaController extends Controller
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
    public function guestIndex()
    {
        // get all the nerds
        $datetime = new DateTime('yesterday');
        $agendaItems = AgendaItem::where('date', '>', $datetime)->orderBy('date', 'asc')->get();

        // load the view and pass the nerds
        return View::make('agenda.index')
            ->with('agendaItems', $agendaItems);
    }
    public function guestDetailView($id)
    {
        // get the agenda item
        $agendaItem = AgendaItem::find($id);

        // show the view and pass the nerd to it
        return View::make('agenda.show')
            ->with('agendaItem', $agendaItem);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all the nerds
        $datetime = new DateTime('yesterday');
        $agendaItems = AgendaItem::where('date', '>', $datetime)->orderBy('date', 'asc')->get();

        // load the view and pass the nerds
        return View::make('admin/agenda.index')
            ->with('agendaItems', $agendaItems);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // load the create form (app/views/agenda/create.blade.php)
        return View::make('admin/agenda.create');
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
            'title'       => 'required',
            'text'      => 'required',
            'location_name' => 'required',
            'location_address' => 'required',
            'price' => 'required|numeric',
            'img_url'      => '',
            'website_url' => '',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/agenda/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $agendaItem = new AgendaItem;
            $agendaItem->date       = Input::get('date');
            $agendaItem->start_time      = Input::get('start_time');
            $agendaItem->end_time = Input::get('end_time');
            $agendaItem->title       = Input::get('title');
            $agendaItem->text      = Input::get('text');
            $agendaItem->location_name = Input::get('location_name');
            $agendaItem->location_address       = Input::get('location_address');
            $agendaItem->price      = Input::get('price');
            $agendaItem->img_url      = Input::get('img_url');
            $agendaItem->website_url = Input::get('website_url');
            $agendaItem->save();

            // redirect
            Session::flash('message', 'Succesvolle toevoeging van het concert!');
            return Redirect::to('admin/agenda');
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
        // get the agenda item
        $agendaItem = AgendaItem::find($id);

        // show the view and pass the nerd to it
        return View::make('admin/agenda.show')
            ->with('agendaItem', $agendaItem);
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
        $agendaItem = AgendaItem::find($id);

        // show the edit form and pass the nerd
        return View::make('admin/agenda.edit')
            ->with('agendaItem', $agendaItem);
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
            'date'       => 'required|date',
            'start_time'      => 'required',
            'end_time' => 'required',
            'title'       => 'required',
            'text'      => 'required',
            'location_name' => 'required',
            'location_address' => 'required',
            'price' => 'required|numeric',
            'img_url'      => '',
            'website_url' => '',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/agenda/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
//            $allItems = DB::table('agenda')->where('id', $id)->get();
//            foreach($allItems as $value){
//                $agendaItem = $value;
//            }
            $agendaItem = AgendaItem::find($id);

            $agendaItem->date       = Input::get('date');
            $agendaItem->start_time      = Input::get('start_time');
            $agendaItem->end_time = Input::get('end_time');
            $agendaItem->title       = Input::get('title');
            $agendaItem->text      = Input::get('text');
            $agendaItem->location_name = Input::get('location_name');
            $agendaItem->location_address       = Input::get('location_address');
            $agendaItem->price = Input::get('price');
            $agendaItem->img_url      = Input::get('img_url');
            $agendaItem->website_url = Input::get('website_url');
            $agendaItem->save();

            // redirect
            Session::flash('message', 'Successfully updated agenda item!');
            return Redirect::to('admin/agenda');
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
        $agendaItem = AgendaItem::find($id);
        $agendaItem->delete();

        // redirect
        Session::flash('message', 'Succesvolle verwijdering van het concert!');
        return Redirect::to('admin/agenda');
    }
}
