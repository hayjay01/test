<?php

use Illuminate\Database\Seeder;

class GradeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	$grades = ['Jss-1', 'Jss-2', 'Jss-3', 'Sss-1', 'Sss-2', 'Sss-3'];

    	foreach ($grades as $grade) 
    	{
    		# code...
    	
        DB::table('grades')->insert([
        	'name'=> $grade,
        ]);

    	}
    }
}
