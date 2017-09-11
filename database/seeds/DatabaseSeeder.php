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
        // $this->call(SchoolsTableSeeder::class);
        $this->call(GradeTableSeeder::class);
        // $this->call(GradeSchoolTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(EventTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(SubCategoryTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(Lgas_1_TableSeeder::class);
        $this->call(Lgas_2_TableSeeder::class);
        $this->call(Lgas_3_TableSeeder::class);
        $this->call(Lgas_4_TableSeeder::class);
    }
}
