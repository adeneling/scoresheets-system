<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat role admin
		$adminRole = new Role();
		$adminRole->name = "admin";
		$adminRole->display_name = "Admin";
		$adminRole->save();
		// Membuat role jury
		$juryRole = new Role();
		$juryRole->name = "jury";
		$juryRole->display_name = "Jury";
		$juryRole->save();
		// Membuat role member
		$memberRole = new Role();
		$memberRole->name = "member";
		$memberRole->display_name = "Member";
		$memberRole->save();
		// Membuat role guest
		$guestRole = new Role();
		$guestRole->name = "guest";
		$guestRole->display_name = "Guest";
		$guestRole->save();		

		// Membuat sample admin
		$admin = new User();
		$admin->name = 'Admin SS';
		$admin->email = 'admin@gmail.com';
		$admin->password = bcrypt('ss');
		$admin->save();
		$admin->attachRole($adminRole);
		// Membuat sample jury
		$admin = new User();
		$admin->name = 'Jury SS';
		$admin->email = 'jury@gmail.com';
		$admin->password = bcrypt('ss');
		$admin->save();
		$admin->attachRole($juryRole);
		// Membuat sample member
		$member = new User();
		$member->name = "Member";
		$member->email = 'member@gmail.com';
		$member->password = bcrypt('ss');
		$member->save();
		$member->attachRole($memberRole);
		// Membuat sample guest
		$member = new User();
		$member->name = "Guest";
		$member->email = 'guest@gmail.com';
		$member->password = bcrypt('ss');
		$member->save();
		$member->attachRole($guestRole);
    }
}
