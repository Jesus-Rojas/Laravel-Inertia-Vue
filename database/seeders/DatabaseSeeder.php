<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory()->create([
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);

        Note::factory(30)->create();
    }
}
