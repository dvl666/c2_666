<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consola;

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
    public function getDatos(){
        $dat = Consola::all();
        return $dat;
    }
    public function crearDatos(){
        $dat = new Consola();
        $dat->
    }
}
