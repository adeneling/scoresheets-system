<?php

use Illuminate\Database\Seeder;

class MasterMember extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
    /*
    category_id = integer
    room_code = integer
    area = integer
    */
    App\MasterMember::create([
    'category_id' => 1,
    'nik' => '11012410',
    'name' => 'Agus Sari',
    'unit_type' => 'grapari',
    'unit_name' => 'Sun Plasa',
    'no_telp' => '6285275304288',
    'gender' => 'Female',
    'room_code' => 1,
    'region' => 'Sumbagut',
    'area' => 1,
    'email' => 'saribmj.90@gmail.com',
    'size_poloshirt' => 'S',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 1,
    'nik' => '14011448',
    'name' => 'Raja Gries Sheilla Moren',
    'unit_type' => 'grapari',
    'unit_name' => 'Mall SKA',
    'no_telp' => '628117688000',
    'gender' => 'Female',
    'room_code' => 1,
    'region' => 'Sumbagteng',
    'area' => 1,
    'email' => 'mooranye@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 1,
    'nik' => '15009514',
    'name' => 'Shena Giantasya',
    'unit_type' => 'grapari',
    'unit_name' => 'Bandung Banda',
    'no_telp' => '62811212211',
    'gender' => 'Female',
    'room_code' => 2,
    'region' => 'Jabar',
    'area' => 2,
    'email' => 'giantasya_shena@yahoo.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 1,
    'nik' => '15009857',
    'name' => 'Yani Dewi Erinesari',
    'unit_type' => 'grapari',
    'unit_name' => 'Semarang Mall Ciputra',
    'no_telp' => '628112799959',
    'gender' => 'Female',
    'room_code' => 2,
    'region' => 'Jateng',
    'area' => 3,
    'email' => 'yd.erenesari@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 1,
    'nik' => '12009738',
    'name' => 'Sayu Putu Okoningrum Loestiani',
    'unit_type' => 'grapari',
    'unit_name' => 'Denpasar',
    'no_telp' => '6281239345847',
    'gender' => 'Female',
    'room_code' => 3,
    'region' => 'BaliNusra',
    'area' => 3,
    'email' => 'chocolatecakicaki@gmail.com',
    'size_poloshirt' => 'S',



    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);
    App\MasterMember::create([
    'category_id' => 1,
    'nik' => '14010236',
    'name' => 'Andi Lana Andayani',
    'unit_type' => 'grapari',
    'unit_name' => 'Gorontalo',
    'no_telp' => '62811439934',
    'gender' => 'Female',
    'room_code' => 3,
    'region' => 'Sulawesi',
    'area' => 4,
    'email' => 'lanasiously@gmail.com',
    'size_poloshirt' => 'S',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 2,
    'nik' => '15009059',
    'name' => 'Novita Sari',
    'unit_type' => 'graparimitra',
    'unit_name' => 'Wahidin',
    'no_telp' => '6285359983392',
    'gender' => 'Female',
    'room_code' => 4,
    'region' => 'Sumbagut',
    'area' => 1,
    'email' => 'novita201092@gmail.com',
    'size_poloshirt' => 'M',



    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);
    App\MasterMember::create([
    'category_id' => 2,
    'nik' => '15008395',
    'name' => 'Silvia Ardita',
    'unit_type' => 'graparimitra',
    'unit_name' => 'Balaraja',
    'no_telp' => '62811169000',
    'gender' => 'Female',
    'room_code' => 4,
    'region' => 'West Jakarta',
    'area' => 2,
    'email' => 'silviaardita23@yahoo.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 2,
    'nik' => '15011707',
    'name' => 'Nindya Devi Mentari',
    'unit_type' => 'graparimitra',
    'unit_name' => 'BEC',
    'no_telp' => '628112230046',
    'gender' => 'Female',
    'room_code' => 5,
    'region' => 'Jabar',
    'area' => 2,
    'email' => 'nindyadm@yahoo.co.id',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 2,
    'nik' => '15010301',
    'name' => 'Anggita Primanti Esthiningtyas',
    'unit_type' => 'graparimitra',
    'unit_name' => 'Jogja City Mall',
    'no_telp' => '6281222702505',
    'gender' => 'Female',
    'room_code' => 5,
    'region' => 'Jateng',
    'area' => 3,
    'email' => 'anggiianggitaa6@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 2,
    'nik' => '15011645',
    'name' => 'Futih',
    'unit_type' => 'graparimitra',
    'unit_name' => 'Mojokerto',
    'no_telp' => '6282234262119',
    'gender' => 'Female',
    'room_code' => 6,
    'region' => 'Jatim',
    'area' => 3,
    'email' => 'futi.aljufry@gmail.com',
    'size_poloshirt' => '',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 2,
    'nik' => '13008704',
    'name' => 'Rina Puspita Sari',
    'unit_type' => 'graparimitra',
    'unit_name' => 'Nunukan',
    'no_telp' => '6285250851111',
    'gender' => 'Female',
    'room_code' => 6,
    'region' => 'Kalimantan',
    'area' => 4,
    'email' => 'midoryphyta@yahoo.co.id',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 7,
    'nik' => '14008185',
    'name' => 'Ni Made Diah Septiarini Putri',
    'unit_type' => 'grapari',
    'unit_name' => 'Kuta',
    'no_telp' => '628113999996',
    'gender' => 'Female',
    'room_code' => 7,
    'region' => 'BaliNusra',
    'area' => 3,
    'email' => 'dyahsputri@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 7,
    'nik' => '16009100',
    'name' => 'Dewanti Pratiwi Asyari',
    'unit_type' => 'grapari',
    'unit_name' => 'Kendari',
    'no_telp' => '62811402704',
    'gender' => 'Female',
    'room_code' => 7,
    'region' => 'Sulawesi',
    'area' => 4,
    'email' => 'dewand27@gmail.com',
    'size_poloshirt' => 'S',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 11,
    'nik' => '68210',
    'name' => 'Elvitrika Shanty',
    'unit_type' => 'grapari',
    'unit_name' => 'Cibubur',
    'no_telp' => '62811950818',
    'gender' => 'Female',
    'room_code' => 8,
    'region' => 'East Jakarta',
    'area' => 2,
    'email' => 'elvitrika_shanty@telkomsel.co.id',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 11,
    'nik' => '80215',
    'name' => 'Emira Intan Emmyr Moeis',
    'unit_type' => 'grapari',
    'unit_name' => 'Tasikmalaya',
    'no_telp' => '62811230306',
    'gender' => 'Female',
    'room_code' => 8,
    'region' => 'Jabar',
    'area' => 2,
    'email' => 'emira_ie_moeis@telkomsel.co.id',
    'size_poloshirt' => 'XXL',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 11,
    'nik' => '78234',
    'name' => 'Sri Wulandari',
    'unit_type' => 'grapari',
    'unit_name' => 'Probolinggo',
    'no_telp' => '62811370049',
    'gender' => 'Female',
    'room_code' => 9,
    'region' => 'Jatim',
    'area' => 3,
    'email' => 'sri_wulandari@telkomsel.co.id',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 11,
    'nik' => '79161',
    'name' => 'Dewi M. Sari',
    'unit_type' => 'grapari',
    'unit_name' => 'Semarang Mall Ciputra',
    'no_telp' => '628122668880',
    'gender' => 'Female',
    'room_code' => 9,
    'region' => 'Jateng',
    'area' => 3,
    'email' => 'dewi_m_sari@telkomsel.co.id',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 11,
    'nik' => '78253',
    'name' => 'Ervina Lesmonowati',
    'unit_type' => 'grapari',
    'unit_name' => 'Tarakan',
    'no_telp' => '62811530018',
    'gender' => 'Female',
    'room_code' => 10,
    'region' => 'Kalimantan',
    'area' => 4,
    'email' => 'vina.ndcie@gmail.com',
    'size_poloshirt' => 'XL',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 11,
    'nik' => '70258',
    'name' => 'Alfiani Mansyur',
    'unit_type' => 'grapari',
    'unit_name' => 'Makassar',
    'no_telp' => '62811414545',
    'gender' => 'Female',
    'room_code' => 10,
    'region' => 'Sulawesi',
    'area' => 4,
    'email' => 'Alfiani_Mansyur@telkomsel.co.id',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 3,
    'nik' => '16009908',
    'name' => 'Novi Eldiarti Simatupang',
    'unit_type' => 'CallCanter',
    'unit_name' => 'Medan',
    'no_telp' => '6285275565690',
    'gender' => 'Female',
    'room_code' => 11,
    'region' => 'Sumbagut',
    'area' => 1,
    'email' => 'novieldiarti@yahoo.co.id',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 3,
    'nik' => '11009802',
    'name' => 'Novita Putri',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Medan',
    'no_telp' => '6285287909873',
    'gender' => 'Female',
    'room_code' => 11,
    'region' => 'Sumbagut',
    'area' => 1,
    'email' => 'putri.novita20@yahoo.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 3,
    'nik' => '15010234',
    'name' => 'Siri Nurhasanah',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Bandung',
    'no_telp' => '6282219216171',
    'gender' => 'Female',
    'room_code' => 12,
    'region' => 'Jabar',
    'area' => 2,
    'email' => 'sitinurhasanh28@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 3,
    'nik' => '16009615',
    'name' => 'Lia Marliana',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Bandung',
    'no_telp' => '6285220666001',
    'gender' => 'Female',
    'room_code' => 12,
    'region' => 'Jabar',
    'area' => 2,
    'email' => 'lia.maharani2014@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 3,
    'nik' => '10092697',
    'name' => 'Astri Mega T',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Surabaya',
    'no_telp' => '6281230870152',
    'gender' => 'Female',
    'room_code' => 13,
    'region' => 'Jatim',
    'area' => 3,
    'email' => 'terataifunair@yahoo.com',
    'size_poloshirt' => 'S',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 3,
    'nik' => '11009560',
    'name' => 'Haslinda Hasan',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Makassar',
    'no_telp' => '6281354719139',
    'gender' => 'Female',
    'room_code' => 13,
    'region' => 'Sulawesi',
    'area' => 4,
    'email' => 'indah_the81@yahoo.co.id',
    'size_poloshirt' => 'S',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 4,
    'nik' => '09011778',
    'name' => 'Rizki Ivo Deswita',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Medan',
    'no_telp' => '6281361100478',
    'gender' => 'Female',
    'room_code' => 14,
    'region' => 'Sumbagut',
    'area' => 1,
    'email' => 'ivodeswita@gmail.com',
    'size_poloshirt' => 'XL',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 4,
    'nik' => '14008314',
    'name' => 'Margahayu',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Surabaya',
    'no_telp' => '628113111310',
    'gender' => 'Female',
    'room_code' => 14,
    'region' => 'Jatim',
    'area' => 3,
    'email' => 'bundamitra79@gmail.com',
    'size_poloshirt' => 'XXL',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 4,
    'nik' => '14013219',
    'name' => 'Fitri Kasanti',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Surabaya',
    'no_telp' => '628111788098',
    'gender' => 'Female',
    'room_code' => 15,
    'region' => 'Jatim',
    'area' => 3,
    'email' => 'fitrikasanti@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 4,
    'nik' => '15006312',
    'name' => 'Nur Irma Santi',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Makassar',
    'no_telp' => '6285242844473',
    'gender' => 'Female',
    'room_code' => 15,
    'region' => 'Sulawesi',
    'area' => 4,
    'email' => 'nurirmasantifh@gmail.com',
    'size_poloshirt' => 'S',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 4,
    'nik' => '14008306',
    'name' => 'Nurhalima',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Makassar',
    'no_telp' => '6285395879225',
    'gender' => 'Female',
    'room_code' => 16,
    'region' => 'Sulawesi',
    'area' => 4,
    'email' => 'nurhalima90@yahoo.com',
    'size_poloshirt' => 'S',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 9,
    'nik' => '7406',
    'name' => 'Fanny Prima',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Bandung',
    'no_telp' => '628112200247',
    'gender' => 'Female',
    'room_code' => 16,
    'region' => 'Jabar',
    'area' => 2,
    'email' => 'huani.1102@gmail.com',
    'size_poloshirt' => 'XL',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 9,
    'nik' => '10009790',
    'name' => 'Fitriani',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Makassar',
    'no_telp' => '6285299484543',
    'gender' => 'Female',
    'room_code' => 17,
    'region' => 'Sulawesi',
    'area' => 4,
    'email' => 'fitrianihalo@gmail.com',
    'size_poloshirt' => 'S',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 9,
    'nik' => '10012233',
    'name' => 'Ully Maemuna',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Makassar',
    'no_telp' => '62811444122',
    'gender' => 'Female',
    'room_code' => 17,
    'region' => 'Sulawesi',
    'area' => 4,
    'email' => 'ully.maemuna001@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 9,
    'nik' => '13009197',
    'name' => 'Selli Karlinawati',
    'unit_type' => 'Ecare',
    'unit_name' => 'Ecare',
    'no_telp' => '6281290846824',
    'gender' => 'Female',
    'room_code' => 18,
    'region' => 'Headquarter',
    'area' => 5,
    'email' => 'karlinawatiselli@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 9,
    'nik' => '13009491',
    'name' => 'Hernita Gurusinga',
    'unit_type' => 'Ecare',
    'unit_name' => 'Ecare',
    'no_telp' => '628111103400',
    'gender' => 'Female',
    'room_code' => 18,
    'region' => 'Headquarter',
    'area' => 5,
    'email' => 'hernita.gurusinga@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 8,
    'nik' => '15009036',
    'name' => 'Josephine Sarti Kanan',
    'unit_type' => 'backendsupport',
    'unit_name' => 'Sulawesi',
    'no_telp' => '628113951990',
    'gender' => 'Female',
    'room_code' => 19,
    'region' => 'Sulawesi',
    'area' => 4,
    'email' => 'josephinebunga@gmail.com',
    'size_poloshirt' => 'S',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 13,
    'nik' => '73273',
    'name' => 'Laili Asnia',
    'unit_type' => 'backendsupport',
    'unit_name' => 'Sumbagsel',
    'no_telp' => '62811740015',
    'gender' => 'Female',
    'room_code' => 19,
    'region' => 'Sumbagsel',
    'area' => 1,
    'email' => 'laili_asnia@telkomsel.co.id',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 13,
    'nik' => '70273',
    'name' => 'Hetty Haryatiningsih',
    'unit_type' => 'backendsupport',
    'unit_name' => 'Central Jakarta',
    'no_telp' => '62811125070',
    'gender' => 'Female',
    'room_code' => 20,
    'region' => 'Central Jakarta',
    'area' => 2,
    'email' => 'hetty_haryatiningsih@telkomsel.co.id',
    'size_poloshirt' => 'XXL',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 13,
    'nik' => '80035',
    'name' => 'Herni Damayani',
    'unit_type' => 'backendsupport',
    'unit_name' => 'Jabar',
    'no_telp' => '62811102309',
    'gender' => 'Female',
    'room_code' => 20,
    'region' => 'Jabar',
    'area' => 2,
    'email' => 'hernydamayani@yahoo.com',
    'size_poloshirt' => 'S',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 13,
    'nik' => '86003',
    'name' => 'Dewi Anggraeny',
    'unit_type' => 'backendsupport',
    'unit_name' => 'Jateng',
    'no_telp' => '628113315005',
    'gender' => 'Female',
    'room_code' => 21,
    'region' => 'Jateng',
    'area' => 3,
    'email' => 'dewi_anggraeny@telkomsel.co.id',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 13,
    'nik' => '70020',
    'name' => 'Idhawati Kusumaningtyas',
    'unit_type' => 'backendsupport',
    'unit_name' => 'Sulawesi',
    'no_telp' => '62811370006',
    'gender' => 'Female',
    'room_code' => 21,
    'region' => 'Sulawesi',
    'area' => 4,
    'email' => 'idhawati_kusumaningtyas@telkomsel.co.id',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 1,
    'nik' => '15011544',
    'name' => 'Ardy Putra',
    'unit_type' => 'grapari',
    'unit_name' => 'Central Park',
    'no_telp' => '6281294005266',
    'gender' => 'Male',
    'room_code' => 22,
    'region' => 'West Jakarta',
    'area' => 2,
    'email' => 'ardyyputraa@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 1,
    'nik' => '14009965',
    'name' => 'Heryansa',
    'unit_type' => 'grapari',
    'unit_name' => 'Samarinda',
    'no_telp' => '628115805800',
    'gender' => 'Male',
    'room_code' => 22,
    'region' => 'Kalimantan',
    'area' => 4,
    'email' => 'Heryansa88@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 2,
    'nik' => '13010804',
    'name' => 'M. Arief Syahputra Harahap',
    'unit_type' => 'graparimitra',
    'unit_name' => 'Krakatau',
    'no_telp' => '6281370726927',
    'gender' => 'Male',
    'room_code' => 23,
    'region' => 'Sumbagut',
    'area' => 1,
    'email' => 'arief_syahputra@ymail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 2,
    'nik' => '13010539',
    'name' => 'Imam Nurdiansyah',
    'unit_type' => 'graparimitra',
    'unit_name' => 'Singkawang',
    'no_telp' => '6285310454080',
    'gender' => 'Male',
    'room_code' => 23,
    'region' => 'Kalimantan',
    'area' => 4,
    'email' => 'imamtpr@yahoo.co.id',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 7,
    'nik' => '11011904',
    'name' => 'Erwin Casanova Sembiring',
    'unit_type' => 'grapari',
    'unit_name' => 'Medan Sun Plasa',
    'no_telp' => '628116912345',
    'gender' => 'Male',
    'room_code' => 24,
    'region' => 'Sumbagut',
    'area' => 1,
    'email' => 'erwin_casanova@ymail.com',
    'size_poloshirt' => 'XL',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 7,
    'nik' => '12008332',
    'name' => 'Calvin',
    'unit_type' => 'grapari',
    'unit_name' => 'Pekanbaru',
    'no_telp' => '628117525809',
    'gender' => 'Male',
    'room_code' => 24,
    'region' => 'Sumbagteng',
    'area' => 1,
    'email' => 'calvin.wongso90@gmail.com',
    'size_poloshirt' => 'XXXL',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 7,
    'nik' => '12009187',
    'name' => 'Pipih Septiana',
    'unit_type' => 'grapari',
    'unit_name' => 'Bandung Dago',
    'no_telp' => '6281313651168',
    'gender' => 'Male',
    'room_code' => 25,
    'region' => 'Jabar',
    'area' => 2,
    'email' => 'pipih.septina@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 7,
    'nik' => '14009843',
    'name' => 'Delly Indrawan',
    'unit_type' => 'grapari',
    'unit_name' => 'Bandung Banda',
    'no_telp' => '62811207979',
    'gender' => 'Male',
    'room_code' => 25,
    'region' => 'Jabar',
    'area' => 2,
    'email' => 'delly.indrawan@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 7,
    'nik' => '15010600',
    'name' => 'Rizky Romadhon Wicaksono',
    'unit_type' => 'grapari',
    'unit_name' => 'Gresik',
    'no_telp' => '628113199990',
    'gender' => 'Male',
    'room_code' => 26,
    'region' => 'Jatim',
    'area' => 3,
    'email' => 'agentofgaruda@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 7,
    'nik' => '15009314',
    'name' => 'Gede Kusna Wira Kusuma',
    'unit_type' => 'grapari',
    'unit_name' => 'Makassar',
    'no_telp' => '6285343899808',
    'gender' => 'Male',
    'room_code' => 26,
    'region' => 'Sulawesi',
    'area' => 4,
    'email' => 'cuzna92@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 11,
    'nik' => '82249',
    'name' => 'Sutresno',
    'unit_type' => 'grapari',
    'unit_name' => 'Padang',
    'no_telp' => '62811750025',
    'gender' => 'Male',
    'room_code' => 27,
    'region' => 'Sumbagteng',
    'area' => 1,
    'email' => 'sutresno@telkomsel.co.id',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 11,
    'nik' => '72337',
    'name' => 'Rezekinta',
    'unit_type' => 'grapari',
    'unit_name' => 'Kisaran',
    'no_telp' => '62811610052',
    'gender' => 'Male',
    'room_code' => 27,
    'region' => 'Sumbagut',
    'area' => 1,
    'email' => 'rezekinta@telkomsel.co.id',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 3,
    'nik' => '15009728',
    'name' => 'Josef Kusuma Rahardjo',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Surabaya',
    'no_telp' => '628113305353',
    'gender' => 'Male',
    'room_code' => 28,
    'region' => 'Jatim',
    'area' => 3,
    'email' => 'josef.kusuma.rahardjo@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 2,
    'nik' => '13011589',
    'name' => 'Primantho Roy',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Makassar',
    'no_telp' => '6285255504383',
    'gender' => 'Male',
    'room_code' => 28,
    'region' => 'Sulawesi',
    'area' => 4,
    'email' => 'primanthoroy@yahoo.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 4,
    'nik' => '14011451',
    'name' => 'Hendra Putra Hutagaol',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Medan',
    'no_telp' => '6281397337770',
    'gender' => 'Male',
    'room_code' => 29,
    'region' => 'Sumbagut',
    'area' => 1,
    'email' => 'putragaol@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 4,
    'nik' => '13011630',
    'name' => 'Riski Jianur',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Bandung',
    'no_telp' => '628112222596',
    'gender' => 'Male',
    'room_code' => 29,
    'region' => 'Jabar',
    'area' => 2,
    'email' => 'riskijianur@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 4,
    'nik' => '15011613',
    'name' => 'Irfan Supriadi',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Bandung',
    'no_telp' => '6285294464657',
    'gender' => 'Male',
    'room_code' => 30,
    'region' => 'Jabar',
    'area' => 2,
    'email' => 'irfansupriyadi44@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 9,
    'nik' => '003735',
    'name' => 'Katon Sukmono',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Medan',
    'no_telp' => '628126532601',
    'gender' => 'Male',
    'room_code' => 30,
    'region' => 'Sumbagut',
    'area' => 1,
    'email' => 'katonsukmono@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 9,
    'nik' => '15008351',
    'name' => 'Rollowe Sembiring',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Medan',
    'no_telp' => '6285297428008',
    'gender' => 'Male',
    'room_code' => 31,
    'region' => 'Sumbagut',
    'area' => 1,
    'email' => 'rollowesembiring@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 9,
    'nik' => '002347',
    'name' => 'Hendra',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Bandung',
    'no_telp' => '6281220180012',
    'gender' => 'Male',
    'room_code' => 31,
    'region' => 'Jabar',
    'area' => 2,
    'email' => 'aa.rahen@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 9,
    'nik' => '001740',
    'name' => 'Arif Sri Nurcahyo',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Surabaya',
    'no_telp' => '6281334582999',
    'gender' => 'Male',
    'room_code' => 32,
    'region' => 'Jatim',
    'area' => 3,
    'email' => 'arifsri176@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 9,
    'nik' => '001741',
    'name' => 'Bayu Prihatnolo',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Surabaya',
    'no_telp' => '6281330228407',
    'gender' => 'Male',
    'room_code' => 32,
    'region' => 'Jatim',
    'area' => 3,
    'email' => 'bayou.bsyu@gmail.com',
    'size_poloshirt' => 'XL',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 9,
    'nik' => '13008064',
    'name' => 'Erick Maranthona',
    'unit_type' => 'Ecare',
    'unit_name' => 'Ecare',
    'no_telp' => '628116442000',
    'gender' => 'Male',
    'room_code' => 33,
    'region' => 'Headquarter',
    'area' => 5,
    'email' => 'erick.potter89@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 9,
    'nik' => '11009432',
    'name' => 'Andrio Taulinno',
    'unit_type' => 'Ecare',
    'unit_name' => 'Ecare',
    'no_telp' => '628111104500',
    'gender' => 'Male',
    'room_code' => 33,
    'region' => 'Headquarter',
    'area' => 5,
    'email' => 'rioryu251211@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 9,
    'nik' => '10012516',
    'name' => 'Yohanes Apriandi Sianipar',
    'unit_type' => 'Ecare',
    'unit_name' => 'Ecare',
    'no_telp' => '628111830111',
    'gender' => 'Male',
    'room_code' => 34,
    'region' => 'Headquarter',
    'area' => 5,
    'email' => 'yohanessianipar85@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 8,
    'nik' => '13009733',
    'name' => 'Asep Muldani',
    'unit_type' => 'backendsupport',
    'unit_name' => 'Sumbagteng',
    'no_telp' => '62811760610',
    'gender' => 'Male',
    'room_code' => 34,
    'region' => 'Sumbagteng',
    'area' => 1,
    'email' => 'asepmuldaniii@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 8,
    'nik' => '12010148',
    'name' => 'Bobby Varyne Fernando',
    'unit_type' => 'backendsupport',
    'unit_name' => 'Sumbagsel',
    'no_telp' => '628117882121',
    'gender' => 'Male',
    'room_code' => 35,
    'region' => 'Sumbagsel',
    'area' => 1,
    'email' => 'bobby_v_fernando_x@telkomsel.co.id',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 8,
    'nik' => '15008727',
    'name' => 'Reza Cahyaningrat',
    'unit_type' => 'backendsupport',
    'unit_name' => 'Jabar',
    'no_telp' => '62811232287',
    'gender' => 'Male',
    'room_code' => 35,
    'region' => 'jabar',
    'area' => 2,
    'email' => 'rezaviboy@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 8,
    'nik' => '14010262',
    'name' => 'Ahmad Ramdan',
    'unit_type' => 'backendsupport',
    'unit_name' => 'Jabar',
    'no_telp' => '6285222990275',
    'gender' => 'Male',
    'room_code' => 36,
    'region' => 'Jabar',
    'area' => 2,
    'email' => 'ahmadramdan3@gmail.com',
    'size_poloshirt' => 'XL',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 8,
    'nik' => '10010154',
    'name' => 'M Irfan Marzuki',
    'unit_type' => 'backendsupport',
    'unit_name' => 'Jatim',
    'no_telp' => '6281330345180',
    'gender' => 'Male',
    'room_code' => 36,
    'region' => 'jatim',
    'area' => 3,
    'email' => 'mochamad_i_marzuki_x@telkomsel.co.id',
    'size_poloshirt' => 'XXXL',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 8,
    'nik' => '14012536',
    'name' => 'Mashuda R Luxmono',
    'unit_type' => 'backendsupport',
    'unit_name' => 'Jateng',
    'no_telp' => '6281326666210',
    'gender' => 'Male',
    'room_code' => 37,
    'region' => 'Jateng',
    'area' => 3,
    'email' => 'mashuda_r_luxmono_x@telkomsel.co.id',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 8,
    'nik' => '15009496',
    'name' => 'Heyder Paskah B Rombe',
    'unit_type' => 'backendsupport',
    'unit_name' => 'Sulawesi',
    'no_telp' => '62811494464',
    'gender' => 'Male',
    'room_code' => 37,
    'region' => 'Sulawesi',
    'area' => 4,
    'email' => 'allanrombe92@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 13,
    'nik' => '71300',
    'name' => 'Joni F. Sinaga',
    'unit_type' => 'backendsupport',
    'unit_name' => 'Sumbagut',
    'no_telp' => '62811657007',
    'gender' => 'Male',
    'room_code' => 38,
    'region' => 'Sumbagut',
    'area' => 1,
    'email' => 'joni_f_sinaga@telkomsel.co.id',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 8,
    'nik' => '13008065',
    'name' => 'Ramos',
    'unit_type' => 'backendsoppurt',
    'unit_name' => 'Headquarter',
    'no_telp' => '6285216111177',
    'gender' => 'Male',
    'room_code' => 38,
    'region' => 'Headquarter',
    'area' => 5,
    'email' => 'ramoz.saragih@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 8,
    'nik' => '14012962',
    'name' => 'Doddy Fahreza',
    'unit_type' => 'backendsupport',
    'unit_name' => 'Headquarter',
    'no_telp' => '6285270636471',
    'gender' => 'Male',
    'room_code' => 39,
    'region' => 'Headquarter',
    'area' => 5,
    'email' => 'doddyfahreza26@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 13,
    'nik' => '69236',
    'name' => 'Daniel E. Saputro',
    'unit_type' => 'backendsupport',
    'unit_name' => 'BaliNusra',
    'no_telp' => '62811100491',
    'gender' => 'Male',
    'room_code' => 39,
    'region' => 'BaliNusra',
    'area' => 3,
    'email' => 'daniel_e_saputro@telkomsel.co.id',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 13,
    'nik' => '74069',
    'name' => 'Eduardo Situmorang',
    'unit_type' => 'backendsupport',
    'unit_name' => 'Kalimantan',
    'no_telp' => '62811199684',
    'gender' => 'Male',
    'room_code' => 40,
    'region' => 'Kalimantan',
    'area' => 4,
    'email' => 'edusitumorang1@gmail.com',
    'size_poloshirt' => 'XL',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 10,
    'nik' => '13009331',
    'name' => 'Nixsi Erica Munte',
    'unit_type' => 'grapari',
    'unit_name' => 'Batam Penuin',
    'no_telp' => '62811692127',
    'gender' => 'Female',
    'room_code' => 41,
    'region' => 'Sumbagteng',
    'area' => 1,
    'email' => 'nixsi.erica@yahoo.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 10,
    'nik' => '14010329',
    'name' => 'Pitri Rantawati',
    'unit_type' => 'grapari',
    'unit_name' => 'Margo City',
    'no_telp' => '628111160066',
    'gender' => 'Female',
    'room_code' => 41,
    'region' => 'East Jakarta',
    'area' => 2,
    'email' => 'pitrirantawati@gmail.com',
    'size_poloshirt' => 'S',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 10,
    'nik' => '15009481',
    'name' => 'Putri Elvirasari',
    'unit_type' => 'grapari',
    'unit_name' => 'Tasikmalaya',
    'no_telp' => '6281323351000',
    'gender' => 'Female',
    'room_code' => 42,
    'region' => 'Jabar',
    'area' => 2,
    'email' => 'putri_elvirasari2_x@telkomsel.co.id',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 10,
    'nik' => '14011511',
    'name' => 'Jesyca M. B. Wawolumaya',
    'unit_type' => 'grapari',
    'unit_name' => 'Manado',
    'no_telp' => '62811435551',
    'gender' => 'Female',
    'room_code' => 42,
    'region' => 'Sulawesi',
    'area' => 4,
    'email' => 'jesyca.esy1992@gmail.com',
    'size_poloshirt' => 'S',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 10,
    'nik' => '14010071',
    'name' => 'Dewi Ayu Mulyasari',
    'unit_type' => 'grapari',
    'unit_name' => 'Pontianak',
    'no_telp' => '628115676869',
    'gender' => 'Female',
    'room_code' => 43,
    'region' => 'Kalimantan',
    'area' => 4,
    'email' => 'dewiayu.mlysr@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 12,
    'nik' => '16000588',
    'name' => 'Malasari Apriyanti',
    'unit_type' => 'graparimitra',
    'unit_name' => 'Bandar Jaya',
    'no_telp' => '6285357009999',
    'gender' => 'Female',
    'room_code' => 43,
    'region' => 'Sumbagsel',
    'area' => 1,
    'email' => 'malasari.apriyanti@gmail.com',
    'size_poloshirt' => 'S',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 12,
    'nik' => '10010534',
    'name' => 'Cindy Nastasia',
    'unit_type' => 'graparimitra',
    'unit_name' => 'Kota Cirebon',
    'no_telp' => '62811240360',
    'gender' => 'Female',
    'room_code' => 44,
    'region' => 'Jabar',
    'area' => 2,
    'email' => 'cindy.nastasia@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 12,
    'nik' => '13011386',
    'name' => 'Nur Kartika Prihatini',
    'unit_type' => 'graparimitra',
    'unit_name' => 'Bangkalan',
    'no_telp' => '6281235558667',
    'gender' => 'Female',
    'room_code' => 44,
    'region' => 'Jatim',
    'area' => 3,
    'email' => 'nurkartika.p@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 6,
    'nik' => '13008058',
    'name' => 'Inganita Pinem',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Medan',
    'no_telp' => '6281396475023',
    'gender' => 'Female',
    'room_code' => 45,
    'region' => 'Sumbagut',
    'area' => 1,
    'email' => 'inge.pinem@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 6,
    'nik' => '11011798',
    'name' => 'Monalisa Simanjuntak',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Medan',
    'no_telp' => '6281376055014',
    'gender' => 'Female',
    'room_code' => 45,
    'region' => 'Sumbagut',
    'area' => 1,
    'email' => 'mona.simanjuntak89@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 6,
    'nik' => '08009174',
    'name' => 'Machillah',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Surabaya',
    'no_telp' => '6281230008684',
    'gender' => 'Female',
    'room_code' => 46,
    'region' => 'Jatim',
    'area' => 3,
    'email' => 'chilla.estillo@gmail.com',
    'size_poloshirt' => 'XL',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 6,
    'nik' => '13010341',
    'name' => 'Siti Asyiah',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Surabaya',
    'no_telp' => '6282336302580',
    'gender' => 'Female',
    'room_code' => 46,
    'region' => 'Jatim',
    'area' => 3,
    'email' => 'sitia2889@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 6,
    'nik' => '10011212',
    'name' => 'Triwulandari',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Makassar',
    'no_telp' => '6285255447887',
    'gender' => 'Female',
    'room_code' => 47,
    'region' => 'Sulawesi',
    'area' => 4,
    'email' => 'triwul.ndari@gmail.com',
    'size_poloshirt' => 'S',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 14,
    'nik' => '001690',
    'name' => 'Cici Kemala Sari Lubis',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Medan',
    'no_telp' => '62811648348',
    'gender' => 'Female',
    'room_code' => 47,
    'region' => 'Sumbagut',
    'area' => 1,
    'email' => 'lubis.cici@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 14,
    'nik' => '002827',
    'name' => 'Indra Wahyuningsih',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Bandung',
    'no_telp' => '6282116344444',
    'gender' => 'Female',
    'room_code' => 48,
    'region' => 'Jabar',
    'area' => 2,
    'email' => 'indra.wahyuningsih83@gmail.com',
    'size_poloshirt' => 'XL',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 14,
    'nik' => '001756',
    'name' => 'Wuri Endah Lestari',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Surabaya',
    'no_telp' => '628113443444',
    'gender' => 'Female',
    'room_code' => 48,
    'region' => 'Jatim',
    'area' => 3,
    'email' => 'wurie.lestari@gmail.com',
    'size_poloshirt' => 'S',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 5,
    'nik' => '12009764',
    'name' => 'Wulan Sari Romadona',
    'unit_type' => 'Ecare',
    'unit_name' => 'Ecare',
    'no_telp' => '6281319363802',
    'gender' => 'Female',
    'room_code' => 49,
    'region' => 'Headquarter',
    'area' => 5,
    'email' => 'fadilahdona@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 10,
    'nik' => '13010211',
    'name' => 'Randi Andaru Putra',
    'unit_type' => 'grapari',
    'unit_name' => 'Mall SKA',
    'no_telp' => '628117574491',
    'gender' => 'Male',
    'room_code' => 50,
    'region' => 'Sumbagteng',
    'area' => 1,
    'email' => 'randiandaru@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 10,
    'nik' => '12010327',
    'name' => 'Januar Putra',
    'unit_type' => 'grapari',
    'unit_name' => 'Mataram',
    'no_telp' => '62811390113',
    'gender' => 'Male',
    'room_code' => 50,
    'region' => 'BaliNusra',
    'area' => 3,
    'email' => 'tl_mataram@telkomsel.co.id',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 10,
    'nik' => '14013222',
    'name' => 'Putu Anata Hary Sandy',
    'unit_type' => 'grapari',
    'unit_name' => 'Kuta',
    'no_telp' => '628113977779',
    'gender' => 'Male',
    'room_code' => 51,
    'region' => 'BaliNusra',
    'area' => 3,
    'email' => 'hary05sandy@gmail.com',
    'size_poloshirt' => 'XL',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 12,
    'nik' => '15008921',
    'name' => 'Nofirman Antoni',
    'unit_type' => 'graparimitra',
    'unit_name' => 'Bukit Tinggi',
    'no_telp' => '6285376678585',
    'gender' => 'Male',
    'room_code' => 51,
    'region' => 'Sumbagteng',
    'area' => 1,
    'email' => 'uda.anton@rocketmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 12,
    'nik' => '13009065',
    'name' => 'Muhammad Syamsudin',
    'unit_type' => 'graparimitra',
    'unit_name' => 'Margo City',
    'no_telp' => '628119999923',
    'gender' => 'Male',
    'room_code' => 52,
    'region' => 'East Jakarta',
    'area' => 2,
    'email' => 'isamchenko@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 12,
    'nik' => '16008685',
    'name' => 'Bayu Iwan Sugiyarto',
    'unit_type' => 'graparimitra',
    'unit_name' => 'Tunjungan Plaza',
    'no_telp' => '62811360086',
    'gender' => 'Male',
    'room_code' => 52,
    'region' => 'Jatim',
    'area' => 3,
    'email' => 'bayuiwansugiyarto@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 12,
    'nik' => '14008211',
    'name' => 'Mario Kelly Wenno',
    'unit_type' => 'graparimitra',
    'unit_name' => 'Nabire',
    'no_telp' => '6285244828800',
    'gender' => 'Male',
    'room_code' => 53,
    'region' => 'PapuaMaluku',
    'area' => 4,
    'email' => 'rio.wenno@gmail.com',
    'size_poloshirt' => 'XL',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 12,
    'nik' => '13011066',
    'name' => 'Muhammad Syuhri',
    'unit_type' => 'graparimitra',
    'unit_name' => 'Bone',
    'no_telp' => '6281242271576',
    'gender' => 'Male',
    'room_code' => 53,
    'region' => 'Sulawesi',
    'area' => 4,
    'email' => 'suhry.akira@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 6,
    'nik' => '08010970',
    'name' => 'Sandi Hadiat',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Bandung',
    'no_telp' => '6281220523906',
    'gender' => 'Male',
    'room_code' => 54,
    'region' => 'Jabar',
    'area' => 2,
    'email' => 'sandihadiat.7@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 6,
    'nik' => '005386',
    'name' => 'Taofan',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Bandung',
    'no_telp' => '62811220844',
    'gender' => 'Male',
    'room_code' => 54,
    'region' => 'Jabar',
    'area' => 2,
    'email' => 'taofan.valen@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 6,
    'nik' => '15008213',
    'name' => 'Adriansyah',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Makassar',
    'no_telp' => '6285330660161',
    'gender' => 'Male',
    'room_code' => 55,
    'region' => 'Sulawesi',
    'area' => 4,
    'email' => 'adriansyahccmksr@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 14,
    'nik' => '001675',
    'name' => 'Erwin Mangara Pasaribu',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Medan',
    'no_telp' => '6285270261777',
    'gender' => 'Male',
    'room_code' => 55,
    'region' => 'Sumbagut',
    'area' => 1,
    'email' => 'erwin.m.pasaribu@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 14,
    'nik' => '10010232',
    'name' => 'Indra Gunawan',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Bandung',
    'no_telp' => '6281321651011',
    'gender' => 'Male',
    'room_code' => 56,
    'region' => 'Jabar',
    'area' => 2,
    'email' => 'wchink1011@gmail.com ',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 14,
    'nik' => '11012628',
    'name' => 'Sigit Astiarso Nugroho',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Surabaya',
    'no_telp' => '6281332673767',
    'gender' => 'Male',
    'room_code' => 56,
    'region' => 'Jatim',
    'area' => 3,
    'email' => 'sheget@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 14,
    'nik' => '10011428',
    'name' => 'Andi Irfan Kf',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Makassar',
    'no_telp' => '628114198472',
    'gender' => 'Male',
    'room_code' => 57,
    'region' => 'Sulawesi',
    'area' => 4,
    'email' => 'macbonecelebes83@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 14,
    'nik' => '10010377',
    'name' => 'Haeruddin',
    'unit_type' => 'CallCenter',
    'unit_name' => 'Makassar',
    'no_telp' => '6281394229974',
    'gender' => 'Male',
    'room_code' => 57,
    'region' => 'Sulawesi',
    'area' => 4,
    'email' => 'haeruddin.udhink@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 14,
    'nik' => '09010575',
    'name' => 'Aries Anggoro',
    'unit_type' => 'Ecare',
    'unit_name' => 'Ecare',
    'no_telp' => '628111435758',
    'gender' => 'Male',
    'room_code' => 58,
    'region' => 'Headquarter',
    'area' => 5,
    'email' => 'aries_anggoro_x@telkomsel.co.id',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 5,
    'nik' => '14011222',
    'name' => 'Yogi Dhony Saputro',
    'unit_type' => 'Ecare',
    'unit_name' => 'Ecare',
    'no_telp' => '6281280997154',
    'gender' => 'Male',
    'room_code' => 58,
    'region' => 'Headquarter',
    'area' => 5,
    'email' => 'yogidhony100@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 5,
    'nik' => '15008061',
    'name' => 'Galang Mandala Putra',
    'unit_type' => 'Ecare',
    'unit_name' => 'Ecare',
    'no_telp' => '628119199105',
    'gender' => 'Male',
    'room_code' => 59,
    'region' => 'Headquarter',
    'area' => 5,
    'email' => 'galangmp0@gmail.com',
    'size_poloshirt' => 'L',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 5,
    'nik' => '14012708',
    'name' => 'Andhika Dwi Putra',
    'unit_type' => 'Ecare',
    'unit_name' => 'Ecare',
    'no_telp' => '628111114662',
    'gender' => 'Male',
    'room_code' => 59,
    'region' => 'Headquarter',
    'area' => 5,
    'email' => 'andhika.dwiputra19@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);



    App\MasterMember::create([
    'category_id' => 5,
    'nik' => '14013580',
    'name' => 'Putera Mahesa Kusumawardhana',
    'unit_type' => 'Ecare',
    'unit_name' => 'Ecare',
    'no_telp' => '6285333312263',
    'gender' => 'Male',
    'room_code' => 40,
    'region' => 'Headquarter',
    'area' => 5,
    'email' => 'puteramahesa91@gmail.com',
    'size_poloshirt' => 'M',
    'birth_place' => '',
    'birthday' => '',
    'join_date' => '',
    ]);
  }
}
