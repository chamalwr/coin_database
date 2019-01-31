<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\trasaction_history;
use Yajra\Datatables\Datatables;

class datatablesController extends Controller
{

   public function getTradeHistory(){
        return Datatable::of(transaction_history::query())->make(true);
   }

   public function viewTradeHistory(){
        return view('trade_history');
   }
}
