<?php

namespace Scool\Enrollment\Database\Seeds;

use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Contracts\Role;

class EnrollmentPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'browse enrollments']);
        Permission::create(['name' => 'read enrollments']);
        Permission::create(['name' => 'edit enrollments']);
        Permission::create(['name' => 'add enrollments']);
        Permission::create(['name' => 'delete enrollments']);
        $role = Role::create(['name' => 'manage enrollments']);
        $role->givePermissionTo('browse enrollments');
        $role->givePermissionTo('read enrollments');
        $role->givePermissionTo('edit enrollments');
        $role->givePermissionTo('add enrollments');
        $role->givePermissionTo('delete enrollments');
    }
}
