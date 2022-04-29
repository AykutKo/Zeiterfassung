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
        $mitarbeiter = Role::create([
            'name' => 'mitarbeiter',
            'guard_name' => 'web'
        ]);
        $vertrieb = Role::create([
            'name' => 'vertrieb',
            'guard_name' => 'web'
        ]);

        Permission::create(['name' => 'test', 'guard_name' => 'web']);
        Permission::create(['name' => 'urlaub', 'guard_name' => 'web']);
        Permission::create(['name' => 'auswertung', 'guard_name' => 'web']);
        Permission::create(['name' => 'krankheit', 'guard_name' => 'web']);

        $admin->givePermissionTo('test');
        $admin->givePermissionTo('urlaub');
        $admin->givePermissionTo('auswertung');
        $admin->givePermissionTo('krankheit');

        $vertrieb->givePermissionTo('auswertung');

        $user = User::create([
            'firstname' =>'Aykut',
            'lastname'=>'Kocas',
            'email'=> 'aykut.kocas@aol.de',
            'birthday'=>'30.07.1992',
            'address'=>'Rosenweg',
            'plz'=>'58511',
            'city'=>'Lüdenscheid',
            'phone'=>'017683076639',
            'urlaubstage'=>'30',
            'krankheitstage'=>'0',
            'password'=> Hash::make('password'),
        ]);

        $user->assignRole('admin');
    }
}
