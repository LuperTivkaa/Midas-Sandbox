<?php

use Illuminate\Database\Seeder;

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
            'permission'=>[
                'create-user'=>true,
                'create-savings'=>true,
            ]
        ]);

        $admin = Role::create([
            'name'=>'Admin',
            'description'=>'Admin Role',
            'permission'=>[
                'create-user'=>true,
                'update-user'=>true,
                'view-user'=>true,
            ]
        ]);

        $accounts = Role::create([
            'name'=>'Accounts',
            'description'=>'Accounts Role',
            'permission'=>[
                'create-user'=>true,
                'update-user'=>true,
                'view-user'=>true,
            ]
        ]);
    }
}
