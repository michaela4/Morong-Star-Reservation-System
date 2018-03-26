<?php

use Illuminate\Database\Seeder;

class DaytripOffPeakSeasonPromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('day_trip_off_peak_season_promos')->insert([ 
                [
                    'accomodation' => 'All-Day Tour: Open Cottage, Kayaking, Zip Line Ride, Fun Cart, Beach, Swimming Pool & Adventure Park Access (Minimum of 10 pax',
                    'unit_cost' => 550
                ]
            ]);
    }
}
