<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Permission;
use App\Module;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
    	$general_module_ids = Module::where('no_general', 0)->orderBy('id', 'asc')->pluck('name', 'id');

    	$permission_common_raw = [
    		'View', 'Add', 'Edit', 'Delete'
    	];

    	$permission_exceptional = [''];

    		foreach ($general_module_ids as $general_module_index => $general_module) {
    			foreach ($permission_common_raw as $key => $permission) {
    				$permission_name = ucwords($general_module).' '.$permission;
		        	Permission::create([
		        		'fk_module_id' => $general_module_index,
						'name' => $permission_name,
						'slug_name' => Str::slug($permission_name, '-'),
						'status' => $faker->randomElement(['1', '0'])
		        	]);
		        }
    		}
    }


}
