<?php

use Illuminate\Database\Seeder;

class UnitCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/* CATEGORY PARENT 1 */
        App\UnitCategory::create([
		    'parent_id' => 1,
		    'name' => 'BEST GRAPARI',
		    'coeficient' => 30,
	    ]);
	    App\UnitCategory::create([
		    'parent_id' => 1,
		    'name' => 'BEST SERVICE DIFFERENTIATION CE ACROSS CHANNEL',
		    'coeficient' => 20,
	    ]);
	    App\UnitCategory::create([
		    'parent_id' => 1,
		    'name' => 'BEST GRAPARI MITRA',
		    'coeficient' => 30,
	    ]);	    
	    App\UnitCategory::create([
		    'parent_id' => 1,
		    'name' => 'BEST FRONT OFFICE SUPPORT',
		    'coeficient' => 10,
	    ]);
	    App\UnitCategory::create([
		    'parent_id' => 1,
		    'name' => 'BEST BACK END SUPPORT',
		    'coeficient' => 10,
	    ]);
	    
	    /* CATEGORY PARENT 2 */
	    App\UnitCategory::create([
		    'parent_id' => 2,
		    'name' => 'BEST CALL CENTER OUTBOUND',
		    'coeficient' => 30,
	    ]);
	    App\UnitCategory::create([
		    'parent_id' => 2,
		    'name' => 'BEST CALL CENTER INBOUND',
		    'coeficient' => 40,
	    ]);
	    App\UnitCategory::create([
		    'parent_id' => 2,
		    'name' => 'BEST COMPLAINT HANDLING',
		    'coeficient' => 15,
	    ]);
	    App\UnitCategory::create([
		    'parent_id' => 2,
		    'name' => 'BEST TRAINER',
		    'coeficient' => 15,
	    ]);
	    
	    /* CATEGORY PARENT 3 */
	    App\UnitCategory::create([
		    'parent_id' => 3,
		    'name' => 'BEST BILLING COLLECTION',
		    'coeficient' => 100,
	    ]);
	    
    }
}
