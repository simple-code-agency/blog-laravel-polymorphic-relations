<?php

namespace Database\Seeders;

use App\Models\Sweet;
use App\Models\User;
use Illuminate\Database\Seeder;

class SweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sweet::factory()->count(20)->create();
    }
}
