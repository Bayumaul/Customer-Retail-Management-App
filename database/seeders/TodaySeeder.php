<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Today;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class TodaySeeder extends Seeder
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
            Today::create([
                'completed' => false,
                'title' => $faker->sentence($nbWords = 4, $variableNbWrod = false),
                'approved' => false,
                'taskId' => Str::random(10),
            ]);
        }
    }
}
