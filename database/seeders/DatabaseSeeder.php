<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // reset cached roles and permissions
        //app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions(); //Retirar para el lanzamiento en productivo

        // create permissions
        Permission::create(['name' => 'list']);
        Permission::create(['name' => 'create']);
        Permission::create(['name' => 'edit']);
        Permission::create(['name' => 'delete']);
        Permission::create(['name' => 'publish']);
        Permission::create(['name' => 'unpublish']);
        Permission::create(['name' => 'access']);


        // create roles and assign created permissions
        $role = Role::create(['name' => 'admin'])->givePermissionTo(Permission::all());
        $role = Role::create(['name' => 'writer'])->givePermissionTo(['create', 'edit', 'list', 'access']);
        $role = Role::create(['name' => 'moderator'])->givePermissionTo(['publish', 'unpublish', 'list', 'access']);
        $role = Role::create(['name' => 'guest'])->givePermissionTo(['access']);

        // users and its roles
        $user = User::create([
            'name' => 'administrador',
            'email' => 'admin@example.com',
            'password' => bcrypt('F@k3trant0r'),
        ]);
        $user->assignRole('admin');

        $user = User::create([
            'name' => 'editor',
            'email' => 'editor@example.com',
            'password' => bcrypt('F@k3trant0r'),
        ]);
        $user->assignRole('writer');

        $user = User::create([
            'name' => 'moderator',
            'email' => 'moderator@example.com',
            'password' => bcrypt('F@k3trant0r'),
        ]);
        $user->assignRole('moderator');

        $user = User::create([
            'name' => 'guest',
            'email' => 'guest@example.com',
            'password' => bcrypt('F@k3trant0r'),
        ]);
        $user->assignRole('guest');

    }
}
