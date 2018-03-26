<?php

use Illuminate\Database\Seeder;

class RidesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('rides')->insert([
         		[
                    'name' => 'Banana Boat Ride',
                    'cost' => 250,
                    'description' => '/head'
                ],
                [
                    'name' => 'Banana Bus Ride',
                    'cost' => 250,
                    'description' => '/head'
                ], 
                [
                    'name' => 'Tootsie Wow',
                    'cost' => 350,
					'description' => '/head'
                ],
                [
                    'name' => 'Fying Fish',
                    'cost' => 350,
                    'description' => '/head'
                ]
         ]);
    }
}
