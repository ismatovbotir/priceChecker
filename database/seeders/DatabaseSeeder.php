<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PriceChecker;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create(
        //     [
        //         'name'=>'Admin',
        //         'email'=>'admin@admin.uz',
        //         'password'=>Hash::make('@987654321')
        //     ]
        // );
        PriceChecker::create(
            [
                
                'name'=>'Ц-1'
               
            ]
        );
    }
}
