<?php

use Illuminate\Database\Seeder;

class RoleCreateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Role::create(['name'=>'superadmin']);
        App\Models\Role::create(['name'=>'admin']);
        App\Models\Role::create(['name'=>'moderator']);
        App\Models\Role::create(['name'=>'author']);
        App\Models\Role::create(['name'=>'user']);
    }
}
