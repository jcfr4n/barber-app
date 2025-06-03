<?php

namespace Database\Factories;

use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $client = User::where('role_id', 1)->inRandomOrder()->first();
        $barber = User::where('role_id', 2)->inRandomOrder()->first();
        // random status
        $status = Status::inRandomOrder()->first();
        return [
            'user_id' => $client?->id,
            'barber_id' => $barber?->id,
            'status_id' => $status?->id,
            'scheduled_at' => $this->faker->dateTimeBetween('now', '+1 month'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
