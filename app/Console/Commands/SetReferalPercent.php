<?php

namespace App\Console\Commands;

use App\Http\Controllers\AdminController;
use Illuminate\Console\Command;
use App\User;
use App\Criteria;
use Carbon\Carbon;

class SetReferalPercent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'referals:set';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set referal percent';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $criteries = Criteria::where('type', 2)->get();
        $sortedCriteries = $criteries->sortBy('money_from');
        $now = Carbon::now();
        $endDate = $now->format('d.m.Y');
        $startDate = $now->subDays(7)->format('d.m.Y');

        $adminController = new AdminController();
        $exchange = $adminController->getExchange();
        $users = User::all();
        foreach ($users as $user) {
            $userBalances = $adminController->getUserBalance($user->id, $startDate, $endDate);
            $fullBalance = round(($userBalances['balanceR'] / $exchange) + $userBalances['balanceD'], 2);

            foreach ($sortedCriteries as $criteria) {
                if (($fullBalance >= $criteria->money_from)) {
                    $user->ref_percent = $criteria->percent / 100;
                    $user->save();
                }
            }

        }
        $this->info('Done!');
    }
}
