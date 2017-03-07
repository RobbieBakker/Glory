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
}
