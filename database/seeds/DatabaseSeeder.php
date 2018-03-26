<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(DaytripRegularSeeder::class);
        $this->call(DaytripOffPeakSeasonPromoSeeder::class);
        $this->call(DaytripRegularPackageSeeder::class);
        $this->call(SportsSeeder::class);
        $this->call(RidesSeeder::class);
        $this->call(FeesCorkageSeeder::class);
        $this->call(CottageSeeder::class);
        $this->call(ReservationSeeder::class);
        $this->call(CustomerSeeder::class);
    }
}
