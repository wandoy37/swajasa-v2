<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'title' => 'Installasi LAN & Wi-Fi',
            'slug' => Str::slug('Installasi LAN & Wi-Fi', '-'),
            'description' => 'Jasa Installasi LAN dan Wireless dilakukan oleh team kami yang berpengalaman dalam bidangnya',
            'content' => 'Komunikasi makin mudah dan lancar dengan Dengan Swajasa nikmati internet yang mempua membantu kebutuhan anda',
            'status' => 'publish',
        ]);

        Service::create([
            'title' => 'Internet Desa Mandiri',
            'slug' => Str::slug('Internet Desa Mandiri', '-'),
            'description' => 'Teknologi yang mampu menjangkau seluruh pelosok Indonesia',
            'content' => 'Teknologi makin mudah dan lancar dengan Dengan Swajasa nikmati internet yang mempua membantu kebutuhan anda',
            'status' => 'draft',
        ]);

        Service::create([
            'title' => 'Production House Multimedia Creator',
            'slug' => Str::slug('Production House Multimedia Creator', '-'),
            'description' => 'Untuk para pembuat konten youtuber, Kami melayani pembuatan video commercial untuk iklan, company profile',
            'content' => 'Optimalkan konten anda, nikmati peningkatan insight bisnis yang anda bangun, raih bisnis bersama kami',
            'status' => 'draft',
        ]);

        Service::create([
            'title' => 'Pemasangan CCTV',
            'slug' => Str::slug('Pemasangan CCTV', '-'),
            'description' => 'Kami juga menyediakan jasa Pemasangan CCTV beserta Installasi CCTV',
            'content' => 'Tingkatkan keamanaan disekitar anda, nikmati pengalaman bisnis anda dengan keamanaan sekitar',
            'status' => 'draft',
        ]);
    }
}
