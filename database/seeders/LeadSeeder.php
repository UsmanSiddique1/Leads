<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lead;
use Illuminate\Support\Str;

class LeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {  
	    	Lead::create([
	            'name' => Str::random(8),
                'phone' => mt_rand(100000, 999999),
                'agency_name' => Str::random(8),
	            'email' => Str::random(12).'@mail.com',
	            
	        ]);
    	}
    }
}
