<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function getNIF():string{
        $letras ="TRWAGMYFPDXBNJZSQVHLCKE";
        $dni = $this->faker->numberBetween("10000000", "99999999");
        $dni = $dni."-".$letras[$dni%23];
        return $dni;
    }

    public function definition(): array
    {
        return [
            "nombre" => $this->faker->name(),
            "email" => $this->faker->unique()->safeEmail(),
            "f_nac" => $this->faker->date(),
            "dni" =>$this->getNIF()
        ];
    }
}
