<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    "name" => "Marcy Mathis",
                    "email" => "burchbauer@waretel.com",
                    "password" => Hash::make("123456"),
                ],
                [
                    "name" => "Liza King",
                    "email" => "sylviamanning@exostream.com",
                    "password" => Hash::make("123456"),
                ],
                [
                    "name" => "Bryant Welch",
                    "email" => "mamiesweet@architax.com",
                    "password" => Hash::make("123456"),
                ],
                [
                    "name" => "Daniels Walls",
                    "email" => "oliviaortega@perkle.com",
                    "password" => Hash::make("123456"),
                ],
                [
                    "name" => "Misty Koch",
                    "email" => "kathleensosa@geostele.com",
                    "password" => Hash::make("123456"),
                ]
            ]
        );
    }
}
