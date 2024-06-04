<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DaftarAbsen;

class DaftarAbsenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = ['Hadir', 'Sakit', 'Izin', 'Alpa'];

        foreach ($statuses as $status) {
            DaftarAbsen::create(['name' => $status]);
        }
    }
}
