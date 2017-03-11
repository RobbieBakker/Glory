<?php
namespace App;

use Eloquent;

    class AgendaItem extends Eloquent
    {
        // MASS ASSIGNMENT -------------------------------------------------------
        // define which attributes are mass assignable (for security)
        protected $fillable = array('date', 'start_time', 'end_time', 'title', 'text', 'location_name', 'location_address', 'price', 'img_url', 'website_url');

        public $timestamps = false;
    }