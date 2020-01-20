<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class DestinationController extends Controller
{
    public function DestinationCategory($channel_no)
    {
        return view('pages.destination.destination');
    }
}
