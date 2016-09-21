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
		$participantRole = new Role();
		$participantRole->name = "participant";
		$participantRole->display_name = "participant";
		$participantRole->save();
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
		for ($i=0; $i <12 ; $i++) { 
			$participant = new User();
			$participant->name = "Participant - ".$i;
			$participant->email = 'participant'. $i .'@gmail.com';
			$participant->category_id = 2;
			$participant->area = 1;
			$participant->region = 'Bandung';
			$participant->password = bcrypt('ss');
			$participant->save();
			$participant->attachRole($participantRole);
		}		
		// Membuat sample guest
		$guest = new User();
		$guest->name = "Guest";
		$guest->email = 'guest@gmail.com';
		$guest->password = bcrypt('ss');
		$guest->save();
		$guest->attachRole($guestRole);
    }
}
