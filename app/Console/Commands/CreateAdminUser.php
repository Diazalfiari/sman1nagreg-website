<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an admin user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = 'admin@sman1nagreg.sch.id';
        
        $existingUser = User::where('email', $email)->first();
        if ($existingUser) {
            $this->info('Admin user already exists: ' . $email);
            return;
        }

        User::create([
            'name' => 'Super Admin',
            'email' => $email,
            'password' => Hash::make('password'),
            'role' => 'admin',
            'nis_nip' => 'ADM001',
            'phone' => '081234567890',
            'address' => 'SMAN 1 Nagreg',
            'is_active' => true,
        ]);

        $this->info('Admin user created successfully!');
        $this->info('Email: ' . $email);
        $this->info('Password: password');
    }
}
