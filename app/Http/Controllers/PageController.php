<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Homepage
    public function homepage() {
        return view("welcome"); //restituisco la vista
    }
}
