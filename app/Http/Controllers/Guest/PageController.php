<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        
        $trains = Train::where('departure_time', '>=', now())->get();
        
       
        //dd($trains);

        return view('home', compact('trains'));
    }
}



//function () {
    //return view('welcome');
//}