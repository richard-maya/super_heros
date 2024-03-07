<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Universe;

class UniverseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $universe = new Universe;
        $universe->name = "DC";
        $universe->save();
        
        $universe = new Universe;
        $universe->name = "Marvel";
        $universe->save();
    }
}
