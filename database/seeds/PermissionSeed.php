<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('cache:clear');
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        Permission::create(['name' => 'users_manage']);
        Permission::create(['name' => 'content_manage']);
        Permission::create(['name' => 'theme_manage']);
        Permission::create(['name' => 'order_manage']);
        Permission::create(['name' => 'device_manage']);
    }
}
