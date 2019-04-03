<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'administrator']);
        $role->givePermissionTo('users_manage','content_manage','device_manage','theme_manage','order_manage');

        $role2 = Role::create(['name' => 'user']);
        $role2->givePermissionTo('content_manage','device_manage','theme_manage','order_manage');

        $role3 = Role::create(['name' => 'customer']);
        $role3->givePermissionTo('content_manage');
    }
}
