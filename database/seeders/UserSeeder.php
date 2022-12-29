<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert(
            [
                'role_id' => 1,
                'jenis_kelamin_id' => 1,
                'agama_id' => 3,
                'pendidikan_id' => 3,
                'jabatan_id' => 4,
                'divisi_id' => 4,
                'nama' => 'Alfonso Lai',
                'nik' => '1357924680',
                'tempat_lahir' => 'Bekasi',
                'tanggal_lahir' => '1997-04-15',
                'alamat' => 'Taman Harapan Baru, Blok S18/6',
                'kota' => 'Bekasi',
                'provinsi' => 'Jawa Barat',
                'telepon' => '+6281236665363',
                'email' => 'alfonso@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        User::factory(30)->create();
    }
}
