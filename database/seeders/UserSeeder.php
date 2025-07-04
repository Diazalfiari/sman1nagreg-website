<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Administrator',
                'email' => 'admin@sman1nagreg.sch.id',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'nis_nip' => 'ADM001',
                'is_active' => true,
            ],
            [
                'name' => 'Drs. Ahmad Supriadi, M.Pd',
                'email' => 'ahmad.supriadi@sman1nagreg.sch.id',
                'password' => Hash::make('guru123'),
                'role' => 'guru',
                'nis_nip' => '196801011990031001',
                'phone' => '081234567890',
                'is_active' => true,
            ],
            [
                'name' => 'Siti Fatimah, S.Pd',
                'email' => 'siti.fatimah@sman1nagreg.sch.id',
                'password' => Hash::make('guru123'),
                'role' => 'guru',
                'nis_nip' => '197502152000032001',
                'phone' => '081234567891',
                'is_active' => true,
            ],
            [
                'name' => 'Rizki Pratama',
                'email' => 'rizki.pratama@student.sman1nagreg.sch.id',
                'password' => Hash::make('siswa123'),
                'role' => 'siswa',
                'nis_nip' => '2024001',
                'phone' => '081234567892',
                'is_active' => true,
            ],
        ];

        foreach ($users as $userData) {
            // Gunakan updateOrCreate untuk menghindari duplikasi
            User::updateOrCreate(
                ['email' => $userData['email']], // Kondisi pencarian
                $userData // Data yang akan diupdate atau dibuat
            );
        }
    }
}