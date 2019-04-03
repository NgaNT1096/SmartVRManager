<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'holomiadev@gmail.com',
            'password' => bcrypt('123321')
        ]);
        $admin->assignRole('administrator');

        $user = User::create([
            'name' => 'ngant',
            'email' => 'ngant1096@gmail.com',
            'password' => bcrypt('123321')
        ]);
        $user->assignRole('user');

        $customer = User::create([
            'name' => 'client',
            'email' => 'client@gmail.com',
            'password' => bcrypt('123321')
        ]);
        $customer->assignRole('customer');
    }
}
