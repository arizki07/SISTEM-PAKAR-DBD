<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gejala = [
            ['kode_gejala' => 'G001', 'nama_gejala' => 'Demam', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kode_gejala' => 'G002', 'nama_gejala' => 'Menggigil', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kode_gejala' => 'G003', 'nama_gejala' => 'Berkeringan', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kode_gejala' => 'G004', 'nama_gejala' => 'Sakit Kepala', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kode_gejala' => 'G005', 'nama_gejala' => 'Hilang kesadaran / Pingsan', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kode_gejala' => 'G006', 'nama_gejala' => 'Animea', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kode_gejala' => 'G007', 'nama_gejala' => 'Denyut Nadi Melambat', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kode_gejala' => 'G008', 'nama_gejala' => 'Muncul bitnik-bintik merah', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kode_gejala' => 'G009', 'nama_gejala' => 'Badan lesu / lemah', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kode_gejala' => 'G010', 'nama_gejala' => 'Muka merah', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kode_gejala' => 'G011', 'nama_gejala' => 'Muntah-muntah', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kode_gejala' => 'G012', 'nama_gejala' => 'Diare', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kode_gejala' => 'G013', 'nama_gejala' => 'Pegal-pegal', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kode_gejala' => 'G014', 'nama_gejala' => 'Kejang-kejang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kode_gejala' => 'G015', 'nama_gejala' => 'Dehidrasi', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kode_gejala' => 'G016', 'nama_gejala' => 'Sesak nafas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kode_gejala' => 'G017', 'nama_gejala' => 'Mual', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kode_gejala' => 'G018', 'nama_gejala' => 'Gagal ginjal', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kode_gejala' => 'G019', 'nama_gejala' => 'Nyeri otot', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['kode_gejala' => 'G020', 'nama_gejala' => 'Kurang nafsu makan', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        DB::table('gejala')->insert($gejala);
    }
}
