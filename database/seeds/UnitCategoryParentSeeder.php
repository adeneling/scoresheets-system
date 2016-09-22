<?php

use Illuminate\Database\Seeder;

class UnitCategoryParentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\UnitCategoryParent::create([
		    'name' => 'WALK IN',
	    ]);
	    App\UnitCategoryParent::create([
		    'name' => 'CALL CENTER',
	    ]);
	    App\UnitCategoryParent::create([
		    'name' => 'COLLECTION',
	    ]);
    }
}
