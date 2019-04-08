<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'phone' => '0123456789',
                'identity_card' => '0123456789',
                'password' => Hash::make('123456789'),
                'gender' => 'male',
                'birthday' => '1996-10-25',
                'district_id' => 2,
                'subdistrict_id' => 37,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
