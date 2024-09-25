<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class VaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vaccine')->insert([
            ['vaccine' => 'Sinovac'],
            ['vaccine' => 'AstraZeneca'],
            ['vaccine' => 'Pfizer-BioNTech'],
            ['vaccine' => 'Moderna'],
            ['vaccine' => 'Johnson & Johnson'],
            ['vaccine' => 'Sinopharm'],
            ['vaccine' => 'Covaxin'],
            ['vaccine' => 'Sputnik V'],
            ['vaccine' => 'Abdala'],
            ['vaccine' => 'Covavax']
        ]);
    }
}
