<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $task = [];
        for ($i = 0; $i <= 20; $i++) {
            $item = [
                'name'=>$faker->name,
                'type'=>rand(1,3),
                'status'=>rand(1,5),
                'user_id'=>rand(1,10),
                'description'=> $faker->realText($maxNbChars = 50, $indexSize = 1),
            ];
            array_push($task, $item);
        }
        DB::table('tasks')->insert($task);
    }
}
