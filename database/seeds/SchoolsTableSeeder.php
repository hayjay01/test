<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('schools')->insert([
            'name' => 'greenspring',
            'location' => '10 alara Street, sabo yaba',
            'mailing_address' => '10 alara Street, sabo yaba',
            'phone' => '123456789',
            'motto' => 'Eduction The Best Asset',
            'mission_statement' => 'Feed the whole nation with food',
            'vision' => 'want to help the talented people',
            'aim' => 'Greenspring',
            'philosophy' => 'Greenspring',
            'why_choose_school' => 'I would love to be in the best school',
            'core_values' => 'Greenspring',
            'club_societies' => 'swimming, cycling, sprint, baskest ball',
            'logo' => 'Greenspring',
            'review' => 'The Best School',
            'status' => 1,
            'state_id' => 24,
            'category_id' => 1,
            'city' => 'lekki',
            'lga_id' => 1,
            'owner_id' => 1,
            'email'  => 'agbeyeseun1@gmail.com',
            'sub_category_id' => 2,
            'logo' => 'schools_greenspring_Capture3.PNG',

        ]);
    }
}
