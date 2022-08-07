<?php

namespace Database\Seeders;

use App\Models\Benefit;
use Illuminate\Database\Seeder;

class BenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Benefit::create([
            'title' => 'Speed Up To 7 Mbps'
        ]);
        Benefit::create([
            'title' => 'Speed Up To 15 Mbps'
        ]);
        Benefit::create([
            'title' => 'Speed Up To 25 Mbps'
        ]);
        Benefit::create([
            'title' => 'Speed Up To 30 Mbps'
        ]);
        Benefit::create([
            'title' => 'Speed Up To 100 Mbps'
        ]);
        Benefit::create([
            'title' => 'Support 24 jam'
        ]);
        Benefit::create([
            'title' => 'Tanpa FUP'
        ]);
        Benefit::create([
            'title' => 'Tanpa Uang Deposit'
        ]);
        Benefit::create([
            'title' => 'Tanpa Kontrak Per-Tahun'
        ]);
        Benefit::create([
            'title' => 'Free alat selama berlangganan'
        ]);
        Benefit::create([
            'title' => 'Gratis biaya setting'
        ]);
        Benefit::create([
            'title' => 'Free Registrasi'
        ]);
    }
}
