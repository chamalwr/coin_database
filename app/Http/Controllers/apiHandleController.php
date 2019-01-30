<?php

namespace App\Http\Controllers;

use App\lastprices;
use App\transaction_history;
use Illuminate\Http\Request;
use Carbon\Carbon;

class apiHandleController extends Controller
{
    public function getLastPrices($curreny_one, $curreny_two){

        $LastPrices = new lastprices();
        $lprice_data = json_decode(file_get_contents('https://cex.io/api/last_price/'.$curreny_one.'/'.$curreny_two), true);

        $LastPrices->Symbol_one = $lprice_data['curr1'];
        $LastPrices->symbol_two = $lprice_data['curr2'];
        $LastPrices->price = $lprice_data['lprice'];
        $LastPrices->save();
    }

    public function getTransactionHistories($curreny_one, $curreny_two){
        $Transactions = new transaction_history();
        $transactions_data = json_decode(file_get_contents('https://cex.io/api/trade_history/'.$curreny_one.'/'.$curreny_two), true);

        $tras_arr = [];
        
        foreach($transactions_data as $td){
            $tmpTrans = new transaction_history();
            $tmpTrans->type = $td['type'];
            $tmpTrans->date = $td['date'];
            $tmpTrans->amount = $td['amount'];
            $tmpTrans->price = $td['price'];
            $tmpTrans->tid = $td['tid'];
            $tmpTrans->created_at = Carbon::now()->toDateTimeString();
            $tmpTrans->updated_at = Carbon::now()->toDateTimeString();
            
            $tras_arr[] = $tmpTrans->attributesToArray();
        }

        $Transactions::insert($tras_arr);
    }

    public function saveLastPrices(){
        $this->getLastPrices('BTC', 'USD');
        $this->getLastPrices('LTC', 'USD');
        $this->getLastPrices('XRP', 'USD');
        $this->getLastPrices('ETH', 'USD');
    }

    public function saveTradeHistory(){
        $this->getTransactionHistories('BTC', 'USD');
        $this->getTransactionHistories('LTC', 'USD');
        $this->getTransactionHistories('XRP', 'USD');
        $this->getTransactionHistories('ETH', 'USD');
    }

}
