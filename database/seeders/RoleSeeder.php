<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'admin']);
        $role2 = Role::create(['name'=>'usuario']);

        Permission::create(['name'=>'curso'])->syncRoles([$role1]);
        Permission::create(['name'=>'categoria'])->syncRoles([$role1]);
        Permission::create(['name'=>'stream'])->syncRoles([$role1, $role2]);
    }
}
