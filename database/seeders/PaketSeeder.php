<?php

namespace Database\Seeders;

use App\Models\Paket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Paket::create([
            'nama_paket'=> 'umrah1',
            'tanggal_keberangkatan' => '2025-01-23',
            'tanggal_kepulangan' =>'2025-01-27',
            'hotel_madinah' =>'Hotel Hilton',
            'hotel_mekkah' =>'Hotel Swissotel',
            'program' =>'Pusat',
            'harga' =>  '6000000',
            'pesawat' => 'airasia',
            'total_seat' => '40',
            'jenis_paket' => 'Pusat'
        ]);

        Paket::create([
            'nama_paket'=> 'umrah2',
            'tanggal_keberangkatan' => '2025-01-28',
            'tanggal_kepulangan' =>'2025-02-01',
            'hotel_madinah' =>'Hotel Hilton',
            'hotel_mekkah' =>'Hotel Swissotel',
            'program' =>'Mandiri',
            'harga' =>  '6500000',
            'pesawat' => 'airasia',
            'total_seat' => '40',
            'jenis_paket' => 'Cabang'
        ]);
    }
}
