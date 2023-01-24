<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use App\Models\Ville;

class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $villes = Ville::select('id')->random()->get();
        $region_id = Ville::all()->random()->id;
        return [
            'nom' => $this->faker->name,
            'adresse' => $this->faker->streetAddress,
            'phone' => $this->faker->tollFreePhoneNumber,
            'email' => $this->faker->unique()->email,
            'dateDeNaissance' => $this->faker->dateTimeThisCentury->format('Y-m-d'),
            // 'villeId' => $this->faker->randomElement(DB::table('villes')->select('id')->get())
            // 'villeId' => $this->faker->randomElement(DB::table('villes')->random()->id)
            // 'villeId' => $this->faker->Ville::all()->random()->id
            'villeId' => $this->faker->$region_id
        ];
    }
}
