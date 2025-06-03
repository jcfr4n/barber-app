<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersAndAppoinmentsSeeder extends Seeder
{
    /**
     * This seeder is currently empty.
     */
    public function run(): void
    {
        $roles = Role::pluck('id', 'name');

        // Create 3 barbers
        User::factory(3)->create([
            'role_id' => $roles['barber'],
        ]);

        // Create 10 clients
        User::factory(10)->create([
            'role_id' => $roles['client'],
        ]);

        // Create 1 admin
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@barberapp.com',
            'role_id' => $roles['admin'],
            'password' => bcrypt('admin'), // Set a specific password for the admin
        ]);

        // Create 30 appointments
        Appointment::factory(30)->create();

    }
}
