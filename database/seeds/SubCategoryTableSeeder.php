<?php

use Illuminate\Database\Seeder;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        $categories = ['University' =>1, 'Secondary School' =>1, 'Primary School' =>1, 'Music Shows' =>2, 'Comedy' =>2, 'Meetup' => 5];

        foreach($categories as $category => $value)
        {

	        DB::table('sub_categories')->insert([
	        	'name' => $category,
	        	'category_id' => $value
	        ]);
	    }
    }
}
