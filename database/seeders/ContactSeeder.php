<?php

namespace Database\Seeders;

use App\Models\Contact;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'telephone' => '(+62) 812-5596-8910',
            'email' => 'customercare@swajasa.id',
            'alamat' => 'Jl. P. Diponegoro No.18 RT.25 Kel. Bukuan Kec. Palaran, Kota Samarinda Kalimantan Timur Indonesia Kp.75241',
            'whatsapp' => '6281255968910',
            'facebook' => 'https://www.facebook.com/',
            'instagram' => 'https://www.instagram.com/',
            'twitter' => 'https://twitter.com/',
            'linkedin' => 'https://linkedin.com/',
        ]);
    }
}
