<?php

namespace Database\Seeders;

use App\Models\Users;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Users::factory(10)->create();
        \App\Models\Lagu::factory(10)->create();
        \App\Models\Transaksi::factory(30)->create();
        \App\Models\RiwayatLagu::factory(50)->create();
    }
}
