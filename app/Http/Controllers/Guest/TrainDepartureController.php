<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainDepartureController extends Controller
{
    //All’interno della funzione index() del controller, recuperate tutti i dati che riguardano le partenze dal database 
    public function index( ){
        $movies = movie::all();
        // var_dump($movies);
        return view('admin.movie.index',['movies'=>$movies]);

    }
}
