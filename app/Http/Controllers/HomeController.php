<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Trip;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }


    public function trips()
    {
        $trips = Trip::all();
        return view('trips.index', compact('trips'));
    }

    public function tripShow($id)
    {
        $trip = Trip::findOrFail($id);
        return view('trips.show', compact('trip'));
    }

    public function about()
    {
        return view('about');
    }
}
