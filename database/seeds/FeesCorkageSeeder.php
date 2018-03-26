<?php

use Illuminate\Database\Seeder;

class FeesCorkageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fees_and__corkages')->insert([
         		[
                    'name' => 'Beer/Soda Corkage',
                    'cost' => 200,
                    'description' => '/case'
                ],
                [
                    'name' => 'Hard Liquor Corkage',
                    'cost' => 20,
                    'description' => '/bottle'
                ], 
                [
                    'name' => 'Elec. Appliance',
                    'cost' => 1000,
					'description' => '/unit'
                ],
                [
                    'name' => 'Gas Stove',
                    'cost' => 500,
                    'description' => '/unit'
                ]
        ]);
    }
}
