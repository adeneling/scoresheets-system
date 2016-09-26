<?php

use Illuminate\Database\Seeder;

class MasterData extends Seeder
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
    App\MasterData::create([
        'category_id' => 1,
        'nik' => '11012410',
        'name' => 'Agus Sari',
        'unit_type' => 'grapari',
        'unit_name' => 'Sun Plasa',
        'selection_date' => '10/4/2016',
        'no_telp' => '6285275304288',
        'gender' => 'Female',
        'region' => 'Sumbagut',
        'area' => 1,
        'email' => 'saribmj.90@gmail.com',
        'picture' => 'picture_1.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 1,
        'nik' => '14011448',
        'name' => 'Raja Gries Sheilla Moren',
        'unit_type' => 'grapari',
        'unit_name' => 'Mall SKA',
        'selection_date' => '10/4/2016',
        'no_telp' => '628117688000',
        'gender' => 'Female',
        'region' => 'Sumbagteng',
        'area' => 1,
        'email' => 'mooranye@gmail.com',
        'picture' => 'picture_2.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 1,
        'nik' => '15009514',
        'name' => 'Shena Giantasya',
        'unit_type' => 'grapari',
        'unit_name' => 'Bandung Banda',
        'selection_date' => '10/4/2016',
        'no_telp' => '62811212211',
        'gender' => 'Female',
        'region' => 'Jabar',
        'area' => 2,
        'email' => 'giantasya_shena@yahoo.com',
        'picture' => 'picture_3.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 1,
        'nik' => '15009857',
        'name' => 'Yani Dewi Erinesari',
        'unit_type' => 'grapari',
        'unit_name' => 'Semarang Mall Ciputra',
        'selection_date' => '10/4/2016',
        'no_telp' => '628112799959',
        'gender' => 'Female',
        'region' => 'Jateng',
        'area' => 3,
        'email' => 'yd.erenesari@gmail.com',
        'picture' => 'picture_4.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 1,
        'nik' => '12009738',
        'name' => 'Sayu Putu Okoningrum Loestiani',
        'unit_type' => 'grapari',
        'unit_name' => 'Denpasar',
        'selection_date' => '10/4/2016',
        'no_telp' => '6281239345847',
        'gender' => 'Female',
        'region' => 'BaliNusra',
        'area' => 3,
        'email' => 'CHOCOLATECAKICAKI@GMAIL.COM',
        'picture' => 'picture_5.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 1,
        'nik' => '14010236',
        'name' => 'Andi Lana Andayani',
        'unit_type' => 'grapari',
        'unit_name' => 'Gorontalo',
        'selection_date' => '10/4/2016',
        'no_telp' => '62811439934',
        'gender' => 'Female',
        'region' => 'Sulawesi',
        'area' => 4,
        'email' => 'LANASIOUSLY@GMAIL.COM',
        'picture' => 'picture_6.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 2,
        'nik' => '15009059',
        'name' => 'Novita Sari',
        'unit_type' => 'graparimitra',
        'unit_name' => 'Wahidin',
        'selection_date' => '10/4/2016',
        'no_telp' => '6285359983392',
        'gender' => 'Female',
        'region' => 'Sumbagut',
        'area' => 1,
        'email' => 'NOVITA201092@GMAIL.COM',
        'picture' => 'picture_7.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 2,
        'nik' => '15008395',
        'name' => 'Silvia Ardita',
        'unit_type' => 'graparimitra',
        'unit_name' => 'Balaraja',
        'selection_date' => '10/4/2016',
        'no_telp' => '62811169000',
        'gender' => 'Female',
        'region' => 'West Jakarta',
        'area' => 2,
        'email' => 'silviaardita23@yahoo.com',
        'picture' => 'picture_8.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 2,
        'nik' => '15011707',
        'name' => 'Nindya Devi Mentari',
        'unit_type' => 'graparimitra',
        'unit_name' => 'BEC',
        'selection_date' => '10/4/2016',
        'no_telp' => '628112230046',
        'gender' => 'Female',
        'region' => 'Jabar',
        'area' => 2,
        'email' => 'nindyadm@yahoo.co.id',
        'picture' => 'picture_9.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 2,
        'nik' => '15010301',
        'name' => 'Anggita Primanti Esthiningtyas',
        'unit_type' => 'graparimitra',
        'unit_name' => 'Jogja City Mall',
        'selection_date' => '10/4/2016',
        'no_telp' => '6281222702505',
        'gender' => 'Female',
        'region' => 'Jateng',
        'area' => 3,
        'email' => 'anggiianggitaa6@gmail.com',
        'picture' => 'picture_10.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 2,
        'nik' => '15011645',
        'name' => 'Futih',
        'unit_type' => 'graparimitra',
        'unit_name' => 'Mojokerto',
        'selection_date' => '10/4/2016',
        'no_telp' => '6282234262119',
        'gender' => 'Female',
        'region' => 'Jatim',
        'area' => 3,
        'email' => 'futi.aljufry@gmail.com',
        'picture' => 'picture_11.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 2,
        'nik' => '13008704',
        'name' => 'Rina Puspita Sari',
        'unit_type' => 'graparimitra',
        'unit_name' => 'Nunukan',
        'selection_date' => '10/4/2016',
        'no_telp' => '6285250851111',
        'gender' => 'Female',
        'region' => 'Kalimantan',
        'area' => 4,
        'email' => 'midoryphyta@yahoo.co.id',
        'picture' => 'picture_12.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 7,
        'nik' => '14008185',
        'name' => 'Ni Made Diah Septiarini Putri',
        'unit_type' => 'grapari',
        'unit_name' => 'Kuta',
        'selection_date' => '10/4/2016',
        'no_telp' => '628113999996',
        'gender' => 'Female',
        'region' => 'BaliNusra',
        'area' => 3,
        'email' => 'dyahsputri@gmail.com',
        'picture' => 'picture_13.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 7,
        'nik' => '16009100',
        'name' => 'Dewanti Pratiwi Asyari',
        'unit_type' => 'grapari',
        'unit_name' => 'Kendari',
        'selection_date' => '10/4/2016',
        'no_telp' => '62811402704',
        'gender' => 'Female',
        'region' => 'Sulawesi',
        'area' => 4,
        'email' => 'DEWAND27@GMAIL.COM',
        'picture' => 'picture_14.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 11,
        'nik' => '68210',
        'name' => 'Elvitrika Shanty',
        'unit_type' => 'grapari',
        'unit_name' => 'Cibubur',
        'selection_date' => '10/4/2016',
        'no_telp' => '62811950818',
        'gender' => 'Female',
        'region' => 'East Jakarta',
        'area' => 2,
        'email' => 'elvitrika_shanty@telkomsel.co.id',
        'picture' => 'picture_15.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 11,
        'nik' => '80215',
        'name' => 'Emira Intan Emmyr Moeis',
        'unit_type' => 'grapari',
        'unit_name' => 'Tasikmalaya',
        'selection_date' => '10/4/2016',
        'no_telp' => '62811230306',
        'gender' => 'Female',
        'region' => 'Jabar',
        'area' => 2,
        'email' => 'emira_ie_moeis@telkomsel.co.id',
        'picture' => 'picture_16.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 11,
        'nik' => '78234',
        'name' => 'Sri Wulandari',
        'unit_type' => 'grapari',
        'unit_name' => 'Probolinggo',
        'selection_date' => '10/4/2016',
        'no_telp' => '811370049',
        'gender' => 'Female',
        'region' => 'Jatim',
        'area' => 3,
        'email' => 'sri_wulandari@telkomsel.co.id; wulan2010@gmail.com',
        'picture' => 'picture_17.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 11,
        'nik' => '79161',
        'name' => 'Dewi M. Sari',
        'unit_type' => 'grapari',
        'unit_name' => 'Semarang Mall Ciputra',
        'selection_date' => '10/4/2016',
        'no_telp' => '628122668880',
        'gender' => 'Female',
        'region' => 'Jateng',
        'area' => 3,
        'email' => 'dewi_m_sari@telkomsel.co.id',
        'picture' => 'picture_18.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 11,
        'nik' => '78253',
        'name' => 'Ervina Lesmonowati',
        'unit_type' => 'grapari',
        'unit_name' => 'Tarakan',
        'selection_date' => '10/4/2016',
        'no_telp' => '62811530018',
        'gender' => 'Female',
        'region' => 'Kalimantan',
        'area' => 4,
        'email' => 'vina.ndcie@gmail.com',
        'picture' => 'picture_19.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 11,
        'nik' => '70258',
        'name' => 'Alfiani Mansyur',
        'unit_type' => 'grapari',
        'unit_name' => 'Makassar',
        'selection_date' => '10/4/2016',
        'no_telp' => '62811414545',
        'gender' => 'Female',
        'region' => 'Sulawesi',
        'area' => 4,
        'email' => 'Alfiani_Mansyur@telkomsel.co.id',
        'picture' => 'picture_20.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 3,
        'nik' => '16009908',
        'name' => 'Novi Eldiarti Simatupang',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Medan',
        'selection_date' => '10/4/2016',
        'no_telp' => '6285275565690',
        'gender' => 'Female',
        'region' => 'Sumbagut',
        'area' => 1,
        'email' => 'novieldiarti@yahoo.co.id',
        'picture' => 'picture_21.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 3,
        'nik' => '11009802',
        'name' => 'Novita Putri',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Medan',
        'selection_date' => '10/4/2016',
        'no_telp' => '6285287909873',
        'gender' => 'Female',
        'region' => 'Sumbagut',
        'area' => 1,
        'email' => 'putri.novita20@yahoo.com',
        'picture' => 'picture_22.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 3,
        'nik' => '15010234',
        'name' => 'Siti Nurhasanah',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Bandung',
        'selection_date' => '10/4/2016',
        'no_telp' => '6282219216171',
        'gender' => 'Female',
        'region' => 'Jabar',
        'area' => 2,
        'email' => 'sitinurhasanh28@gmail.com',
        'picture' => 'picture_23.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 3,
        'nik' => '16009615',
        'name' => 'Lia Marliana',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Bandung',
        'selection_date' => '10/4/2016',
        'no_telp' => '6285220666001',
        'gender' => 'Female',
        'region' => 'Jabar',
        'area' => 2,
        'email' => 'lia.maharani2014@gmail.com',
        'picture' => 'picture_24.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 3,
        'nik' => '10092697',
        'name' => 'Astri Mega T',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Surabaya',
        'selection_date' => '10/4/2016',
        'no_telp' => '6281230870152',
        'gender' => 'Female',
        'region' => 'Jatim',
        'area' => 3,
        'email' => 'terataifunair@yahoo.com',
        'picture' => 'picture_25.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 3,
        'nik' => '11009560',
        'name' => 'Haslinda Hasan',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Makassar',
        'selection_date' => '10/4/2016',
        'no_telp' => '6281354719139',
        'gender' => 'Female',
        'region' => 'Sulawesi',
        'area' => 4,
        'email' => 'indah_the81@yahoo.co.id',
        'picture' => 'picture_26.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 4,
        'nik' => '09011778',
        'name' => 'Rizki Ivo Deswita',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Medan',
        'selection_date' => '10/4/2016',
        'no_telp' => '6281361100478',
        'gender' => 'Female',
        'region' => 'Sumbagut',
        'area' => 1,
        'email' => 'ivodeswita@gmail.com',
        'picture' => 'picture_27.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 4,
        'nik' => '14008314',
        'name' => 'Margahayu',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Surabaya',
        'selection_date' => '10/4/2016',
        'no_telp' => '628113111310',
        'gender' => 'Female',
        'region' => 'Jatim',
        'area' => 3,
        'email' => 'bundamitra79@gmail.com',
        'picture' => 'picture_28.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 4,
        'nik' => '14013219',
        'name' => 'Fitri Kasanti',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Surabaya',
        'selection_date' => '10/4/2016',
        'no_telp' => '628111788098',
        'gender' => 'Female',
        'region' => 'Jatim',
        'area' => 3,
        'email' => 'fitrikasanti@gmail.com',
        'picture' => 'picture_29.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 4,
        'nik' => '15006312',
        'name' => 'Nur Irma Santi',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Makassar',
        'selection_date' => '10/4/2016',
        'no_telp' => '6285242844473',
        'gender' => 'Female',
        'region' => 'Sulawesi',
        'area' => 4,
        'email' => 'nurirmasantifh@gmail.com',
        'picture' => 'picture_30.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 4,
        'nik' => '14008306',
        'name' => 'Nurhalima',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Makassar',
        'selection_date' => '10/4/2016',
        'no_telp' => '6285395879225',
        'gender' => 'Female',
        'region' => 'Sulawesi',
        'area' => 4,
        'email' => 'nurhalima90@yahoo.com',
        'picture' => 'picture_31.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 9,
        'nik' => '007406',
        'name' => 'Fanny Prina',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Bandung',
        'selection_date' => '10/4/2016',
        'no_telp' => '628112200247',
        'gender' => 'Female',
        'region' => 'Jabar',
        'area' => 2,
        'email' => 'huani.1102@gmail.com',
        'picture' => 'picture_32.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 9,
        'nik' => '10009790',
        'name' => 'Fitriani',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Makassar',
        'selection_date' => '10/4/2016',
        'no_telp' => '6285299484543',
        'gender' => 'Female',
        'region' => 'Sulawesi',
        'area' => 4,
        'email' => 'fitrianihalo@gmail.com',
        'picture' => 'picture_33.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 9,
        'nik' => '10012233',
        'name' => 'Ully Maemuna',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Makassar',
        'selection_date' => '10/4/2016',
        'no_telp' => '62811444122',
        'gender' => 'Female',
        'region' => 'Sulawesi',
        'area' => 4,
        'email' => 'ully.maemuna001@gmail.com',
        'picture' => 'picture_34.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 9,
        'nik' => '13009197',
        'name' => 'Selli Karlinawati',
        'unit_type' => 'Ecare',
        'unit_name' => 'Ecare',
        'selection_date' => '10/4/2016',
        'no_telp' => '6281290846824',
        'gender' => 'Female',
        'region' => 'Headquarter',
        'area' => 5,
        'email' => 'karlinawatiselli@gmail.com',
        'picture' => 'picture_35.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 9,
        'nik' => '13009491',
        'name' => 'Hernita Gurusinga',
        'unit_type' => 'Ecare',
        'unit_name' => 'Ecare',
        'selection_date' => '10/4/2016',
        'no_telp' => '628111103400',
        'gender' => 'Female',
        'region' => 'Headquarter',
        'area' => 5,
        'email' => 'hernita.gurusinga@gmail.com',
        'picture' => 'picture_36.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 8,
        'nik' => '15009036',
        'name' => 'Josephine Sarti Kanan',
        'unit_type' => 'backendsupport',
        'unit_name' => 'Sulawesi',
        'selection_date' => '10/4/2016',
        'no_telp' => '628113951990',
        'gender' => 'Female',
        'region' => 'Sulawesi',
        'area' => 4,
        'email' => 'josephinebunga@gmail.com',
        'picture' => 'picture_37.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 13,
        'nik' => '73273',
        'name' => 'Laili Asnia',
        'unit_type' => 'backendsupport',
        'unit_name' => 'Sumbagsel',
        'selection_date' => '10/4/2016',
        'no_telp' => '62811740015',
        'gender' => 'Female',
        'region' => 'Sumbagsel',
        'area' => 1,
        'email' => 'laili_asnia@telkomsel.co.id',
        'picture' => 'picture_38.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 13,
        'nik' => '70273',
        'name' => 'Hetty  Haryatiningsih',
        'unit_type' => 'backendsupport',
        'unit_name' => 'Central Jakarta',
        'selection_date' => '10/4/2016',
        'no_telp' => '62811125070',
        'gender' => 'Female',
        'region' => 'Central Jakarta',
        'area' => 2,
        'email' => 'hetty_haryatiningsih@telkomsel.co.id',
        'picture' => 'picture_39.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 13,
        'nik' => '80035',
        'name' => 'Herny Damayani',
        'unit_type' => 'backendsupport',
        'unit_name' => 'Jabar',
        'selection_date' => '10/4/2016',
        'no_telp' => '62811102309',
        'gender' => 'Female',
        'region' => 'Jabar',
        'area' => 2,
        'email' => 'hernydamayani@yahoo.com',
        'picture' => 'picture_40.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 13,
        'nik' => '86003',
        'name' => 'Dewi Anggraeny',
        'unit_type' => 'backendsupport',
        'unit_name' => 'Jateng',
        'selection_date' => '10/4/2016',
        'no_telp' => '628113315005',
        'gender' => 'Female',
        'region' => 'Jateng',
        'area' => 3,
        'email' => 'dewi_anggraeny@telkomsel.co.id',
        'picture' => 'picture_41.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 13,
        'nik' => '70020',
        'name' => 'Idhawati Kusumaningtyas',
        'unit_type' => 'backendsupport',
        'unit_name' => 'Sulawesi',
        'selection_date' => '10/4/2016',
        'no_telp' => '62811370006',
        'gender' => 'Female',
        'region' => 'Sulawesi',
        'area' => 4,
        'email' => 'idhawati_kusumaningtyas@telkomsel.co.id',
        'picture' => 'picture_42.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 1,
        'nik' => '15011544',
        'name' => 'Ardy Putra',
        'unit_type' => 'grapari',
        'unit_name' => 'Central Park',
        'selection_date' => '10/4/2016',
        'no_telp' => '6281294005266',
        'gender' => 'Male',
        'region' => 'West Jakarta',
        'area' => 2,
        'email' => 'ardyyputraa@gmail.com',
        'picture' => 'picture_43.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 1,
        'nik' => '14009965',
        'name' => 'Heryansa',
        'unit_type' => 'grapari',
        'unit_name' => 'Samarinda',
        'selection_date' => '10/4/2016',
        'no_telp' => '628115805800',
        'gender' => 'Male',
        'region' => 'Kalimantan',
        'area' => 4,
        'email' => 'Heryansa88@gmail.com',
        'picture' => 'picture_44.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 2,
        'nik' => '13010804',
        'name' => 'M. Arief Syahputra Harahap',
        'unit_type' => 'graparimitra',
        'unit_name' => 'Krakatau',
        'selection_date' => '10/4/2016',
        'no_telp' => '6281370726927',
        'gender' => 'Male',
        'region' => 'Sumbagut',
        'area' => 1,
        'email' => 'arief_syahputra@ymail.com',
        'picture' => 'picture_45.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 2,
        'nik' => '13010539',
        'name' => 'Imam Nurdiansah',
        'unit_type' => 'graparimitra',
        'unit_name' => 'Singkawang',
        'selection_date' => '10/4/2016',
        'no_telp' => '6285310454080',
        'gender' => 'Male',
        'region' => 'Kalimantan',
        'area' => 4,
        'email' => 'imamtpr@yahoo.co.id',
        'picture' => 'picture_46.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 7,
        'nik' => '11011904',
        'name' => 'Erwin Casanova Sembiring',
        'unit_type' => 'grapari',
        'unit_name' => 'Medan Sun Plasa',
        'selection_date' => '10/4/2016',
        'no_telp' => '628116912345',
        'gender' => 'Male',
        'region' => 'Sumbagut',
        'area' => 1,
        'email' => 'erwin_casanova@ymail.com',
        'picture' => 'picture_47.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 7,
        'nik' => '12008332',
        'name' => 'Calvin',
        'unit_type' => 'grapari',
        'unit_name' => 'Pekanbaru',
        'selection_date' => '10/4/2016',
        'no_telp' => '628117525809',
        'gender' => 'Male',
        'region' => 'Sumbagteng',
        'area' => 1,
        'email' => 'calvin.wongso90@gmail.com',
        'picture' => 'picture_48.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 7,
        'nik' => '12009187',
        'name' => 'Pipih Septina',
        'unit_type' => 'grapari',
        'unit_name' => 'Bandung Dago',
        'selection_date' => '10/4/2016',
        'no_telp' => '6281313651168',
        'gender' => 'Male',
        'region' => 'Jabar',
        'area' => 2,
        'email' => 'pipih.septina@gmail.com',
        'picture' => 'picture_49.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 7,
        'nik' => '14009843',
        'name' => 'Delly Indrawan',
        'unit_type' => 'grapari',
        'unit_name' => 'Bandung Banda',
        'selection_date' => '10/4/2016',
        'no_telp' => '62811207979',
        'gender' => 'Male',
        'region' => 'Jabar',
        'area' => 2,
        'email' => 'delly.indrawan@gmail.com',
        'picture' => 'picture_50.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 7,
        'nik' => '15010600',
        'name' => 'Rizky Romadhon Wicaksono',
        'unit_type' => 'grapari',
        'unit_name' => 'Gresik',
        'selection_date' => '10/4/2016',
        'no_telp' => '628113199990',
        'gender' => 'Male',
        'region' => 'Jatim',
        'area' => 3,
        'email' => 'AgentOfGaruda@gmail.com',
        'picture' => 'picture_51.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 7,
        'nik' => '15009314',
        'name' => 'Gede Kusna Wira Kusuma',
        'unit_type' => 'grapari',
        'unit_name' => 'Makassar',
        'selection_date' => '10/4/2016',
        'no_telp' => '6285343899808',
        'gender' => 'Male',
        'region' => 'Sulawesi',
        'area' => 4,
        'email' => 'cuzna92@gmail.com',
        'picture' => 'picture_52.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 11,
        'nik' => '82249',
        'name' => 'Sutresno',
        'unit_type' => 'grapari',
        'unit_name' => 'Padang',
        'selection_date' => '10/4/2016',
        'no_telp' => '62811750025',
        'gender' => 'Male',
        'region' => 'Sumbagteng',
        'area' => 1,
        'email' => 'sutresno@telkomsel.co.id',
        'picture' => 'picture_53.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 11,
        'nik' => '72337',
        'name' => 'Rezekinta',
        'unit_type' => 'grapari',
        'unit_name' => 'Kisaran',
        'selection_date' => '10/4/2016',
        'no_telp' => '62811610052',
        'gender' => 'Male',
        'region' => 'Sumbagut',
        'area' => 1,
        'email' => 'rezekinta@telkomsel.co.id',
        'picture' => 'picture_54.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 3,
        'nik' => '15009728',
        'name' => 'Josef Kusuma Rahardjo',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Surabaya',
        'selection_date' => '10/4/2016',
        'no_telp' => '628113305353',
        'gender' => 'Male',
        'region' => 'Jatim',
        'area' => 3,
        'email' => 'josef.kusuma.rahardjo@gmail.com',
        'picture' => 'picture_55.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 3,
        'nik' => '13011589',
        'name' => 'Primantho Roy',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Makassar',
        'selection_date' => '10/4/2016',
        'no_telp' => '6285255504383',
        'gender' => 'Male',
        'region' => 'Sulawesi',
        'area' => 4,
        'email' => ' primanthoroy@yahoo.com',
        'picture' => 'picture_56.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 4,
        'nik' => '14011451',
        'name' => 'Hendra Putra Hutagaol',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Medan',
        'selection_date' => '10/4/2016',
        'no_telp' => '6281397337770',
        'gender' => 'Male',
        'region' => 'Sumbagut',
        'area' => 1,
        'email' => 'putragaol@gmail.com',
        'picture' => 'picture_57.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 4,
        'nik' => '13011630',
        'name' => 'Riski Jianur',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Bandung',
        'selection_date' => '10/4/2016',
        'no_telp' => '628112222596',
        'gender' => 'Male',
        'region' => 'Jabar',
        'area' => 2,
        'email' => 'riskijianur@gmail.com',
        'picture' => 'picture_58.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 4,
        'nik' => '15011613',
        'name' => 'Irfan Supriyadi',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Bandung',
        'selection_date' => '10/4/2016',
        'no_telp' => '6285294464657',
        'gender' => 'Male',
        'region' => 'Jabar',
        'area' => 2,
        'email' => 'irfansupriyadi44@gmail.com',
        'picture' => 'picture_59.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 9,
        'nik' => '003735',
        'name' => 'Katon Sukmono',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Medan',
        'selection_date' => '10/4/2016',
        'no_telp' => '628126532601',
        'gender' => 'Male',
        'region' => 'Sumbagut',
        'area' => 1,
        'email' => 'katonsukmono@gmail.com',
        'picture' => 'picture_60.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 9,
        'nik' => '15008351',
        'name' => 'Rollowe Sembiring',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Medan',
        'selection_date' => '10/4/2016',
        'no_telp' => '6285297428008',
        'gender' => 'Male',
        'region' => 'Sumbagut',
        'area' => 1,
        'email' => ' rollowesembiring@gmail.com',
        'picture' => 'picture_61.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 9,
        'nik' => '002347',
        'name' => 'Hendra',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Bandung',
        'selection_date' => '10/4/2016',
        'no_telp' => '6281220180012',
        'gender' => 'Male',
        'region' => 'Jabar',
        'area' => 2,
        'email' => 'aa.rahen@gmail.com',
        'picture' => 'picture_62.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 9,
        'nik' => '001740',
        'name' => 'Arif Sri Nurcahyo',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Surabaya',
        'selection_date' => '10/4/2016',
        'no_telp' => '6281334582999',
        'gender' => 'Male',
        'region' => 'Jatim',
        'area' => 3,
        'email' => 'arifsri176@gmail.com',
        'picture' => 'picture_63.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 9,
        'nik' => '001741',
        'name' => 'Bayu Prihatnolo',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Surabaya',
        'selection_date' => '10/4/2016',
        'no_telp' => '6281330228407',
        'gender' => 'Male',
        'region' => 'Jatim',
        'area' => 3,
        'email' => 'bayou.bsyu@gmail.com',
        'picture' => 'picture_64.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 9,
        'nik' => '13008064',
        'name' => 'Erick Maranthona',
        'unit_type' => 'Ecare',
        'unit_name' => 'Ecare',
        'selection_date' => '10/4/2016',
        'no_telp' => '628116442000',
        'gender' => 'Male',
        'region' => 'Headquarter',
        'area' => 5,
        'email' => 'erick.potter89@gmail.com',
        'picture' => 'picture_65.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 9,
        'nik' => '11009432',
        'name' => 'Andrio Taulinno',
        'unit_type' => 'Ecare',
        'unit_name' => 'Ecare',
        'selection_date' => '10/4/2016',
        'no_telp' => '628111104500',
        'gender' => 'Male',
        'region' => 'Headquarter',
        'area' => 5,
        'email' => 'rioryu251211@gmail.com',
        'picture' => 'picture_66.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 9,
        'nik' => '10012516',
        'name' => 'Yohanes Apriandi Sianipar',
        'unit_type' => 'Ecare',
        'unit_name' => 'Ecare',
        'selection_date' => '10/4/2016',
        'no_telp' => '628111830111',
        'gender' => 'Male',
        'region' => 'Headquarter',
        'area' => 5,
        'email' => 'yohanessianipar85@gmail.com',
        'picture' => 'picture_67.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 8,
        'nik' => '13009733',
        'name' => 'Asep Muldani',
        'unit_type' => 'backendsupport',
        'unit_name' => 'Sumbagteng',
        'selection_date' => '10/4/2016',
        'no_telp' => '62811760610',
        'gender' => 'Male',
        'region' => 'Sumbagteng',
        'area' => 1,
        'email' => 'asepmuldaniii@gmail.com',
        'picture' => 'picture_68.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 8,
        'nik' => '12010148',
        'name' => 'Bobby Varyne Fernando',
        'unit_type' => 'backendsupport',
        'unit_name' => 'Sumbagsel',
        'selection_date' => '10/4/2016',
        'no_telp' => '628117882121',
        'gender' => 'Male',
        'region' => 'Sumbagsel',
        'area' => 1,
        'email' => 'bobby_v_fernando_x@telkomsel.co.id',
        'picture' => 'picture_69.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 8,
        'nik' => '15008727',
        'name' => 'Reza Cahyaningrat',
        'unit_type' => 'backendsupport',
        'unit_name' => 'Jabar',
        'selection_date' => '10/4/2016',
        'no_telp' => '62811232287',
        'gender' => 'Male',
        'region' => 'Jabar',
        'area' => 2,
        'email' => 'rezaviboy@gmail.com',
        'picture' => 'picture_70.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 8,
        'nik' => '14010262',
        'name' => 'Ahmad Ramdan',
        'unit_type' => 'backendsupport',
        'unit_name' => 'Jabar',
        'selection_date' => '10/4/2016',
        'no_telp' => '6285222990275',
        'gender' => 'Male',
        'region' => 'Jabar',
        'area' => 2,
        'email' => 'ahmadramdan3@gmail.com',
        'picture' => 'picture_71.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 8,
        'nik' => '10010154',
        'name' => 'M Irfan Marzuki',
        'unit_type' => 'backendsupport',
        'unit_name' => 'Jatim',
        'selection_date' => '10/4/2016',
        'no_telp' => '6281330345180',
        'gender' => 'Male',
        'region' => 'Jatim',
        'area' => 3,
        'email' => 'mochamad_i_marzuki_x@telkomsel.co.id',
        'picture' => 'picture_72.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 8,
        'nik' => '14012536',
        'name' => 'Mashuda R Luxmono',
        'unit_type' => 'backendsupport',
        'unit_name' => 'Jateng',
        'selection_date' => '10/4/2016',
        'no_telp' => '6281326666210',
        'gender' => 'Male',
        'region' => 'Jateng',
        'area' => 3,
        'email' => 'mashuda_r_luxmono_x@telkomsel.co.id',
        'picture' => 'picture_73.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 8,
        'nik' => '15009496',
        'name' => 'Heyder Paskah B Rombe',
        'unit_type' => 'backendsupport',
        'unit_name' => 'Sulawesi',
        'selection_date' => '10/4/2016',
        'no_telp' => '62811494464',
        'gender' => 'Male',
        'region' => 'Sulawesi',
        'area' => 4,
        'email' => 'allanrombe92@gmail.com',
        'picture' => 'picture_74.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 13,
        'nik' => '71300',
        'name' => 'Joni F. Sinaga',
        'unit_type' => 'backendsupport',
        'unit_name' => 'Sumbagut',
        'selection_date' => '10/4/2016',
        'no_telp' => '62811657007',
        'gender' => 'Male',
        'region' => 'Sumbagut',
        'area' => 1,
        'email' => 'joni_f_sinaga@telkomsel.co.id',
        'picture' => 'picture_75.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 8,
        'nik' => '13008065',
        'name' => 'Ramos',
        'unit_type' => 'backendsupport',
        'unit_name' => 'Headquarter',
        'selection_date' => '10/4/2016',
        'no_telp' => '6285216111177',
        'gender' => 'Male',
        'region' => 'Headquarter',
        'area' => 5,
        'email' => 'ramoz.saragih@gmail.com',
        'picture' => 'picture_76.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 8,
        'nik' => '14012962',
        'name' => 'Doddy Fahreza',
        'unit_type' => 'backendsupport',
        'unit_name' => 'Headquarter',
        'selection_date' => '10/4/2016',
        'no_telp' => '6285270636471',
        'gender' => 'Male',
        'region' => 'Headquarter',
        'area' => 5,
        'email' => 'doddyfahreza26@gmail.com',
        'picture' => 'picture_77.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 13,
        'nik' => '69236',
        'name' => 'Daniel E. Saputro',
        'unit_type' => 'backendsupport',
        'unit_name' => 'Balinusra',
        'selection_date' => '10/4/2016',
        'no_telp' => '811100491',
        'gender' => 'Male',
        'region' => 'BaliNusra',
        'area' => 3,
        'email' => 'daniel_e_saputro@telkomsel.co.id',
        'picture' => 'picture_78.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 13,
        'nik' => '74069',
        'name' => 'Eduardo SItumorang',
        'unit_type' => 'backendsupport',
        'unit_name' => 'Kalimantan',
        'selection_date' => '10/4/2016',
        'no_telp' => '62811199684',
        'gender' => 'Male',
        'region' => 'Kalimantan',
        'area' => 4,
        'email' => 'edusitumorang1@gmail.com',
        'picture' => 'picture_79.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 10,
        'nik' => '13009331',
        'name' => 'Nixsi Erica Munte',
        'unit_type' => 'grapari',
        'unit_name' => 'Batam Penuin',
        'selection_date' => '10/5/2016',
        'no_telp' => '62811692127',
        'gender' => 'Female',
        'region' => 'Sumbagteng',
        'area' => 1,
        'email' => 'nixsi.erica@yahoo.com',
        'picture' => 'picture_80.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 10,
        'nik' => '14010329',
        'name' => 'Pitri Rantawati',
        'unit_type' => 'grapari',
        'unit_name' => 'Margo City',
        'selection_date' => '10/5/2016',
        'no_telp' => '628111160066',
        'gender' => 'Female',
        'region' => 'East Jakarta',
        'area' => 2,
        'email' => 'pitrirantawati@gmail.com',
        'picture' => 'picture_81.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 10,
        'nik' => '15009481',
        'name' => 'Putri Elvirasari',
        'unit_type' => 'grapari',
        'unit_name' => 'Tasikmalaya',
        'selection_date' => '10/5/2016',
        'no_telp' => '6281323351000',
        'gender' => 'Female',
        'region' => 'Jabar',
        'area' => 2,
        'email' => 'putri_elvirasari2_x@telkomsel.co.id',
        'picture' => 'picture_82.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 10,
        'nik' => '14011511',
        'name' => 'Jesyca M.B Wawolumaya',
        'unit_type' => 'grapari',
        'unit_name' => 'Manado',
        'selection_date' => '10/5/2016',
        'no_telp' => '62811435551',
        'gender' => 'Female',
        'region' => 'Sulawesi',
        'area' => 4,
        'email' => 'Jesyca.esy1992@gmail.com',
        'picture' => 'picture_83.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 10,
        'nik' => '14010071',
        'name' => 'Dewi Ayu Mulyasari',
        'unit_type' => 'grapari',
        'unit_name' => 'Pontianak',
        'selection_date' => '10/5/2016',
        'no_telp' => '628115676869',
        'gender' => 'Female',
        'region' => 'Kalimantan',
        'area' => 4,
        'email' => 'DEWIAYU.MLYSR@GMAIL.COM',
        'picture' => 'picture_84.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 12,
        'nik' => '16000588',
        'name' => 'Malasari Apriyanti',
        'unit_type' => 'graparimitra',
        'unit_name' => 'Bandar Jaya',
        'selection_date' => '10/5/2016',
        'no_telp' => '6285357009999',
        'gender' => 'Female',
        'region' => 'Sumbagsel',
        'area' => 1,
        'email' => 'malasari.apriyanti@gmail.com',
        'picture' => 'picture_85.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 12,
        'nik' => '10010534',
        'name' => 'Cindy Nastasia',
        'unit_type' => 'graparimitra',
        'unit_name' => 'Kota Cirebon',
        'selection_date' => '10/5/2016',
        'no_telp' => '62811240360',
        'gender' => 'Female',
        'region' => 'Jabar',
        'area' => 2,
        'email' => 'cindy.nastasia@gmail.com',
        'picture' => 'picture_86.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 12,
        'nik' => '13011386',
        'name' => 'Nur Kartika Prihatini',
        'unit_type' => 'graparimitra',
        'unit_name' => 'Bangkalan',
        'selection_date' => '10/5/2016',
        'no_telp' => '6281235558667',
        'gender' => 'Female',
        'region' => 'Jatim',
        'area' => 3,
        'email' => 'nurkartika.p@gmail.com',
        'picture' => 'picture_87.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 6,
        'nik' => '13008058',
        'name' => 'Inganita Pinem',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Medan',
        'selection_date' => '10/5/2016',
        'no_telp' => '6281396475023',
        'gender' => 'Female',
        'region' => 'Sumbagut',
        'area' => 1,
        'email' => 'inge.pinem@gmail.com',
        'picture' => 'picture_88.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 6,
        'nik' => '11011798',
        'name' => 'Monalisa Simanjuntak',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Medan',
        'selection_date' => '10/5/2016',
        'no_telp' => '6281376055014',
        'gender' => 'Female',
        'region' => 'Sumbagut',
        'area' => 1,
        'email' => 'mona.simanjuntak89@gmail.com',
        'picture' => 'picture_89.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 6,
        'nik' => '08009174',
        'name' => 'Machillah',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Surabaya',
        'selection_date' => '10/5/2016',
        'no_telp' => '6281230008684',
        'gender' => 'Female',
        'region' => 'Jatim',
        'area' => 3,
        'email' => 'chilla.estillo@gmail.com',
        'picture' => 'picture_90.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 6,
        'nik' => '13010341',
        'name' => 'Siti Asyiah',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Surabaya',
        'selection_date' => '10/5/2016',
        'no_telp' => '6282336302580',
        'gender' => 'Female',
        'region' => 'Jatim',
        'area' => 3,
        'email' => 'sitia2889@gmail.com',
        'picture' => 'picture_91.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 6,
        'nik' => '10011212',
        'name' => 'Triwulandari',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Makassar',
        'selection_date' => '10/5/2016',
        'no_telp' => '6285255447887',
        'gender' => 'Female',
        'region' => 'Sulawesi',
        'area' => 4,
        'email' => 'triwul.ndari@gmail.com',
        'picture' => 'picture_92.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 14,
        'nik' => '001690',
        'name' => 'Cici Kemala Sari Lubis',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Medan',
        'selection_date' => '10/5/2016',
        'no_telp' => '62811648348',
        'gender' => 'Female',
        'region' => 'Sumbagut',
        'area' => 1,
        'email' => 'lubis.cici@gmail.com',
        'picture' => 'picture_93.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 14,
        'nik' => '002827',
        'name' => 'Indra Wahyuningsih',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Bandung',
        'selection_date' => '10/5/2016',
        'no_telp' => '6282116344444',
        'gender' => 'Female',
        'region' => 'Jabar',
        'area' => 2,
        'email' => 'indra.wahyuningsih83@gmail.com',
        'picture' => 'picture_94.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 14,
        'nik' => '001756',
        'name' => 'Wuri Endah Lestari',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Surabaya',
        'selection_date' => '10/5/2016',
        'no_telp' => '628113443444',
        'gender' => 'Female',
        'region' => 'Jatim',
        'area' => 3,
        'email' => 'wurie.lestari@gmail.com',
        'picture' => 'picture_95.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 5,
        'nik' => '12009764',
        'name' => 'Wulan Sari Romadona',
        'unit_type' => 'ecare',
        'unit_name' => 'Ecare',
        'selection_date' => '10/5/2016',
        'no_telp' => '6281319363802',
        'gender' => 'Female',
        'region' => 'Headquarter',
        'area' => 5,
        'email' => 'fadilahdona@gmail.com',
        'picture' => 'picture_96.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 10,
        'nik' => '13010211',
        'name' => 'Randi Andaru Putra',
        'unit_type' => 'grapari',
        'unit_name' => 'Mall SKA',
        'selection_date' => '10/5/2016',
        'no_telp' => '628117574491',
        'gender' => 'Male',
        'region' => 'Sumbagteng',
        'area' => 1,
        'email' => 'randiandaru@gmail.com',
        'picture' => 'picture_97.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 10,
        'nik' => '12010327',
        'name' => 'Januar Putra',
        'unit_type' => 'grapari',
        'unit_name' => 'Mataram',
        'selection_date' => '10/5/2016',
        'no_telp' => '62811390113',
        'gender' => 'Male',
        'region' => 'BaliNusra',
        'area' => 3,
        'email' => 'tl_mataram@telkomsel.co.id',
        'picture' => 'picture_98.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 10,
        'nik' => '14013222',
        'name' => 'Putu Anata Hary Sandy',
        'unit_type' => 'grapari',
        'unit_name' => 'Kuta',
        'selection_date' => '10/5/2016',
        'no_telp' => '628113977779',
        'gender' => 'Male',
        'region' => 'BaliNusra',
        'area' => 3,
        'email' => 'hary05sandy@gmail.com',
        'picture' => 'picture_99.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 12,
        'nik' => '15008921',
        'name' => 'Nofirman Antoni',
        'unit_type' => 'graparimitra',
        'unit_name' => 'Bukit Tinggi',
        'selection_date' => '10/5/2016',
        'no_telp' => '6285376678585',
        'gender' => 'Male',
        'region' => 'Sumbagteng',
        'area' => 1,
        'email' => 'uda.anton@rocketmail.com',
        'picture' => 'picture_100.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 12,
        'nik' => '13009065',
        'name' => 'Muhammad Syamsudin',
        'unit_type' => 'graparimitra',
        'unit_name' => 'Margo City',
        'selection_date' => '10/5/2016',
        'no_telp' => '628119999923',
        'gender' => 'Male',
        'region' => 'East Jakarta',
        'area' => 2,
        'email' => 'isamchenko@gmail.com',
        'picture' => 'picture_101.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 12,
        'nik' => '16008685',
        'name' => 'Bayu Iwan Sugiyarto',
        'unit_type' => 'graparimitra',
        'unit_name' => 'Tunjungan Plaza',
        'selection_date' => '10/5/2016',
        'no_telp' => '62811360086',
        'gender' => 'Male',
        'region' => 'Jatim',
        'area' => 3,
        'email' => 'bayuiwansugiyarto@gmail.com',
        'picture' => 'picture_102.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 12,
        'nik' => '14008211',
        'name' => 'Mario Kelly Wenno',
        'unit_type' => 'graparimitra',
        'unit_name' => 'Nabire',
        'selection_date' => '10/5/2016',
        'no_telp' => '6285244828800',
        'gender' => 'Male',
        'region' => 'PapuaMaluku',
        'area' => 4,
        'email' => 'rio.wenno@gmail.com',
        'picture' => 'picture_103.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 12,
        'nik' => '13011066',
        'name' => 'Muhammad Syuhri',
        'unit_type' => 'graparimitra',
        'unit_name' => 'Bone',
        'selection_date' => '10/5/2016',
        'no_telp' => '6281242271576',
        'gender' => 'Male',
        'region' => 'Sulawesi',
        'area' => 4,
        'email' => 'suhry.akira@gmail.com',
        'picture' => 'picture_104.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 6,
        'nik' => '08010970',
        'name' => 'Sandi Hadiat',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Bandung',
        'selection_date' => '10/5/2016',
        'no_telp' => '6281220523906',
        'gender' => 'Male',
        'region' => 'Jabar',
        'area' => 2,
        'email' => 'sandihadiat.7@gmail.com',
        'picture' => 'picture_105.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 6,
        'nik' => '005386',
        'name' => 'Taofan',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Bandung',
        'selection_date' => '10/5/2016',
        'no_telp' => '62811220844',
        'gender' => 'Male',
        'region' => 'Jabar',
        'area' => 2,
        'email' => 'taofan.valen@gmail.com',
        'picture' => 'picture_106.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 6,
        'nik' => '15008213',
        'name' => 'Adriansyah',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Makassar',
        'selection_date' => '10/5/2016',
        'no_telp' => '6285330660161',
        'gender' => 'Male',
        'region' => 'Sulawesi',
        'area' => 4,
        'email' => 'adriansyahccmksr@gmail.com',
        'picture' => 'picture_107.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 14,
        'nik' => '001675',
        'name' => 'Erwin Mangara Pasaribu',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Medan',
        'selection_date' => '10/5/2016',
        'no_telp' => '6285270261777',
        'gender' => 'Male',
        'region' => 'Sumbagut',
        'area' => 1,
        'email' => 'erwin.m.pasaribu@gmail.com',
        'picture' => 'picture_108.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 14,
        'nik' => '10010232',
        'name' => 'Indra Gunawan',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Bandung',
        'selection_date' => '10/5/2016',
        'no_telp' => '6281321651011',
        'gender' => 'Male',
        'region' => 'Jabar',
        'area' => 2,
        'email' => 'wchink1011@gmail.com ',
        'picture' => 'picture_109.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 14,
        'nik' => '11012628',
        'name' => 'Sigit Astiarso Nugroho',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Surabaya',
        'selection_date' => '10/5/2016',
        'no_telp' => '6281332673767',
        'gender' => 'Male',
        'region' => 'Jatim',
        'area' => 3,
        'email' => 'sheget@gmail.com',
        'picture' => 'picture_110.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 14,
        'nik' => '10011428',
        'name' => 'Andi Irfan Kf',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Makassar',
        'selection_date' => '10/5/2016',
        'no_telp' => '628114198472',
        'gender' => 'Male',
        'region' => 'Sulawesi',
        'area' => 4,
        'email' => 'macbonecelebes83@gmail.com',
        'picture' => 'picture_111.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 14,
        'nik' => '10010377',
        'name' => 'Haeruddin',
        'unit_type' => 'CallCenter',
        'unit_name' => 'Makassar',
        'selection_date' => '10/5/2016',
        'no_telp' => '6281394229974',
        'gender' => 'Male',
        'region' => 'Sulawesi',
        'area' => 4,
        'email' => 'haeruddin.udhink@gmail.com',
        'picture' => 'picture_112.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 14,
        'nik' => '09010575',
        'name' => 'Aries Anggoro',
        'unit_type' => 'ecare',
        'unit_name' => 'Ecare',
        'selection_date' => '10/5/2016',
        'no_telp' => '628111435758',
        'gender' => 'Male',
        'region' => 'Headquarter',
        'area' => 5,
        'email' => 'aries_anggoro_x@telkomsel.co.id',
        'picture' => 'picture_113.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 5,
        'nik' => '14011222',
        'name' => 'Yogi dhony saputro',
        'unit_type' => 'ecare',
        'unit_name' => 'Ecare',
        'selection_date' => '10/5/2016',
        'no_telp' => '6281280997154',
        'gender' => 'Male',
        'region' => 'Headquarter',
        'area' => 5,
        'email' => 'yogidhony100@gmail.com',
        'picture' => 'picture_114.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 5,
        'nik' => '15008061',
        'name' => 'Galang Mandala Putra',
        'unit_type' => 'ecare',
        'unit_name' => 'Ecare',
        'selection_date' => '10/5/2016',
        'no_telp' => '628119199105',
        'gender' => 'Male',
        'region' => 'Headquarter',
        'area' => 5,
        'email' => 'galangmp0@gmail.com',
        'picture' => 'picture_115.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 5,
        'nik' => '14012708',
        'name' => 'Andhika Dwi Putra',
        'unit_type' => 'ecare',
        'unit_name' => 'Ecare',
        'selection_date' => '10/5/2016',
        'no_telp' => '628111114662',
        'gender' => 'Male',
        'region' => 'Headquarter',
        'area' => 5,
        'email' => 'andhika.dwiputra19@gmail.com',
        'picture' => 'picture_116.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

    App\MasterData::create([
        'category_id' => 5,
        'nik' => '14013580',
        'name' => 'Putera Mahesa Kusumawardhana',
        'unit_type' => 'ecare',
        'unit_name' => 'Ecare',
        'selection_date' => '10/5/2016',
        'no_telp' => '6285333312263',
        'gender' => 'Male',
        'region' => 'Headquarter',
        'area' => 5,
        'email' => 'puteramahesa91@gmail.com',
        'picture' => 'picture_117.jpg',
        'birth_place' => '',
        'birthday' => '',
        'join_date' => ''
        ]);

  }
}
