<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Package::create([
            'title' => 'Home Internet Standard',
            'slug' => 'home-internet-basic',
            'price' => 220000,
            'discount' => null,
            'status' => 'best',
            'service_id' => '1',
        ]);

        Package::create([
            'title' => 'Home Internet Plus',
            'slug' => 'home-internet-basic',
            'price' => 395000,
            'discount' => 250000,
            'status' => 'best',
            'service_id' => '1',
        ]);
    }
}
