<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
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
        $faker = Faker::create();
        foreach(range(1,20) as $index)
        {
            User::updateOrInsert([
                'name'    => $faker->firstName.' '.$faker->lastName
            ]);
        }
    }
}
