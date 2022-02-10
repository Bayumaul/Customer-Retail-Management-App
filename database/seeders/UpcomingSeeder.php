<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Upcoming;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UpcomingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            Upcoming::create([
                'completed' => false,
                'title' => $faker->sentence($nbWords = 4, $variableNbWrod = false),
                'approved' => false,
                'waiting' => true,
                'taskId' => Str::random(10),
            ]);
        }
    }
}
