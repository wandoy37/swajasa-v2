<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Config::create([
            'title' => 'Swajasa Lintas',
            'brand_name' => 'Swajasa',
            'description' => 'Penyedia layanan internet provider dan Multimedia sebagai solusi maupun penunjang bisnis anda',
            'about' => 'Kami merupakan badan usaha yang menyediakan jasa Internet, Multimedia dan jasa lainnya yang berhubungan dengan teknologi. Kami memberikan solusi bisnis untuk kecepatan, kehandalan, dan kemampuan untuk memindahkan sejumlah besar data dengan menggunakan media koneksi Fiber Optic yang memberikan ketersediaan tinggi, stabilitas dan kecepatan internet untuk kebutuhan anda.',
            'benefit' => 'Nikmati layanan kami, segera hubungi kami, dan ikuti media sosial kami untuk mendapatkan informasi seputar layanan dan harga spesial',
            'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6237706911043!2d117.10287369999999!3d-0.5658196999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df6813de922b491%3A0x26a5e1f75e6dae15!2sPT.%20SWAJASA%20LINTAS%20MEDIA!5e0!3m2!1sid!2sid!4v1660827879998!5m2!1sid!2sid',
        ]);
    }
}
