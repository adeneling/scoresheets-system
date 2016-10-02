<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class CoordinatorClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat role coordinator
		$coordinatorRole = new Role();
		$coordinatorRole->name = "coordinator";
		$coordinatorRole->display_name = "Coordinator Class";
		$coordinatorRole->save();

		// Membuat sample coordinator
		$user = new User();
		$user->name = 'Supriyanto';
		$user->email = 'supriyanto@telkomsel.co.id';
		$user->password = bcrypt('supriyanto2016');
		$user->category_handled = '1,2,3,4,5,6,7,8,9,10,11,12,13,14';
		$user->save();
		$user->attachRole($coordinatorRole);
		$user = new User();
		$user->name = 'Rizky A Ramadhan';
		$user->email = 'rizky_a_ramadhan@telkomsel.co.id';
		$user->password = bcrypt('rizky2016');
		$user->category_handled = '1,2,3,4,5,6,7,8,9,10,11,12,13,14';
		$user->save();
		$user->attachRole($coordinatorRole);
		$user = new User();
		$user->name = 'Anneke M Yunandar';
		$user->email = 'anneke_m_yunandar@telkomsel.co.id';
		$user->password = bcrypt('keke2016');
		$user->category_handled = '1,2,3,4,5,6,7,8,9,10,11,12,13,14';
		$user->save();
		$user->attachRole($coordinatorRole);
		$user = new User();
		$user->name = 'Raden SG Koswara';
		$user->email = 'raden_sg_koswara@telkomsel.co.id';
		$user->password = bcrypt('sugi2016');
		$user->category_handled = '1,2,3,4,5,6,7,8,9,10,11,12,13,14';
		$user->save();
		$user->attachRole($coordinatorRole);
		$user = new User();
		$user->name = 'Verdania P Syafitri';
		$user->email = 'verdania_p_syafitri@telkomsel.co.id';
		$user->password = bcrypt('puri2016');
		$user->category_handled = '1,2,3,4,5,6,7,8,9,10,11,12,13,14';
		$user->save();
		$user->attachRole($coordinatorRole);

    }
}
