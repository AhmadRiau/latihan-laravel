<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            DB::table('teachers')->insert([
                'name' => $faker->name                
            ]);
        }

        for ($i = 0; $i < 10; $i++) {
            DB::table('students')->insert([
                'name' => $faker->name,
                'score' =>  $faker->numberBetween(0,100),
                'teacher_id'=> $faker->numberBetween(1,8)
            ]);
        }

        for ($i = 0; $i < 10; $i++) {
            DB::table('contacts')->insert([
                'phone' => $faker->e164PhoneNumber(),
                'email' =>  "{$faker->firstName}@gmail.com",
                'address'=> $faker->address,
                'student_id'=> $faker->numberBetween(1,8)
            ]);
        }
    }
}
