<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;


class TrainDepartureController extends Controller
{
    //All’interno della funzione index() del controller, recuperate tutti i dati che riguardano le partenze dal database 
    public function index( ){


        
        // var_dump($trains);
        return view('admin.movie.index',['trains'=>$trains]);

    }
}
