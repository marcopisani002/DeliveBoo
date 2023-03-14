<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = config('deliveboo_array.users');

        foreach ($users as $user) {
            $newuser = new User();
            $newuser->name = $user['name'];
            $newuser->surname = $user['surname'];
            $newuser->email = $user['email'];
            $user['password'] = Hash::make($user['password']);

            $newuser->fill($user);

            $newuser->save();
        }

    }
}