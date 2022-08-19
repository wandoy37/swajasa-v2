<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'title' => 'Swajasa Lintas Media',
            'description' => 'Kami merupakan badan usaha yang menyediakan layanan Internet Provider dan Jasa Multimedia',
            'content' => 'Terima kasih sudah mampir! Jika kamu memiliki pertanyaan, hubungi kami melalui kontak di laman ini.',
        ]);
    }
}
