<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        $arrayOfPermissionNames = [
            
            'view-backups','create-backup','download-backup','destroy-backup',
            'view-authentication','view-settings','view-logs',
            'view-contacts','create-contact','edit-contact','destroy-contact',
            'view-clients','create-client','edit-client','destroy-client',
            'view-resume','create-resume','edit-resume','destroy-resume',
            'view-categories','create-category','edit-category','destroy-category',
            'view-posts','create-post','edit-post','destroy-post',
            'view-about','create-about','edit-about','destroy-about',
            'view-users','create-user','edit-user','destroy-user',
            'view-roles','create-role','edit-role','destroy-role',
            'view-permissions','create-permission','edit-permission','destroy-permission',
        ];
        $permissions = collect($arrayOfPermissionNames)->map(function ($permission) {
            return ['name' => $permission, 'guard_name' => 'web'];
        });
    
        Permission::insert($permissions->toArray());
        
        $admin = Role::create(['name' => 'super-admin']);
        $admin->givePermissionTo(Permission::all());
    }
}
