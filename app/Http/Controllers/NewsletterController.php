<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/admin/newsletter');
    }

    public function updateNewsletter(Request $request){

        // Handle the user upload of newsletter
        if($request->hasFile('newsletter')){
            $request->file('newsletter')->move(public_path('/uploads/newsletters/'), "nieuwsbrief.pdf");
            //$request->get('upload_file')->move(public_path('files'), $uniqueFileName);

            Session::flash('newsletter', 'Profielfoto is succesvol gewijzigd gewijzigd!');
            return redirect()->action('NewsletterController@index');
        }
        Session::flash('newsletterError', 'Oeps, er is wat misgegaan');
        return redirect()->back();
    }

    public function deleteNewsletter(){

        File::delete(public_path('/uploads/newsletters/nieuwsbrief.pdf'));

        //Session::flash('newsletterSuccess', 'Nieuwsbrief is succesvol verwijderd!');
        return redirect()->action('NewsletterController@index');

    }
}
