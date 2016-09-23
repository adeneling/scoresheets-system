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



	    /* TEST */
	    App\UnitScore::create([
		    'category_id' => 5,
		    'type' => 'GRAPARI',
		    'area' => 1,
		    'location' => 'SUMBAGUT',
		    'total_score' => 50,
		    'notes' => '-',
	    ]);
	    App\UnitScore::create([
		    'category_id' => 6,
		    'type' => 'GRAPARI',
		    'area' => 2,
		    'location' => 'JABODETABEK',
		    'total_score' => 65,
		    'notes' => 'BAGUS DALAM SERVICE',
	    ]);
	    App\UnitScore::create([
		    'category_id' => 7,
		    'type' => 'GRAPARI',
		    'area' => 4,
		    'location' => 'SUMBAGUT',
		    'total_score' => 89,
		    'notes' => '-',
	    ]);
	    App\UnitScore::create([
		    'category_id' => 8,
		    'type' => 'GRAPARI',
		    'area' => 3,
		    'location' => 'SUMBAGUT',
		    'total_score' => 63,
		    'notes' => 'RATA-RATA',
	    ]);
	    App\UnitScore::create([
		    'category_id' => 9,
		    'type' => 'GRAPARI',
		    'area' => 1,
		    'location' => 'SUMBAGUT',
		    'total_score' => 50,
		    'notes' => '-',
	    ]);
	    App\UnitScore::create([
		    'category_id' => 10,
		    'type' => 'GRAPARI',
		    'area' => 2,
		    'location' => 'JABODETABEK',
		    'total_score' => 65,
		    'notes' => 'BAGUS DALAM SERVICE',
	    ]);
	    App\UnitScore::create([
		    'category_id' => 10,
		    'type' => 'GRAPARI',
		    'area' => 4,
		    'location' => 'SUMBAGUT',
		    'total_score' => 89,
		    'notes' => '-',
	    ]);
	    App\UnitScore::create([
		    'category_id' => 1,
		    'type' => 'GRAPARI',
		    'area' => 3,
		    'location' => 'SUMBAGUT',
		    'total_score' => 63,
		    'notes' => 'RATA-RATA',
	    ]);
	    App\UnitScore::create([
		    'category_id' => 1,
		    'type' => 'GRAPARI',
		    'area' => 1,
		    'location' => 'SUMBAGUT',
		    'total_score' => 50,
		    'notes' => '-',
	    ]);
	    App\UnitScore::create([
		    'category_id' => 2,
		    'type' => 'GRAPARI',
		    'area' => 2,
		    'location' => 'JABODETABEK',
		    'total_score' => 65,
		    'notes' => 'BAGUS DALAM SERVICE',
	    ]);
	    App\UnitScore::create([
		    'category_id' => 1,
		    'type' => 'GRAPARI',
		    'area' => 4,
		    'location' => 'SUMBAGUT',
		    'total_score' => 89,
		    'notes' => '-',
	    ]);
	    App\UnitScore::create([
		    'category_id' => 2,
		    'type' => 'GRAPARI',
		    'area' => 3,
		    'location' => 'SUMBAGUT',
		    'total_score' => 63,
		    'notes' => 'RATA-RATA',
	    ]);
	    App\UnitScore::create([
		    'category_id' => 3,
		    'type' => 'GRAPARI',
		    'area' => 1,
		    'location' => 'SUMBAGUT',
		    'total_score' => 89,
		    'notes' => '-',
	    ]);
	    App\UnitScore::create([
		    'category_id' => 3,
		    'type' => 'GRAPARI',
		    'area' => 4,
		    'location' => 'SUMBAGUT',
		    'total_score' => 63,
		    'notes' => 'RATA-RATA',
	    ]);
	    App\UnitScore::create([
		    'category_id' => 11,
		    'type' => 'GRAPARI',
		    'area' => 3,
		    'location' => 'SUMBAGUT',
		    'total_score' => 63,
		    'notes' => 'RATA-RATA',
	    ]);
	    App\UnitScore::create([
		    'category_id' => 11,
		    'type' => 'GRAPARI',
		    'area' => 1,
		    'location' => 'SUMBAGUT',
		    'total_score' => 89,
		    'notes' => '-',
	    ]);
	    App\UnitScore::create([
		    'category_id' => 11,
		    'type' => 'GRAPARI',
		    'area' => 4,
		    'location' => 'SUMBAGUT',
		    'total_score' => 63,
		    'notes' => 'RATA-RATA',
	    ]);

    }
}
