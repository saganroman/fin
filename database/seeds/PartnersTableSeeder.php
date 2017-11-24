<?php

use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([[
            'name' => 'Партнер1',
        ], [
            'name' => 'Партнер2',
        ], [
            'name' => 'Партнер3',
        ], [
            'name' => 'Партнер4',
        ]]);
    }
}
