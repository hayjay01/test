<?php

use Illuminate\Database\Seeder;

class GradeSchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $grade_id = 1;
        $amount = 10000;
        while($grade_id <= 6)
        {

        DB::table('school_grades')->insert([
        	'school_id'=>1,
        	'grade_id'=> $grade_id,
            'amount'=> $amount,
        ]);
        $grade_id++;
        $amount+=10000;
    	}

    }
}
