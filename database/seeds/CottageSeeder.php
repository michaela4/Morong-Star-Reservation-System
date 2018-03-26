<?php

use Illuminate\Database\Seeder;

class CottageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cottages')->insert([
                [
                    'cottage_no' => 'Concrete Upper Front',
                    'capacity' => 10,
					'regular_rate' => 2500,
					'features' => 'Open cottage with table and chairs set-up',
                    'agent' => ' ',
                    'status' => 'Arrived'
                ],
                [
                    'cottage_no' => 'Concrete Upper Front',
                    'capacity' => 10,
					'regular_rate' => 2500,
					'features' => 'Open cottage with table and chairs set-up',
                    'agent' => ' ',
                    'status' => 'available'
                ],
                [
                    'cottage_no' => 'Concrete Upper Front',
                    'capacity' => 10,
					'regular_rate' => 2500,
					'features' => 'Open cottage with table and chairs set-up',
                    'agent' => ' ',
                    'status' => 'available'
                ],
                [
                   'cottage_no' => 'Concrete Upper',
                    'capacity' => 10,
					'regular_rate' => 2500,
					'features' => 'Open cottage with table and chairs set-up',
                    'agent' => ' ',
                    'status' => 'available'
                ],
                [
                   'cottage_no' => 'Concrete Upper',
                    'capacity' => 10,
					'regular_rate' => 2500,
					'features' => 'Open cottage with table and chairs set-up',
                    'agent' => ' ',
                    'status' => 'Walk In'
                ], 
                [
                    'cottage_no' => 'Concrete Upper Back',
                    'capacity' => 10,
					'regular_rate' => 2500,
					'features' => 'Open cottage with table and chairs set-up',
                    'agent' => ' ',
                    'status' => 'available'
                ],
                [
                    'cottage_no' => 'Concrete Upper Back',
                    'capacity' => 10,
					'regular_rate' => 2500,
					'features' => 'Open cottage with table and chairs set-up',
                    'agent' => ' ',
                    'status' => 'available'
                ],
                [
                    'cottage_no' => 'Concrete Lower',
                    'capacity' => 10,
					'regular_rate' => 2500,
					'features' => 'Open cottage with table and chairs set-up',
                    'agent' => ' ',
                    'status' => 'available'
                ],
                [
                    'cottage_no' => 'Concrete Lower',
                    'capacity' => 10,
					'regular_rate' => 2500,
					'features' => 'Open cottage with table and chairs set-up',
                    'agent' => ' ',
                    'status' => 'Confirmed'
                ],
                [
                    'cottage_no' => 'Concrete Lower',
                    'capacity' => 10,
					'regular_rate' => 2500,
					'features' => 'Open cottage with table and chairs set-up',
                    'agent' => ' ',
                    'status' => 'Confirmed'
                ]
            ]);
    }
}
