<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PeripheralsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $categories = ['Mouse', 'Keyboard', 'Headset', 'Monitor', 'Mousepad', 'Headphones', 'Microphone', 'Webcam'];
        for($i =1; $i <= 50; $i++)
        {
            DB::table('peripherals')->insert([
                'bg_id' => $faker->unique()->bothify('PERI###'),
                'name' => $faker->words(5, true),
                'brand' => $faker->company(),
                'category' => $faker->randomElement($categories),
                'price' => $faker->numberBetween(100000, 10000000),
                'description' => $faker->sentence(),
                'image_path' => $faker->image(null, 800, 800),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
