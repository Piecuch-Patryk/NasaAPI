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
            'description' => 'One of the most popular websites at NASA is the Astronomy Picture of the Day. In fact, this website is one of the most popular websites across all federal agencies. It has the popular appeal of a Justin Bieber video. This endpoint structures the APOD imagery and associated metadata so that it can be repurposed for other applications.',
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
