<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true), // Genera un nome casuale con 3 parole
            'description' => $this->faker->paragraph, // Genera una descrizione casuale
            'repository_url' => $this->faker->url, // Genera un URL casuale
            'stars' => $this->faker->numberBetween(0, 1000), // Genera un numero casuale di stelle
            'forks' => $this->faker->numberBetween(0, 500), // Genera un numero casuale di fork
            'language' => $this->faker->randomElement(['PHP', 'JavaScript', 'Python', 'Java', 'Ruby', 'Vue', 'React', 'MongoDB', 'HTML', 'Css']), // Seleziona casualmente un linguaggio
            'last_commit_at' => $this->faker->dateTimeBetween('-1 year', 'now'), // Genera una data e ora di commit casuale nell'ultimo anno
            'random_html' => $this->faker->randomHtml(),
            'long_description' => $this->faker->paragraphs(3, true),
        ];
    }
}
