<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsolasController extends Controller
{
    public function getMed(){
        $med[] = "0";
        $med[] = "1";
        $med[] = "2";
        $med[] = "3";
        $med[] = "4";
        $med[] = "5";
        $med[] = "6";
        $med[] = "7";
        $med[] = "8";
        $med[] = "9";
        $med[] = "10";
        return $med;

    }
    public function getTmed(){
        $tmed[] = "Kilowatts";
        $tmed[] = "Watts";
        $tmed[] = "Temperatura";
       
        return $tmed;

    }
}
