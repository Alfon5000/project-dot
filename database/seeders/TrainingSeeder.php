<?php

namespace Database\Seeders;

use App\Models\Training;
use Illuminate\Support\Arr;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create('id_ID');

        $trainings = [
            [
                'nama' => 'Belajar PHP Dasar',
                'bidang' => 'Programming',
                'metode' => Arr::random(Training::$metodes),
                'tanggal_mulai' => $faker->date(),
                'tanggal_selesai' => $faker->date(),
                'alamat' => $faker->streetAddress(),
                'kota' => $faker->city(),
                'provinsi' => $faker->state(),
                'kuota' => Arr::random([10, 20, 30, 40, 50]),
                'deskripsi' => 'Belajar Dasar Bahasa Pemrograman PHP',
                'gambar' => 'php.png'
            ],
            [
                'nama' => 'Belajar Java Dasar',
                'bidang' => 'Programming',
                'metode' => Arr::random(Training::$metodes),
                'tanggal_mulai' => $faker->date(),
                'tanggal_selesai' => $faker->date(),
                'alamat' => $faker->streetAddress(),
                'kota' => $faker->city(),
                'provinsi' => $faker->state(),
                'kuota' => Arr::random([10, 20, 30, 40, 50]),
                'deskripsi' => 'Belajar Dasar Bahasa Pemrograman PHP',
                'gambar' => 'java.png'
            ],
            [
                'nama' => 'Belajar JavaScript Dasar',
                'bidang' => 'Programming',
                'metode' => Arr::random(Training::$metodes),
                'tanggal_mulai' => $faker->date(),
                'tanggal_selesai' => $faker->date(),
                'alamat' => $faker->streetAddress(),
                'kota' => $faker->city(),
                'provinsi' => $faker->state(),
                'kuota' => Arr::random([10, 20, 30, 40, 50]),
                'deskripsi' => 'Belajar Dasar Bahasa Pemrograman JavaScript',
                'gambar' => 'js.png'
            ],
            [
                'nama' => 'Belajar MySQL Dasar',
                'bidang' => 'Programming',
                'metode' => Arr::random(Training::$metodes),
                'tanggal_mulai' => $faker->date(),
                'tanggal_selesai' => $faker->date(),
                'alamat' => $faker->streetAddress(),
                'kota' => $faker->city(),
                'provinsi' => $faker->state(),
                'kuota' => Arr::random([10, 20, 30, 40, 50]),
                'deskripsi' => 'Belajar Dasar Database Management System MySQL',
                'gambar' => 'mysql.png'
            ],
            [
                'nama' => 'Belajar Golang Dasar',
                'bidang' => 'Programming',
                'metode' => Arr::random(Training::$metodes),
                'tanggal_mulai' => $faker->date(),
                'tanggal_selesai' => $faker->date(),
                'alamat' => $faker->streetAddress(),
                'kota' => $faker->city(),
                'provinsi' => $faker->state(),
                'kuota' => Arr::random([10, 20, 30, 40, 50]),
                'deskripsi' => 'Belajar Dasar Bahasa Pemrograman Golang',
                'gambar' => 'golang.png'
            ],
            [
                'nama' => 'Belajar Python Dasar',
                'bidang' => 'Programming',
                'metode' => Arr::random(Training::$metodes),
                'tanggal_mulai' => $faker->date(),
                'tanggal_selesai' => $faker->date(),
                'alamat' => $faker->streetAddress(),
                'kota' => $faker->city(),
                'provinsi' => $faker->state(),
                'kuota' => Arr::random([10, 20, 30, 40, 50]),
                'deskripsi' => 'Belajar Dasar Bahasa Pemrograman Python',
                'gambar' => 'python.png'
            ]
        ];

        foreach ($trainings as $training) {
            Training::create($training);
        }
        // Training::factory(10)->create();
    }
}
