<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KaryawanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {

        $gender = ["Laki-laki" , 'Perempuan'];
        $pendidikan = ["SD" , 'SMP' , "SMA" , "S1" , "S2" , "S3"];
        

        return [
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'umur' => random_int(17,50),
            'gender' => $gender[random_int(0,1)],
            'pendidikan' => $pendidikan[random_int(0,5)]
        ];
    }
}
