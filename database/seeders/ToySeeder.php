<?php

namespace Database\Seeders;

use App\Models\Toy;
use Illuminate\Database\Seeder;

class ToySeeder extends Seeder
{
    public function run(): void
    {
        $toys = [
            ['Boneka Beruang Teddy', '3-5 tahun', 'Boneka', 85000, 'teddy-bear.jpg',
             'Boneka beruang berbulu lembut setinggi 40 cm. Aman dipeluk saat tidur.'],
            ['Mobil Remote Control', '6-8 tahun', 'Kendaraan', 175000, 'mobil-remote.jpg',
             'Mobil RC dengan baterai isi ulang, tahan benturan.'],
            ['Puzzle Hewan Hutan', '3-5 tahun', 'Puzzle', 45000, 'puzzle-hewan.jpg',
             'Puzzle 48 keping bergambar hewan hutan.'],
            ['Robot Transformer Mini', '6-8 tahun', 'Action Figure', 129000, 'robot.jpg',
             'Robot yang bisa berubah menjadi mobil dalam 5 langkah.'],
            ['Balok Susun Warna', '0-2 tahun', 'Konstruksi', 65000, 'balok-susun.jpg',
             'Set 50 balok kayu berwarna, cat non-toksik dan aman untuk balita.'],
            ['Kereta Api Kayu', '3-5 tahun', 'Kendaraan', 95000, 'kereta-kayu.jpg',
             'Kereta kayu lengkap dengan rel yang bisa dirangkai.'],
            ['Bola Sepak Mini', '6-8 tahun', 'Outdoor', 55000, 'bola-sepak.jpg',
             'Bola sepak ukuran 3 dari karet tebal yang awet.'],
            ['Drum Mini Musik', '3-5 tahun', 'Edukasi', 110000, 'drum-mini.jpg',
             'Drum mini dengan 2 stik untuk mengenalkan ritme.'],
        ];

        foreach ($toys as [$name, $age, $cat, $price, $img, $desc]) {
            Toy::create([
                'name' => $name,
                'age_group' => $age,
                'category' => $cat,
                'price' => $price,
                'image' => $img,
                'description' => $desc,
            ]);
        }
    }
}