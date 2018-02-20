<?php

use Illuminate\Database\Seeder;

class CriteriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *field #type 1- percent 2-referal_percent
     * @return void
     */
    public function run()
    {
        DB::table('criteries')->insert([
            [
                'money_from' => 0,

                // 'money_to' => 200,

                'type' => 1,
                'karma_from' => 0,

                //  'karma_to' => 100,

                'percent' => 30,
            ], [
                'money_from' => 200,

                // 'money_to' => 300,

                'type' => 1,
                'karma_from' => 200,

                // 'karma_to' => 1000,

                'percent' => 27,
            ]
            , [
                'money_from' => 0,
                'type' => 2,
                'karma_from' => 0,
                'percent' => 2,
            ]
            ,[
                'money_from' => 200,
                'type' => 2,
                'karma_from' => 0,
                'percent' => 5,
            ]
            ,[
                'money_from' => 500,
                'type' => 2,
                'karma_from' => 0,
                'percent' => 7,
            ]
            ,[
                'money_from' => 700,
                'type' => 2,
                'karma_from' => 0,
                'percent' => 10,
            ]
            ,

        ]);
    }
}
