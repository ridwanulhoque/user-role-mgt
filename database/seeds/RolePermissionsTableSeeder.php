<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;
use App\RolePermission;
use Faker\Factory as Faker;

class RolePermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
    	$role_ids = Role::pluck('id');
    	$permission_ids = Permission::pluck('id');
    	foreach(range(1, 10) as $index){

			$faker_role_id = $faker->randomElement($role_ids);
			$faker_permissino_id = $faker->randomElement($permission_ids);

    		$role_permission_exists = RolePermission::where([
    			'role_id' => $faker_role_id,
    			'permission_id' => $faker_permissino_id
    		])->get();

			if(count($role_permission_exists)<1){
		    	RolePermission::create([
					'role_id' => $faker_role_id,
					'permission_id' => $faker_permissino_id
	        	]);
		   }
    
    	}
    }
}
