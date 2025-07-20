<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Seeder\factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        // DB::table('users')->insert(
        //     [
        //         'name' => 'Admin',
        //         'email' => 'admin@admin.com',
        //         'email_verified_at' => now(),
        //         'password' => bcrypt('password'), // password
        //         'remember_token' => Str::random(10),
        //     ]
        // );

        User::factory()->count(40)->create();
    }
}
