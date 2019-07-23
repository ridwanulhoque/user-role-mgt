<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $data = [
            ['name' => 'admin', 'description' => 'All access'],
            ['name' => 'author', 'description' => 'Can create and update/delete self posts']
        ];
        foreach($data as $role){
            Role::create($role);
        }
        
    }
}
