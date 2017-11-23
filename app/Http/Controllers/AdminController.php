<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    }
    public function karmaChanging()
    {
        return view('layouts.changeKarma');
    }
    public function getOwnBalance()
    {
        return view('layouts.ownTransactions');
    }
    public function getUsersBalance()
    {
        return view('layouts.usersBalance');

    }
    public function addExpenses()
    {
    }
    public function getBalacePeriod()
    {
        return view('layouts.balancePeriod');
    }
    public function settings()
    {
        return view('layouts.settings');

    }
}
