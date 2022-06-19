<?php

namespace Database\Seeders;

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
        $faker = \Faker\Factory::create();
        for ($count = 0; $count < 10; $count++) {
            DB::table('job_listings')->insert([
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
