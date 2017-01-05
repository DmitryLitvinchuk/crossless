<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;

class MainController extends Controller
{
    public function index()
    {
        return view('main');
    }
}
