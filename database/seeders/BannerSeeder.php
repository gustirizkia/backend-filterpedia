<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::create([
            'nama' => 'header home page'
        ]);
        Banner::create([
            'nama' => 'Info Home Page'
        ]);
    }
}
