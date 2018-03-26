<?php

use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
        	[	
        		'customer_id' => 1,
	            'user_id' => 1,
	            'rides_id' => 'Banana Boat Ride,Banana Bus Ride',
	            'sports_id' => 'Table Tennis',
	            'cottage_id' => '10',
	            'fees_and_corkage_id' => '',         
	            'type_of_accommodation' => 'Daytrip Regular',
	            'status' => 'Confirmed', 
	            'check_in' => '6:00 am',
				'check_out' => '6:00 pm',
	            'ref_no' => '121abs',
	            'reservation_cost' => 0.00,
            	'amenities_cost' => 0.00, 
            	'overall_amount' => 5000.00
            ],
            [	
        		'customer_id' => 2,
	            'user_id' => 1,
	            'rides_id' => 'Banana Bus Ride',
	            'sports_id' => 'Dart',
	            'cottage_id' => '9',
	            'fees_and_corkage_id' => 'Gas Stove',         
	            'type_of_accommodation' => 'Daytrip Regular',
	            'status' => 'Confirmed', 
	            'check_in' => '6:00 am',
				'check_out' => '6:00 pm',
	            'ref_no' => '103acc',
	            'reservation_cost' => 0.00,
            	'amenities_cost' => 0.00, 
            	'overall_amount' => 7000.00
            ],
        	[	
        		'customer_id' => 3,
	            'user_id' => 1,
	            'rides_id' => '',
	            'sports_id' => 'Billiard,Dart',
	            'cottage_id' => '1',
	            'fees_and_corkage_id' => 'Gas Stove',       
	            'type_of_accommodation' => 'Daytrip Promo',
	            'status' => 'Arrived', 
	            'check_in' => '6:00 am',
				'check_out' => '6:00 pm',
	            'ref_no' => '143abd',
	            'reservation_cost' => 0.00,
            	'amenities_cost' => 0.00, 
            	'overall_amount' => 9000.00
            ],
            [	
        		'customer_id' => 4,
	            'user_id' => 1,
	            'rides_id' => 'Fying Fish',
	            'sports_id' => 'Chess',
	            'cottage_id' => '5',
	            'fees_and_corkage_id' => 'Elec. Appliance',       
	            'type_of_accommodation' => 'Daytrip Promo',
	            'status' => 'Walk In', 
	            'check_in' => '6:00 am',
				'check_out' => '6:00 pm',
	            'ref_no' => '123abc',
				'reservation_cost' => 2000.00,
            	'amenities_cost' => 500.00, 
            	'overall_amount' => 2500.00
            ]
        ]);
    }
}
