<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        return view('events/index');
    }

    public function event_form_show(){
    	 return view('events/create-event');
    }
    public function event_add(){

    }
}
