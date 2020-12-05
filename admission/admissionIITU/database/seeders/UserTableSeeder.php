<?php

namespace Database\Seeders;
use App\Models\Role;
use App\Models\User;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();


        $adminRole = Role::where('name', 'admin')->first();
        $userRole = Role::where('name', 'user')->first();


        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin01@gmail.com',
            'password' => Hash::make('Admin12345')
        ]);


        $admin ->roles()->attach($adminRole);
    }
}
