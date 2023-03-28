<?php

namespace Database\Factories;

use App\Models\SupportTicket;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SupportTicket>
 */
// class SupportTicketFactory extends Factory
// {
//     /**
//      * Define the model's default state.
//      *
//      * @return array<string, mixed>
//      */
//     public function definition(): array
//     {
//         return [
//            'question' => $facker->paragraph(),
//         ];
//     }
// }
$factory->define(SupportTicket::class, function (Faker $faker)
{
    return [
        'question' => $facker->paragraph(),
    ];
});
