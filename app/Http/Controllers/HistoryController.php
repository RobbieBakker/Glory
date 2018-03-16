<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use DateTime;
use App\AgendaItem;
use App\Rehearsal;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $datetime = new DateTime('yesterday');
        $agendaItems = AgendaItem::where('date', '<', $datetime)->orderBy('date', 'desc')->get();
        $rehearsals = Rehearsal::where('date', '<', $datetime)->orderBy('date', 'desc')->get();

        // load the view and pass the nerds
        return View('admin/history', compact('agendaItems', 'rehearsals'));
    }
}
