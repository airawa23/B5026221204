<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pegawai_nama' => $this->faker->name(),
			'pegawai_jabatan' => $this->faker->word(),
			'pegawai_umur' => $this->faker->numberBetween(25, 60),
			'pegawai_alamat' => $this->faker->sentence()
        ];
    }
}
