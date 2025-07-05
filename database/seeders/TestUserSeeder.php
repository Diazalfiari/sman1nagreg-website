<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin Test',
                'email' => 'admin.test@sman1nagreg.sch.id',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'nis_nip' => 'ADM002',
                'phone' => '081234567891',
                'address' => 'Jl. Test Admin No. 1',
                'is_active' => true,
            ],
            [
                'name' => 'Dr. Budi Santoso, M.Pd',
                'email' => 'budi.santoso@sman1nagreg.sch.id',
                'password' => Hash::make('password'),
                'role' => 'guru',
                'nis_nip' => '196905151990031002',
                'phone' => '081234567892',
                'address' => 'Jl. Pendidikan No. 15',
                'is_active' => true,
            ],
            [
                'name' => 'Sari Wulandari, S.Pd',
                'email' => 'sari.wulandari@sman1nagreg.sch.id',
                'password' => Hash::make('password'),
                'role' => 'guru',
                'nis_nip' => '198203101999032001',
                'phone' => '081234567893',
                'address' => 'Jl. Guru No. 20',
                'is_active' => true,
            ],
            [
                'name' => 'Ahmad Rizki Pratama',
                'email' => 'ahmad.rizki@student.sman1nagreg.sch.id',
                'password' => Hash::make('password'),
                'role' => 'siswa',
                'nis_nip' => '2024001',
                'phone' => '081234567894',
                'address' => 'Jl. Siswa No. 1',
                'is_active' => true,
            ],
            [
                'name' => 'Siti Nurhaliza',
                'email' => 'siti.nurhaliza@student.sman1nagreg.sch.id',
                'password' => Hash::make('password'),
                'role' => 'siswa',
                'nis_nip' => '2024002',
                'phone' => '081234567895',
                'address' => 'Jl. Siswa No. 2',
                'is_active' => true,
            ],
            [
                'name' => 'Muhammad Farhan',
                'email' => 'muhammad.farhan@student.sman1nagreg.sch.id',
                'password' => Hash::make('password'),
                'role' => 'siswa',
                'nis_nip' => '2024003',
                'phone' => '081234567896',
                'address' => 'Jl. Siswa No. 3',
                'is_active' => false, // Contoh user nonaktif
            ],
            [
                'name' => 'Dra. Eka Sari, M.Pd',
                'email' => 'eka.sari@sman1nagreg.sch.id',
                'password' => Hash::make('password'),
                'role' => 'guru',
                'nis_nip' => '197812121999032002',
                'phone' => '081234567897',
                'address' => 'Jl. Guru No. 25',
                'is_active' => false, // Contoh guru nonaktif
            ],
        ];

        foreach ($users as $userData) {
            User::create($userData);
        }
    }
}