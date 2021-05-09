<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
         // create roles and assign existing permissions
         $tech = Role::create(['name' => 'tech']);
         $admin = Role::create(['name' => 'admin']);

         // create demo users
         $user = new User;
         $user->name = 'Example Tech';
         $user->email = 'tech@inventory.com';
         $user->password = bcrypt('tech');
         $user->save();
         $user->assignRole($tech);
 
         $user = new User;
         $user->name = 'Admin';
         $user->email = 'admin@inventory.com';
         $user->password = bcrypt('admin');
         $user->save();
         $user->assignRole($admin);

    }
}
