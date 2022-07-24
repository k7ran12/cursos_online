<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Cristian Antonio';
        $user->email = 'tauro24_vs@hotmail.com';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->assignRole('admin');

        $user = new User();
        $user->name = 'Pedro Pablo';
        $user->email = 'sinche@hotmail.com';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->assignRole('usuario');

        $user = new User();
        $user->name = 'Cristina Martinez';
        $user->email = 'cristina@hotmail.com';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->assignRole('usuario');
    }
}
