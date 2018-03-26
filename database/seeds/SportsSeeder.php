<?php

use Illuminate\Database\Seeder;

class SportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sports')->insert([
                [
                    'name' => 'Table Tennis',
                    'cost' => 100,
                    'description' => '/hour'
                ],
                [
                    'name' => 'Billiard',
                    'cost' => 100,
                    'description' => '/hour'
                ], 
                [
                    'name' => 'Dart',
                    'cost' => 75,
                    'description' => '/hour'
                ],
                [
                    'name' => 'Chess',
                    'cost' => 75,
                    'description' => '/hour'
                ]
            ]);
    }
}
