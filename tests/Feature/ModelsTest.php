<?php

namespace Tests\Feature;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ModelsTest extends TestCase
{
    use RefreshDatabase, WithFaker;


    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function setup(): void
    {
        parent::setUp();
        $this->artisan('migrate:fresh', ['--seed' => true]);
    }

    public function  test_user_has_a_role()
    {
        $user = User::first();
        $this->assertNotNull($user->role, 'User does not have a role');
    }

    public function test_client_has_appointments()
    {
        $client = User::whereHas('role', fn($q) => $q->where('name', 'client'))->first();
        $this->assertNotNull($client);
        $this->assertIsIterable($client->asClientAppointment);
    }

    public function test_barber_has_appointments()
    {
        $barber = User::whereHas('role', fn($q) => $q->where('name', 'barber'))->first();
        $this->assertNotNull($barber);
        $this->assertIsIterable($barber->asBarberAppointment);
    }

    public function test_appointment_has_user_barber_and_status()
    {
        $appointment = Appointment::first();
        $this->assertNotNull($appointment->user);
        $this->assertNotNull($appointment->barber);
        $this->assertNotNull($appointment->status);
    }
}
