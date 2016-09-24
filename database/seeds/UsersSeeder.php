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

		$admin = new User();
		$admin->name = 'Admin - 1';
		$admin->email = 'admin01@bestcsawards.com';
		$admin->password = bcrypt('admin01');
		$admin->save();
		$admin->attachRole($adminRole);
		$admin = new User();
		$admin->name = 'Admin - 2';
		$admin->email = 'admin02@bestcsawards.com';
		$admin->password = bcrypt('admin02');
		$admin->save();
		$admin->attachRole($adminRole);
		// Membuat sample jury
		$admin = new User();
		$admin->name = 'Andri Wibawanto';
		$admin->email = 'jury@gmail.com';
		$admin->password = bcrypt('ss');
		$admin->save();
		$admin->attachRole($juryRole);

		$admin = new User();
		$admin->name = 'Juri - 1';
		$admin->email = 'juri01@bestcsawards.com';
		$admin->password = bcrypt('juri01');
		$admin->save();
		$admin->attachRole($juryRole);
		$admin = new User();
		$admin->name = 'Juri - 2';
		$admin->email = 'juri02@bestcsawards.com';
		$admin->password = bcrypt('juri02');
		$admin->save();
		$admin->attachRole($juryRole);

		// Membuat participant
		
		// Membuat sample guest
		$guest = new User();
		$guest->name = "Guest";
		$guest->email = 'guest@gmail.com';
		$guest->password = bcrypt('ss');
		$guest->save();
		$guest->attachRole($guestRole);


		/* demo */
		$participant = new User();
		$participant->name = 'Agus Sari';
		$participant->nik = '11012410';
		$participant->email = 'saribmj.90@gmail.com';
		$participant->category_id = 1;
		$participant->area = 1;
		$participant->judged = 0;
		$participant->region = 'Sumbagut';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);


		$participant = new User();
		$participant->name = 'Raja Gries Sheilla Moren';
		$participant->nik = '14011448';
		$participant->email = 'me1@localhost';
		$participant->category_id = 1;
		$participant->area = 1;
		$participant->judged = 0;
		$participant->region = 'Sumbagteng';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);



		$participant = new User();
		$participant->name = 'Shena Giantasya';
		$participant->nik = '15009514';
		$participant->email = 'me2@localhost';
		$participant->category_id = 1;
		$participant->area = 2;
		$participant->judged = 0;
		$participant->region = 'Jabar';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);




		$participant = new User();
		$participant->name = 'Yani Dewi Erinesari';
		$participant->nik = '15009857';
		$participant->email = 'me3@localhost';
		$participant->category_id = 1;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jateng';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);




		$participant = new User();
		$participant->name = 'Sayu Putu Okoningrum Loestiani';
		$participant->nik = '12009738';
		$participant->email = 'me4@localhost';
		$participant->category_id = 1;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'BaliNusra';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);



		$participant = new User();
		$participant->name = 'Andi Lana Andayani';
		$participant->nik = '14010236';
		$participant->email = 'me5@localhost';
		$participant->category_id = 1;
		$participant->area = 4;
		$participant->judged = 0;
		$participant->region = 'Sulawesi';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);



		$participant = new User();
		$participant->name = 'Ardy Putra';
		$participant->nik = '15011544';
		$participant->email = 'me6@localhost';
		$participant->category_id = 1;
		$participant->area = 2;
		$participant->judged = 0;
		$participant->region = 'West Jakarta';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);


		$participant = new User();
		$participant->name = 'Heryansa';
		$participant->nik = '14009965';
		$participant->email = 'me7@localhost';
		$participant->category_id = 1;
		$participant->area = 4;
		$participant->judged = 0;
		$participant->region = 'Kalimantan';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);






		$participant = new User();
		$participant->name = 'Novita Sari';
		$participant->nik = '15009059';
		$participant->email = 'me8@localhost';
		$participant->category_id = 2;
		$participant->area = 1;
		$participant->judged = 0;
		$participant->region = 'Sumbagut';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);



		$participant = new User();
		$participant->name = 'Silvia Ardita';
		$participant->nik = '15008395';
		$participant->email = 'me9@localhost';
		$participant->category_id = 2;
		$participant->area = 2;
		$participant->judged = 0;
		$participant->region = 'West Jakarta';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);



		$participant = new User();
		$participant->name = 'Nindya Devi Mentari';
		$participant->nik = '15011707';
		$participant->email = 'me10@localhost';
		$participant->category_id = 2;
		$participant->area = 2;
		$participant->judged = 0;
		$participant->region = 'Jabar';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);


		$participant = new User();
		$participant->name = 'Anggita Primanti Esthiningtyas';
		$participant->nik = '15010301';
		$participant->email = 'me11@localhost';
		$participant->category_id = 2;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jateng';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);


		$participant = new User();
		$participant->name = 'Futih';
		$participant->nik = '15011645';
		$participant->email = 'me12@localhost';
		$participant->category_id = 2;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jatim';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);


		$participant = new User();
		$participant->name = 'Rina Puspita Sari';
		$participant->nik = '13008704';
		$participant->email = 'me13@localhost';
		$participant->category_id = 2;
		$participant->area = 4;
		$participant->judged = 0;
		$participant->region = 'Kalimantan';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);


		$participant = new User();
		$participant->name = 'M. Arief Syahputra Harahap';
		$participant->nik = '13010804';
		$participant->email = 'me14@localhost';
		$participant->category_id = 2;
		$participant->area = 1;
		$participant->judged = 0;
		$participant->region = 'Sumbagut';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);


		$participant = new User();
		$participant->name = 'Imam Nurdiansah';
		$participant->nik = '13010539';
		$participant->email = 'me15@localhost';
		$participant->category_id = 2;
		$participant->area = 4;
		$participant->judged = 0;
		$participant->region = 'Kalimantan';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);






		$participant = new User();
		$participant->name = 'Novi Eldiarti Simatupang';
		$participant->nik = '16009908';
		$participant->email = 'me16@localhost';
		$participant->category_id = 3;
		$participant->area = 1;
		$participant->judged = 0;
		$participant->region = 'Sumbagut';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);


		$participant = new User();
		$participant->name = 'Novita Putri';
		$participant->nik = '11009802';
		$participant->email = 'me17@localhost';
		$participant->category_id = 3;
		$participant->area = 1;
		$participant->judged = 0;
		$participant->region = 'Sumbagut';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
		$participant->name = 'Siti Nurhasanah';
		$participant->nik = '15010234';
		$participant->email = 'me18@localhost';
		$participant->category_id = 3;
		$participant->area = 2;
		$participant->judged = 0;
		$participant->region = 'Jabar';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
		$participant->name = 'Lia Marliana';
		$participant->nik = '16009615';
		$participant->email = 'me19@localhost';
		$participant->category_id = 3;
		$participant->area = 2;
		$participant->region = 'Jabar';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
		$participant->name = 'Astri Mega T';
		$participant->nik = '10092697';
		$participant->email = 'me20@localhost';
		$participant->category_id = 3;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jatim';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
		$participant->name = 'Haslinda Hasan';
		$participant->nik = '11009560';
		$participant->email = 'me21@localhost';
		$participant->category_id = 3;
		$participant->area = 4;
		$participant->judged = 0;
		$participant->region = 'Sulawesi';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
		$participant->name = 'Josef Kusuma Rahardjo';
		$participant->nik = '15009728';
		$participant->email = 'me22@localhost';
		$participant->category_id = 3;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jatim';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);


		$participant = new User();
		$participant->name = 'Primantho Roy';
		$participant->nik = '13011589';
		$participant->email = 'me23@localhost';
		$participant->category_id = 3;
		$participant->area = 4;
		$participant->judged = 0;
		$participant->region = 'Sulawesi';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);






		$participant = new User();
		$participant->name = 'Rizki Ivo Deswita';
		$participant->nik = '09011778';
		$participant->email = 'me24@localhost';
		$participant->category_id = 4;
		$participant->area = 1;
		$participant->judged = 0;
		$participant->region = 'Sumbagut';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
		$participant->name = 'Margahayu';
		$participant->nik = '14008314';
		$participant->email = 'me25@localhost';
		$participant->category_id = 4;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jatim';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
		$participant->name = 'Fitri Kasanti';
		$participant->nik = '14013219';
		$participant->email = 'me26@localhost';
		$participant->category_id = 4;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jatim';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
		$participant->name = 'Nur Irma Santi';
		$participant->nik = '15006312';
		$participant->email = 'me27@localhost';
		$participant->category_id = 4;
		$participant->area = 4;
		$participant->judged = 0;
		$participant->region = 'Sulawesi';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
		$participant->name = 'Nurhalima';
		$participant->nik = '14008306';
		$participant->email = 'me28@localhost';
		$participant->category_id = 4;
		$participant->area = 4;
		$participant->judged = 0;
		$participant->region = 'Sulawesi';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
		$participant->name = 'Hendra Putra Hutagaol';
		$participant->nik = '14011451';
		$participant->email = 'me29@localhost';
		$participant->category_id = 4;
		$participant->area = 1;
		$participant->judged = 0;
		$participant->region = 'Sumbagut';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
		$participant->name = 'Riski Jianur';
		$participant->nik = '13011630';
		$participant->email = 'me30@localhost';
		$participant->category_id = 4;
		$participant->area = 2;
		$participant->judged = 0;
		$participant->region = 'Jabar';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
		$participant->name = 'Irfan Supriyadi';
		$participant->nik = '15011613';
		$participant->email = 'me31@localhost';
		$participant->category_id = 4;
		$participant->area = 2;
		$participant->judged = 0;
		$participant->region = 'Jabar';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);




		$participant = new User();
		$participant->name = 'Rizki Ivo Deswita';
		$participant->nik = '09011778';
		$participant->email = 'me32@localhost';
		$participant->category_id = 5;
		$participant->area = 1;
		$participant->judged = 0;
		$participant->region = 'Sumbagut';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
		$participant->name = 'Margahayu';
		$participant->nik = '14008314';
		$participant->email = 'me33@localhost';
		$participant->category_id = 5;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jatim';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
		$participant->name = 'Fitri Kasanti';
		$participant->nik = '14013219';
		$participant->email = 'me34@localhost';
		$participant->category_id = 5;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jatim';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
		$participant->name = 'Fitri Kasanti';
		$participant->nik = '14013219';
		$participant->email = 'me35@localhost';
		$participant->category_id = 6;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jatim';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
		$participant->name = 'Fitri Kasanti';
		$participant->nik = '14013219';
		$participant->email = 'me36@localhost';
		$participant->category_id = 6;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jatim';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
		$participant->name = 'Fitri Kasanti';
		$participant->nik = '14013219';
		$participant->email = 'me37@localhost';
		$participant->category_id = 7;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jatim';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
		$participant->name = 'Fitri Kasanti';
		$participant->nik = '14013219';
		$participant->email = 'me38@localhost';
		$participant->category_id = 8;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jatim';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
		$participant->name = 'Fitri Kasanti';
		$participant->nik = '14013219';
		$participant->email = 'me39@localhost';
		$participant->category_id = 9;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jatim';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);
		$participant = new User();
		$participant->name = 'Fitri Kasanti';
		$participant->nik = '14013219';
		$participant->email = 'me40@localhost';
		$participant->category_id = 9;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jatim';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
		$participant->name = 'Fitri Kasanti';
		$participant->nik = '14013219';
		$participant->email = 'me41@localhost';
		$participant->category_id = 10;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jatim';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);
		$participant = new User();
		$participant->name = 'Fitri Kasanti';
		$participant->nik = '14013219';
		$participant->email = 'me42@localhost';
		$participant->category_id = 10;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jatim';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
		$participant->name = 'Fitri Kasanti';
		$participant->nik = '14013219';
		$participant->email = 'me43@localhost';
		$participant->category_id = 11;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jatim';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);
		$participant = new User();
		$participant->name = 'Fitri Kasanti';
		$participant->nik = '14013219';
		$participant->email = 'me44@localhost';
		$participant->category_id = 11;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jatim';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
		$participant->name = 'Fitri Kasanti';
		$participant->nik = '14013219';
		$participant->email = 'me45@localhost';
		$participant->category_id = 12;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jatim';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);
		$participant = new User();
		$participant->name = 'Fitri Kasanti';
		$participant->nik = '14013219';
		$participant->email = 'me46@localhost';
		$participant->category_id = 12;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jatim';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
		$participant->name = 'Fitri Kasanti';
		$participant->nik = '14013219';
		$participant->email = 'me47@localhost';
		$participant->category_id = 13;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jatim';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);
		$participant = new User();
		$participant->name = 'Fitri Kasanti';
		$participant->nik = '14013219';
		$participant->email = 'me48@localhost';
		$participant->category_id = 13;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jatim';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
		$participant->name = 'Fitri Kasanti';
		$participant->nik = '14013219';
		$participant->email = 'me49@localhost';
		$participant->category_id = 14;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jatim';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);
		$participant = new User();
		$participant->name = 'Fitri Kasanti';
		$participant->nik = '14013219';
		$participant->email = 'me50@localhost';
		$participant->category_id = 14;
		$participant->area = 3;
		$participant->judged = 0;
		$participant->region = 'Jatim';
		$participant->password = bcrypt('participant');
		$participant->save();
		$participant->attachRole($participantRole);
    }
}
