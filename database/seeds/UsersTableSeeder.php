<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Francisco Leal',
            'email' => 'francisco.lleal@gmail.com',
            'password' => bcrypt('123456')
            ]);
    }
}
