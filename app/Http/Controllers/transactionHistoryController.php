<?php

namespace App\Http\Controllers;

use App\transaction_history;
use Illuminate\Http\Request;

class transactionHistoryController extends Controller
{
    public function tradehistory(){
        $ApiHandler = new apiHandleController();
        $ApiHandler->saveTradeHistory();
        return view('home');
    }

    public function viewTradeHistory(){
        $TransactionHistory = transaction_history::all();
        return view('tradehistory')->with('tradehistorys', $TransactionHistory);
    }

}
