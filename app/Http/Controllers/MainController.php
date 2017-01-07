<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
use App\Track;
use App\TopTrack;

class MainController extends Controller
{
    public function index()
    {
        $toptracks = TopTrack::paginate(100);
        return view('main', compact('toptracks'));
    }
}
