<?php

use Illuminate\Database\Seeder;

class SessionDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Session::create([
		    'name' => '04 October 2016',
	    ]);
	    App\Session::create([
		    'name' => '05 October 2016',
	    ]);
    }
}
