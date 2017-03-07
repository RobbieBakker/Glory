<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rehearsal;
use DateTime;

class RepetitieController extends Controller
{
    public function rehearsals()
    {
        $datetime = new DateTime('yesterday');
        $rehearsals = DB::table('rehearsals')
                            ->where('date', '>', $datetime)
                            ->orderBy('date', 'asc')
                            ->get();
        return view('repetitieschema', ['rehearsals' => $rehearsals]);
    }

    public function destroy($id)
    {
        DB::table('rehearsals')->where('id', $id)->delete();
        $rehearsals = DB::table('rehearsals')->get();

        return redirect()->action('PlanningController@rehearsals');
//        return redirect('repetitieschema')->with('status', 'Repetitie verwijderd');
    }
}