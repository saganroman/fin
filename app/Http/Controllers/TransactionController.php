<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use App\User;
use App\Partner;
use Carbon\Carbon;

class TransactionController extends Controller
{
    public $perPage = 10;

    public function addFewTransactions()
    {
        $partners = Partner::all();
        $users = User::all();
        return view('layouts.transactionAddFew')->withPartners($partners)->withUsers($users);
    }

    public function addOneTransaction()
    {
        $partners = Partner::all();
        $users = User::all();
        return view('layouts.transactionAddOne')->withPartners($partners)->withUsers($users);
    }

    public function addOne(Request $request)
    {
        $user_id = $request->input('user');
        $partner_id = $request->input('parthner');
        $amount = $request->input('amount');
        $currency_id = $request->input('currency');

        $date = Carbon::createFromFormat('d.m.Y', $request->input('date'))->toDateString();
        // $description = $request->input('description');
        $user = User::find($user_id);
        if ($user->type == 3) {
//user transaction
            $percent = $user->percent;
            $transaction = new Transaction();
            $transaction->user_id = $user_id;
            $transaction->program_id = $partner_id;
            $transaction->sum = $amount * $percent;
            $transaction->date = $date;
            $transaction->type = $currency_id;
            $transaction->description = 'личное пополнение';
            $transaction->save();
//managers transactions
            $managers = User::where('type', 2)->get();
            foreach ($managers as $manager) {
                $transaction = new Transaction();
                $transaction->user_id = $manager->id;
                $transaction->program_id = $partner_id;
                $transaction->sum = $amount * 0.05;
                $transaction->date = $date;
                $transaction->type = $currency_id;
                $transaction->description = "пополнение пользователем $user->name для менеджера";
                $transaction->save();
            }
//admin transaction
            $admin = User::where('type', 1)->first();
            $transaction = new Transaction();
            $transaction->user_id = $admin->id;
            $transaction->program_id = $partner_id;
            $transaction->sum = $amount - (($amount * 0.05) * 2 + ($amount * $percent));
            $transaction->date = $date;
            $transaction->type = $currency_id;
            $transaction->description = "пополнение пользователем $user->name для админа";
            $transaction->save();
//manager charge
        } elseif ($user->type == 2) {
//manager transaction
            $transaction = new Transaction();
            $transaction->user_id = $user_id;
            $transaction->program_id = $partner_id;
            $transaction->sum = $amount * 0.5;
            $transaction->date = $date;
            $transaction->type = $currency_id;
            $transaction->description = 'личное пополнение';
            $transaction->save();
//admin transaction
            $admin = User::where('type', 1)->first();
            $transaction = new Transaction();
            $transaction->user_id = $admin->id;
            $transaction->program_id = $partner_id;
            $transaction->sum = $amount - ($amount * 0.5);
            $transaction->date = $date;
            $transaction->type = $currency_id;
            $transaction->description = "пополнение пользователем $user->name";
            $transaction->save();
        } //admin charge
        else {
            $admin = User::where('type', 1)->first();
            $transaction = new Transaction();
            $transaction->user_id = $admin->id;
            $transaction->program_id = $partner_id;
            $transaction->sum = $amount;
            $transaction->date = $date;
            $transaction->type = $currency_id;
            $transaction->description = "личное пополнение";
            $transaction->save();
        }
        return redirect('/');
    }

    public function getTransactionsList()
    {
        $transactions = Transaction::orderBy('date', 'desc')->paginate($this->perPage);
        $curPage = $transactions->currentPage();
        $perPage = $transactions->perPage();
        $startItemInPage = ($curPage - 1) * $perPage;

        //    dd($startItemInPage);
        return view('layouts.transactionsList')->withTransactions($transactions)->withStart($startItemInPage);
    }


}
