<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //ditahap ini untuk mengisi data pada tabel
        DB::table('detail_profile')->insert([
            'address' => 'Jember',
            'nomor_tlp' => '08234234',
            'ttl' => '2000-11-26',
            'foto' => 'picture.png',
        ]);
    }
}
