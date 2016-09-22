<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* CATEGORY */
        $this->call(CategorySeeder::class);
        /* USERS */
        $this->call(UsersSeeder::class);        
        /* MASTER DATA - PARTICIPANT */
        $this->call(MasterData::class);
        /* SESSION */
        $this->call(SessionDataSeeder::class);
        /* UNIT CATEGORY PARENT */
        $this->call(UnitCategoryParentSeeder::class);
        /* UNIT CATEGORY */
        $this->call(UnitCategorySeeder::class);
        /* UNIT SCORE */
        $this->call(UnitScoreSeeder::class);
    }
}
