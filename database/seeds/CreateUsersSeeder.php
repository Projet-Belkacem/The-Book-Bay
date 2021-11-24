<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'nom' => 'Admin nom',
                'prenom' => 'Admin prenom',
                'email' => 'admin@test.com',
                'date_naissance' => Carbon::now(),
                'is_admin' => true,
                'password' => Hash::make("123456"),
            ],
            [
                'nom' => 'User nom',
                'prenom' => "User prenom",
                'email' => 'user@test.com',
                'date_naissance' => Carbon::now(),
                'password' => Hash::make("azerty"),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
