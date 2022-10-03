<?php

namespace Database\Seeders;

use App\Models\Apod;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ApodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Apod::create([
            'title' => 'Picture of the day',
            'apiKey' => 'XecjRcFA4Wkg93qoXDgFGFvxKI22kV2y3dzl0tG0',
            'url' => 'https://api.nasa.gov/planetary/apod',
            'apiDate' => null,
            'apiStartDate' => null,
            'apiEndDate' => null,
            'apiCount' => null,
            'apiThumbs' => null,
        ]);
    }
}
