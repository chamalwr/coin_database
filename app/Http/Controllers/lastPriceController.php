<?php

namespace App\Http\Controllers;

use Session;
use App\lastprices;
use Illuminate\Http\Request;

class lastPriceController extends Controller
{
    public function lastprice(){
        $ApiHandleController = new apiHandleController();
        $ApiHandleController->saveLastPrices();
        return view('home');
    }


    public function viewLastPrice(){
        $LastPrices = lastprices::all();
        return view('lastprice')->with('lastprices', $LastPrices);  
    }

   
}
