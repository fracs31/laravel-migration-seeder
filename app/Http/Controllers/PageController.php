<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train; //model

class PageController extends Controller
{
    //Homepage
    public function homepage() {
        $trains = Train::all(); //prendo tutti i treni
        $today = Train::where("start_time", "like", date("Y-m-d") . "%")->get(); //prendo i treni di oggi
        //Dati
        $data = [
            "trains" => $trains, //tutti i treni
            "today" => $today //treni di oggi
        ];
        return view("welcome", $data); //restituisco la vista
    }
}
