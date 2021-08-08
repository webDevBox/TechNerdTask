<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserData;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 15; $i++)
        {
            $user = User::inRandomOrder()->first();
            UserData::insert([
                'user_id' => $user->id, 'image' => rand(1,8).'.png', 'status' => rand(0,1)
            ]);
        }
    }
}
