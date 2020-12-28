<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'  => 'admin',
            'email' => 'admin@kawalcovid.com',
            'password'  => bcrypt('admin123')
    ]);
    }
}
