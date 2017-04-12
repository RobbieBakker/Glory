<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\AgendaItem;
use App\Rehearsal;
use View;

class GuestController extends Controller
{
    public function agendaIndex(){
        // get all the nerds
        $datetime = new DateTime('yesterday');
        $agendaItems = AgendaItem::where('date', '>', $datetime)->orderBy('date', 'asc')->get();

        // load the view and pass the nerds
        return View::make('agenda.index')
            ->with('agendaItems', $agendaItems);
    }

    public function agendaDetail($id){
        // get the agenda item
        $agendaItem = AgendaItem::find($id);

        // show the view and pass the nerd to it
        return View::make('agenda.show')
            ->with('agendaItem', $agendaItem);
    }

    public function rehearsalIndex(){
        // get all the nerds
        $datetime = new DateTime('yesterday');
        $rehearsals = Rehearsal::where('date', '>', $datetime)->orderBy('date', 'asc')->get();

        // load the view and pass the nerds
        return View::make('repetitieschema')
            ->with('rehearsals', $rehearsals);
    }
}
