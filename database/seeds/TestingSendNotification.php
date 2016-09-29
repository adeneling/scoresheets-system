<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class TestingSendNotification extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $participantRole = Role::where('name', 'participant')->first();

	    $participant = new User();
	    $participant->category_id = 1;
	    $participant->nik = '11012410';
	    $participant->name = 'Agus Sari';
	    $participant->unit_type = 'grapari';
	    $participant->unit_name = 'Sun Plasa';
	    $participant->selection_date = '10/4/2016';
	    $participant->mobile_phone = '6285275304288';
	    $participant->gender = 'Female';
	    $participant->region = 'Sumbagut';
	    $participant->area = 1;
	    $participant->judged = 0;
	    $participant->email = 'maulanayusupp@gmail.com';
	    $participant->picture = 'picture.png';
	    $participant->password = bcrypt('bestcsawards');
	    $participant->birth_place = '';
	    $participant->birthday = '';
	    $participant->activated = 0;
		$participant->save();
		$participant->attachRole($participantRole);

		$participant = new User();
	    $participant->category_id = 1;
	    $participant->nik = '14011448';
	    $participant->name = 'Raja Gries Sheilla Moren';
	    $participant->unit_type = 'grapari';
	    $participant->unit_name = 'Mall SKA';
	    $participant->selection_date = '10/4/2016';
	    $participant->mobile_phone = '628117688000';
	    $participant->gender = 'Female';
	    $participant->region = 'Sumbagteng';
	    $participant->area = 1;
	    $participant->judged = 0;
	    $participant->email = 'adeneling@gmail.com';
	    $participant->picture = 'picture.png';
	    $participant->password = bcrypt('bestcsawards');
	    $participant->birth_place = '';
	    $participant->birthday = '';
	    $participant->activated = 0;
		$participant->save();
		$participant->attachRole($participantRole);
    }
}
