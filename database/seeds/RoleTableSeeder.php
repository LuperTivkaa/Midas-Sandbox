<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $staff = Role::create([
            'name'=>'Staff',
            'description'=>'Staff Role',
            'permissions'=>json_encode([
                'create-user'=>true,
                'create-savings'=>true,
                'edit'=>true,
            ]),
        ]);

        $admin = Role::create([
            'name'=>'Admin',
            'description'=>'Admin Role',
            'permissions'=>json_encode([
                'create-user'=>true,
                'update-user'=>true,
                'view-user'=>true,
            ]),
        ]);

        $accounts = Role::create([
            'name'=>'Accounts',
            'description'=>'Accounts Role',
            'permissions'=>json_encode([
                'create-user'=>true,
                'update-user'=>true,
                'view-user'=>true,
                'review'=>true,
            ]),
        ]);
    }
}
