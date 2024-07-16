<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penyakit = [
            [
                'kode_penyakit' => 'P001',
                'nama_penyakit' => 'Malaria Tertiana',
                'deskripsi' => 'Malaria yang disebabkan oleh Plasmodium vivax.',
                'solusi_penyakit' => 'Pengobatan dengan artemisinin.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode_penyakit' => 'P002',
                'nama_penyakit' => 'Malaria Tropika',
                'deskripsi' => 'Malaria yang disebabkan oleh Plasmodium falciparum.',
                'solusi_penyakit' => 'Pengobatan dengan kombinasi artemisinin dan lumefantrin.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode_penyakit' => 'P003',
                'nama_penyakit' => 'Malaria Quartana',
                'deskripsi' => 'Malaria yang disebabkan oleh Plasmodium malariae.',
                'solusi_penyakit' => 'Pengobatan dengan klorokuin.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'kode_penyakit' => 'P004',
                'nama_penyakit' => 'Malaria Ovale',
                'deskripsi' => 'Malaria yang disebabkan oleh Plasmodium ovale.',
                'solusi_penyakit' => 'Pengobatan dengan artemisinin.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('penyakit')->insert($penyakit);
    }
}
