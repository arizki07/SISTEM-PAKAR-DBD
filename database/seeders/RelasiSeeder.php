<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $relasi = [
            // P001
            ['id_penyakit' => '1', 'id_gejala' => '1', 'cf' => 0.8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '1', 'id_gejala' => '2', 'cf' => 0.6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '1', 'id_gejala' => '3', 'cf' => 0.7, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '1', 'id_gejala' => '10', 'cf' => 0.3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '1', 'id_gejala' => '13', 'cf' => 0.4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '1', 'id_gejala' => '20', 'cf' => 0.5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // P002
            ['id_penyakit' => '2', 'id_gejala' => '1', 'cf' => 0.8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '2', 'id_gejala' => '2', 'cf' => 0.6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '2', 'id_gejala' => '5', 'cf' => 0.6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '2', 'id_gejala' => '6', 'cf' => 0.7, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '2', 'id_gejala' => '7', 'cf' => 0.4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '2', 'id_gejala' => '11', 'cf' => 0.8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '2', 'id_gejala' => '12', 'cf' => 0.6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '2', 'id_gejala' => '13', 'cf' => 0.4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '2', 'id_gejala' => '14', 'cf' => 0.8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '2', 'id_gejala' => '15', 'cf' => 0.4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '2', 'id_gejala' => '17', 'cf' => 0.8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '2', 'id_gejala' => '18', 'cf' => 0.3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '2', 'id_gejala' => '20', 'cf' => 0.5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // P003
            ['id_penyakit' => '3', 'id_gejala' => '1', 'cf' => 0.8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '3', 'id_gejala' => '2', 'cf' => 0.6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '3', 'id_gejala' => '4', 'cf' => 0.8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '3', 'id_gejala' => '5', 'cf' => 0.6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '3', 'id_gejala' => '9', 'cf' => 0.7, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '3', 'id_gejala' => '13', 'cf' => 0.4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '3', 'id_gejala' => '14', 'cf' => 0.8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '3', 'id_gejala' => '16', 'cf' => 0.4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '3', 'id_gejala' => '19', 'cf' => 0.3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '3', 'id_gejala' => '20', 'cf' => 0.5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // P004
            ['id_penyakit' => '4', 'id_gejala' => '1', 'cf' => 0.8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '4', 'id_gejala' => '3', 'cf' => 0.7, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '4', 'id_gejala' => '5', 'cf' => 0.6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '4', 'id_gejala' => '6', 'cf' => 0.7, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '4', 'id_gejala' => '8', 'cf' => 0.6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '4', 'id_gejala' => '13', 'cf' => 0.4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '4', 'id_gejala' => '16', 'cf' => 0.4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_penyakit' => '4', 'id_gejala' => '20', 'cf' => 0.5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        DB::table('relasi')->insert($relasi);
    }
}
