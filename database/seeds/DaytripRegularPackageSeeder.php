<?php

use Illuminate\Database\Seeder;

class DaytripRegularPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daytrip__regular__packages')->insert([
                [
                    'accomodation' => 'Open Cottage with table and chairs',
                    'unit_cost' => 2500
                ],
                [
                    'accomodation' => 'Entrance Fee (adult) Access to beach, swimming pool and adventure park',
                    'unit_cost' => 300
                ], 
                [
                    'accomodation' => 'Entrance Fee (kid) Access to beach, swimming pool and adventure park',
                    'unit_cost' => 200
                ]
            ]);
    }
}
