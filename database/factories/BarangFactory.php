<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang' => $this->faker->word(),
            'harga' => $this->faker->numberBetween(5000, 500000),
            'stok' => $this->faker->numberBetween(2, 30),
            'id_suplier' => $this->faker->numberBetween(1, 10)
        ];
    }
}
