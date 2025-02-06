<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Inserting a dummy user for testing
        DB::table('users')->insert([
            'user_name'  => 'admin',                   // Sample username
            'email'      => 'admin@fmis.gov.kh',       // Sample username
            'password'   => Hash::make('password123'), // Sample password (hashed)
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}