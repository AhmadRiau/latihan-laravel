<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id'=> 1, 'name'=> 'John', 'score'=> 70],
            ['id'=> 2, 'name'=> 'Gyro', 'score'=> 84],
            ['id'=> 3, 'name'=> 'Diego', 'score'=> 99],
        ];
       DB::table('students')->insert($data);
    }
}
