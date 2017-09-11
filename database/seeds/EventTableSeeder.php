<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';


        DB::table('events')->insert([
        	'event_name' => 'OxyMoron Of Kennyblaq',
        	'event_date' => '2017-12-24',
        	'event_lastEntry' => '2017-12-24',
        	'event_duration' => '4:0:0',
        	'event_ageLimit' => '18',
        	'event_price' => '20000.00',
        	'event_description' => $text,
        	'category_id' => '2',
        	'status'=> '1',
            'owner_id'=> 1,

        	]);
    }
}
