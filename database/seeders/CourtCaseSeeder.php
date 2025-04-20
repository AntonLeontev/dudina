<?php

namespace Database\Seeders;

use App\Models\CourtCase;
use Illuminate\Database\Seeder;

class CourtCaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CourtCase::factory()->count(10)->create();
    }
}
