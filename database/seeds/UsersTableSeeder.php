<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
                'name' => 'Администратор',
                'ref' => 0,
                'type' => 1,
                'email' => str_random(10) . '@gmail.com',
                'password' => bcrypt('secret'),
            ],
                [
                    'name' => "Менеджер1",
                    'ref' => 0,
                    'type' => 2,
                    'email' => str_random(10) . '@gmail.com',
                    'password' => bcrypt('secret'),
                ], [
                    'name' => "Менеджер2",
                    'ref' => 0,
                    'type' => 2,
                    'email' => str_random(10) . '@gmail.com',
                    'password' => bcrypt('secret'),
                ], [
                    'name' => "Пользователь1",
                    'ref' => 0,
                    'type' => 3,
                    'email' => str_random(10) . '@gmail.com',
                    'password' => bcrypt('secret'),
                ], [
                    'name' => "Пользователь2",
                    'ref' => 4,
                    'type' => 3,
                    'email' => str_random(10) . '@gmail.com',
                    'password' => bcrypt('secret'),
                ], [
                    'name' => "Пользователь3",
                    'ref' => 5,
                    'type' => 3,
                    'email' => str_random(10) . '@gmail.com',
                    'password' => bcrypt('secret'),
                ], [
                    'name' => "Пользователь4",
                    'ref' => 4,
                    'type' => 3,
                    'email' => str_random(10) . '@gmail.com',
                    'password' => bcrypt('secret'),
                ], [
                    'name' => "Пользователь5",
                    'ref' => 6,
                    'type' => 3,
                    'email' => str_random(10) . '@gmail.com',
                    'password' => bcrypt('secret'),
                ], [
                    'name' => "Пользователь6",
                    'ref' => 0,
                    'type' => 3,
                    'email' => str_random(10) . '@gmail.com',
                    'password' => bcrypt('secret'),
                ]]
        );
    }
}
