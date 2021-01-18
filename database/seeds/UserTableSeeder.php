<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Bernardo',
            'surname' => 'Issenguel',
            'email' => 'bernardo@gmail.com',
            'phone' => '912456876',
            'estado' => 1,
            'password' => Hash::make('123')
        ]);
    }
}