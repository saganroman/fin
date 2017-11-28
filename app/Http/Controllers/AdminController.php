<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public $sumD = 0;
    public $sumR = 0;
    public $perPage = 1;

    public function index()
    {
    }

    public function getUserKarma(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        return json_encode($user);
    }

    public function karmaChanging()
    {
        $users = User::all();
        $karmaFirstValue = User::first()->karma;
        return view('layouts.changeKarma')->withUsers($users)->withKarma($karmaFirstValue);
    }

    public function storeKarma(Request $request)
    {
        $id = $request->userKarma;
        $user = User::find($id);
        $user->karma = $request->karmaValue;
        $user->save();
        return redirect('/');
    }

    public function getOwnBalance()
    {
        $admin = User::where('type', 1)->first();
        $adminTransactions = Transaction::where('user_id', $admin->id)->orderBy('date', 'desc')->paginate($this->perPage);
        $curPage = $adminTransactions->currentPage();
        $perPage = $adminTransactions->perPage();
        $startItemInPage = ($curPage - 1) * $perPage;
        $ownTransactions = Transaction::where('user_id', $admin->id)->get();
        $ownTransactions->map(function ($transaction) {
            if ($transaction->type == 1) {
                $this->sumR = $this->sumR + $transaction->sum;
            }
        });
        $ownTransactions->map(function ($transaction) {
            if ($transaction->type == 2) {
                $this->sumD = $this->sumD + $transaction->sum;
            }

        });
        return view('layouts.ownTransactions')->with('ownBalanceInR', $this->sumR)->with('ownBalanceInD', $this->sumD)->with('adminTransactions', $adminTransactions)->with('start', $startItemInPage);
    }

    public function getUsersBalance()
    {
        $users = User::all();
        $usersBalance = [];
        foreach ($users as $user) {
            $userTransactions = Transaction::where('user_id', $user->id)->get();
            $sumD = 0;
            $sumR = 0;
            foreach ($userTransactions as $userTransaction) {
                if ($userTransaction->type == 1) {
                    $sumR = $sumR + $userTransaction->sum;
                } elseif ($userTransaction->type == 2) {
                    $sumD = $sumD + $userTransaction->sum;
                }

            }
            $usersBalance[] = ['user_name' => $user->name, 'balanceR' => $sumR, 'balanceD' => $sumD];
        }

        return view('layouts.usersBalance')->with('usersBalance',$usersBalance);

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
