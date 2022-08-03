<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name' => 'super-admin',
            'last_name' => 'admin',
            // 'email' => 'admin@gmail.com',
            'phone' => '09330945684',
            'code_meli' => '65268822',
            'password' => bcrypt('12345678')
        ]);
        $role = Role::create(['name' => 'Super Admin']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);

        $userBorumand = User::create([
            'first_name' => 'سمیرا',
            'last_name' => 'برومند',
            // 'email' => 'admin@gmail.com',
            'phone' => '09129265192',
            'code_meli' => '12345678',
            'password' => bcrypt('12345678')
        ]);
        $roleBorumand = Role::create(['name' => 'Financial']);

        $permissionBorumand = Permission::where('name','Accountants-crud')->get();

        $roleBorumand->syncPermissions($permissionBorumand);

        $userBorumand->assignRole([$roleBorumand->id]);

        $user2 = User::create([
            'first_name' => 'احمد',
            'last_name' => 'رحمانی',
            // 'email' => 'admin@gmail.com',
            'phone' => '09121010328',
            'code_meli' => '12345678',
            'password' => bcrypt('12345678')
        ]);
        $role2 = Role::create(['name' => 'Financial']);

        $permission2 = Permission::where('name','Accountants-crud')->get();

        $role2->syncPermissions($permission2);

        $user2->assignRole([$role2->id]);







    }
}
