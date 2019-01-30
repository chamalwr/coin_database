@extends('layouts.app')
<title>
    Dash Panel - Coin Base
</title>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ctypto Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    @if (Session::has('message'))
                        <div class = "alert alert-success" role = "alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif

                    <div class = "text-center">
                        <br/>
                        <a href = "/lastprice" class="btn btn-primary">Get Market Last Prices</a>
                        <a href = "/trade_history"   class="btn btn-primary">Get Trade History</a>
                    </div>                    
    
                    

                    <div class = "text-center">     
                        <br/>    
                        <a href="/viewLastPrice" class="btn btn-success" target="_blank">View Market Last Price</a>         
                        <a href="/viewTradeHistory" class="btn btn-success" target="_blank">View Trade History</a>
                    </div>
                    <br/>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
