<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class MitarbeiterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);
        Role::create([
            'name' => 'writer',
            'guard_name' => 'web'
        ]);

        Permission::create(['name' => 'test', 'guard_name' => 'web']);

        $admin->givePermissionTo('test');

        $user = User::create([
            'firstname' =>'Aykut',
            'lastname'=>'Kocas',
            'email'=> 'aykut.kocas@aol.de',
            'birthday'=>'30.07.1992',
            'address'=>'Rosenweg',
            'plz'=>'58511',
            'city'=>'Lüdenscheid',
            'phone'=>'017683076639',
            'password'=> Hash::make('password'),
        ]);

        $user->assignRole('admin');
    }
}
