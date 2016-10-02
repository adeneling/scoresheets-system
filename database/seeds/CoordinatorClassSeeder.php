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
		$user->name = 'Coordinator 1';
		$user->email = 'coordinator1@gmail.com';
		$user->password = bcrypt('ss');
		$user->category_handled = '1,2,3,4,5,6,7,8,9,10,11,12,13,14';
		$user->save();
		$user->attachRole($coordinatorRole);
		$user = new User();
		$user->name = 'Coordinator 2';
		$user->email = 'coordinator2@gmail.com';
		$user->password = bcrypt('ss');
		$user->category_handled = '1,2,3,4,5,6,7,8,9,10,11,12,13,14';
		$user->save();
		$user->attachRole($coordinatorRole);
		$user = new User();
		$user->name = 'Coordinator 3';
		$user->email = 'coordinator3@gmail.com';
		$user->password = bcrypt('ss');
		$user->category_handled = '1,2,3,4,5,6,7,8,9,10,11,12,13,14';
		$user->save();
		$user->attachRole($coordinatorRole);
		$user = new User();
		$user->name = 'Coordinator 4';
		$user->email = 'coordinator4@gmail.com';
		$user->password = bcrypt('ss');
		$user->category_handled = '1,2,3,4,5,6,7,8,9,10,11,12,13,14';
		$user->save();
		$user->attachRole($coordinatorRole);
		$user = new User();
		$user->name = 'Coordinator 5';
		$user->email = 'coordinator5@gmail.com';
		$user->password = bcrypt('ss');
		$user->category_handled = '1,2,3,4,5,6,7,8,9,10,11,12,13,14';
		$user->save();
		$user->attachRole($coordinatorRole);

    }
}
