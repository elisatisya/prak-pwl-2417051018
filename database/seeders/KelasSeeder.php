<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = new Kelas;
        $kelas->nama_kelas = 'A';
        $kelas->save();

        $kelas = new Kelas;
        $kelas->nama_kelas = 'B';
        $kelas->save();

        $kelas = new Kelas;
        $kelas->nama_kelas = 'C';
        $kelas->save();

        $kelas = new Kelas;
        $kelas->nama_kelas = 'D';
        $kelas->save();
    }
}