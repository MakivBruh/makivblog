<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => "Makiv Fazlurrahman",
            'username' => "Scarlest",
            'email' => "makivgg@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('Makiv2008'),
            'remember_token' => Str::random(10),

        ]);

        User::factory(10)->create();
    }
}
