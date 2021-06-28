<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenis = [
            ['nama_jenis' => 'Printing',],
            ['nama_jenis' => 'Konveksi',],
            ['nama_jenis' => 'Sablon',],
        ];

        DB::table('jenis')->insert($jenis);
    }
}
