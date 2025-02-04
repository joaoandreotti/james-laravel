<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\James;
use App\Models\User;

class JamesSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        for ($i = 0; $i < 10; $i++) {
            James::factory()->create([
                'user_id' => $users->random()->id,
            ]);
        }
    }
}
