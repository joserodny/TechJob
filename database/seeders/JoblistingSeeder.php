<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JoblistingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userId = DB::table('users')->pluck('id');
        $faker = \Faker\Factory::create();
        for ($count = 0; $count < 10; $count++) {
            DB::table('job_listings')->insert([
                'user_id' => $faker->randomElement($userId),
                'title' => $faker->sentence(),
                'tags' => 'laravel, api, back end',
                'company' => $faker->company(),
                'location' => $faker->city(),
                'email' => $faker->email(),
                'website' => $faker->url(),
                'description' => $faker->paragraph(4),
            ]);
        }
    }
}
