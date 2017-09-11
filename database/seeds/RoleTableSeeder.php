<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
    {
        $roles = [
            ['name' => 'Super Admin', 'access_level' => 1],
            ['name' => 'Admin', 'access_level' => 2],
            ['name' => 'School Admin', 'access_level' => 3],
            ['name' => 'Event & Beauty Pageant Admin', 'access_level' => 4],
            ['name' => 'RealityShow Admin', 'access_level' => 5],
            ['name' => 'Seminars & Conference Admin', 'access_level' => 6],
            ['name' => 'User', 'access_level' => 7],
        ];
        
        foreach ($roles as $role ) {
            App\Model\Role::create($role);
            
        }
    }
}
