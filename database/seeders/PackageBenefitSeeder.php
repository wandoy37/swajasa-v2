<?php

namespace Database\Seeders;

use App\Models\PackageBenefit;
use Illuminate\Database\Seeder;

class PackageBenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PackageBenefit::create([
            'package_id' => 1,
            'benefit_id' => 2,
        ]);
        PackageBenefit::create([
            'package_id' => 1,
            'benefit_id' => 6,
        ]);
        PackageBenefit::create([
            'package_id' => 1,
            'benefit_id' => 7,
        ]);
        PackageBenefit::create([
            'package_id' => 1,
            'benefit_id' => 8,
        ]);
        PackageBenefit::create([
            'package_id' => 1,
            'benefit_id' => 9,
        ]);
        PackageBenefit::create([
            'package_id' => 1,
            'benefit_id' => 10,
        ]);

        PackageBenefit::create([
            'package_id' => 2,
            'benefit_id' => 3,
        ]);
        PackageBenefit::create([
            'package_id' => 2,
            'benefit_id' => 6,
        ]);
        PackageBenefit::create([
            'package_id' => 2,
            'benefit_id' => 7,
        ]);
        PackageBenefit::create([
            'package_id' => 2,
            'benefit_id' => 8,
        ]);
        PackageBenefit::create([
            'package_id' => 2,
            'benefit_id' => 9,
        ]);
        PackageBenefit::create([
            'package_id' => 2,
            'benefit_id' => 10,
        ]);
        PackageBenefit::create([
            'package_id' => 2,
            'benefit_id' => 11,
        ]);
    }
}
