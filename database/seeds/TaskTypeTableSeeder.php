<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_type')->insert(
            [
                [
                    "name" => "new feature"
                ],
                [
                    "name" => "bug"
                ],
                [
                    "name" => "improvement"
                ]
            ]
        );
    }
}
