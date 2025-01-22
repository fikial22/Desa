<?php

namespace Database\Seeders;

use App\Models\model_desa;
use Illuminate\Database\Seeder;
use App\Models\Desa; // Tambahkan baris ini untuk mengimpor model Desa

class desaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'nama_desa' => 'Desa Srigading',
                'kode_desa' => 'SG001',
                'kecamatan' => 'Lawang',
                'kabupaten' => 'Malang',
                'provinsi' => 'Jawa Timur',
                'visi' => 'Mewujudkan masyarakat desa yang sejahtera dan mandiri',
                'misi' => 'Meningkatkan kualitas pendidikan, kesehatan, dan ekonomi desa',
                'sejarah' => 'Desa Srigading berdiri pada tahun 1950 sebagai desa agraris...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_desa' => 'Desa Kenongo',
                'kode_desa' => 'KN002',
                'kecamatan' => 'Jabung',
                'kabupaten' => 'Malang',
                'provinsi' => 'Jawa Timur',
                'visi' => 'Menjadi desa yang maju dengan budaya yang dilestarikan',
                'misi' => 'Meningkatkan kesejahteraan melalui pelestarian budaya lokal',
                'sejarah' => 'Desa Kenongo berdiri pada tahun 1970 dan terkenal dengan adat istiadatnya...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Anda bisa menambahkan lebih banyak data di sini
        ];

        foreach ($datas as $data) {
            model_desa::create($data);
        }
    }
}
