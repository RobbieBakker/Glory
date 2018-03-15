<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DownloadController extends Controller
{
    public function downloadStatuten()
    {
        return response()->download(public_path(). "/files/Statuten.pdf", 'Statuten.pdf');
    }

    public function downloadReglement()
    {
        return response()->download(public_path(). "/files/Huishoudelijk_Reglement.pdf", 'Huishoudelijk Reglement.pdf');
    }

    public function downloadNieuwsbrief()
    {
        return response()->download(public_path(). "/uploads/newsletters/nieuwsbrief.pdf", 'Nieuwsbrief.pdf');
    }
}
