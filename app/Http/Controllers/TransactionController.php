<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function addFewTransactions()
    {
        return view('layouts.transactionAddFew');
    }

    public function addOneTransaction()
    {
        return view('layouts.transactionAddOne');
    }

    public function getTransactionsList()
    {
    }


}
