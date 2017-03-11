<?php
namespace App;

use Eloquent;

    class Rehearsal extends Eloquent
    {
        // MASS ASSIGNMENT -------------------------------------------------------
        // define which attributes are mass assignable (for security)
        protected $fillable = array('date', 'time', 'description', 'location_name', 'location_address', );
    }