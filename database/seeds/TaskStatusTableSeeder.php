<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_status')->insert(
            [
                [
                    "name" => "to do"
                ],
                [
                    "name" => "feedback"
                ],
                [
                    "name" => "in progress"
                ],
                [
                    "name" => "resolved"
                ],
                [
                    "name" => "deployed"
                ],
                [
                    "name" => "done"
                ]
            ]
        );
    }
}
