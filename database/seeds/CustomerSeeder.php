<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 DB::table('customers')->insert([
        	[	
        		'name' => 'Victor Arlan',
           		'email' => 'babs@gmail.com',
            	'mobile_no' => '09122211141',
            	'company_group' => 'MNHS Alumni 2015',
            	'present_date' => NOW(), 
            	'date_of_tour' => NOW(),
            	'quote_date' => NOW(),
            	'no_of_person' => '22',
            	'address_tin' => 'Madrid, Surigao del Sur',
            	'reservation_type' => 'Daytrip Regular'
            ],
            [	
        		'name' => 'Francis Floresca',
           		'email' => 'frans@gmail.com',
            	'mobile_no' => '09199211141',
            	'company_group' => 'MNHS Alumni 2014',
            	'present_date' => NOW(),
            	'date_of_tour' => NOW(),
            	'quote_date' => NOW(),
            	'no_of_person' => '22',
            	'address_tin' => 'Madrid, Surigao del Sur',
            	'reservation_type' => 'Daytrip Regular'
            ],
            [	
        		'name' => 'Cindy Cosmiano',
           		'email' => 'cindy@gmail.com',
            	'mobile_no' => '09199211881',
            	'company_group' => 'MNHS Alumi 2014',
            	'present_date' => NOW(),
            	'date_of_tour' => NOW(),
            	'quote_date' => NOW(),
            	'no_of_person' => '22',
            	'address_tin' => 'Madrid, Surigao del Sur',
            	'reservation_type' => 'Daytrip Promo'
            ],
            [	
        		'name' => 'Mitchie Ann Guillen',
           		'email' => 'mitch@gmail.com',
            	'mobile_no' => '09199001141',
            	'company_group' => 'MNHS Alumni 2015',
            	'present_date' => NOW(),
            	'date_of_tour' => NOW(),
            	'quote_date' => NOW(),
            	'no_of_person' => '22',
            	'address_tin' => 'Madrid, Surigao del Sur',
            	'reservation_type' => 'Daytrip Promo'
            ]
        ]);
    }
}
