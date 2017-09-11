<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = ['Schools', 'Events', 'Beauty Pageant', 'Reality Shows', ' Seminars and Conference'];

        foreach($categories as $category)
        {

	        DB::table('categories')->insert([
	        	'name' => $category
	        ]);
	    }
    }
}
