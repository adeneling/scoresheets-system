<?php

use Illuminate\Database\Seeder;

class UnitScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\UnitScore::create([
		    'category_id' => 4,
		    'type' => 'GRAPARI',
		    'area' => 1,
		    'location' => 'SUMBAGUT',
		    'total_score' => 50,
		    'notes' => '-',
	    ]);
	    App\UnitScore::create([
		    'category_id' => 4,
		    'type' => 'GRAPARI',
		    'area' => 2,
		    'location' => 'JABODETABEK',
		    'total_score' => 65,
		    'notes' => 'BAGUS DALAM SERVICE',
	    ]);
	    App\UnitScore::create([
		    'category_id' => 4,
		    'type' => 'GRAPARI',
		    'area' => 1,
		    'location' => 'SUMBAGUT',
		    'total_score' => 89,
		    'notes' => '-',
	    ]);
	    App\UnitScore::create([
		    'category_id' => 4,
		    'type' => 'GRAPARI',
		    'area' => 3,
		    'location' => 'SUMBAGUT',
		    'total_score' => 63,
		    'notes' => 'RATA-RATA',
	    ]);
    }
}
