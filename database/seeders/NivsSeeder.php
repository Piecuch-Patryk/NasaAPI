<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Niv;

class NivsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Niv::create([
            'title' => "Image and Video Library",
            'description' => 'Use this API to access the NASA Image and Video Library site at images.nasa.gov.',
            'apiKey'=> 'XecjRcFA4Wkg93qoXDgFGFvxKI22kV2y3dzl0tG0',
        ]);
    }
}
