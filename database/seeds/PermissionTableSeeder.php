<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'driver-list',
            'driver-create',
            'driver-edit',
            'driver-delete',
            'lga-edit',
            'lga-create',
            'lga-delete',
         ];

         foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
       }
    }
}
