<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NatOcorPerguntasRespostas>
 */
class NatOcorPerguntasRespostasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nat_ocor_perguntas_id',
            'resp',
            'redirect_resp',
            'codigo',
        ];
    }
}
