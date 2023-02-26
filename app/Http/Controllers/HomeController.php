<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $movies = Movie::all();

        return view('home', compact('movie'));
    }
}
