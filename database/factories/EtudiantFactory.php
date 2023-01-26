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
        // $villesId => function () {
        //     return Factory(Ville::class)->create()->id;
        // }
        // Ville::select('id')->random()->get();
        // $region_id = Ville::all()->random()->id;

        // https://stackoverflow.com/questions/40829086/defining-laravel-foreign-keys-with-model-factories-one-to-one-one-to-many-rel
        $villesId = Ville::pluck('id')->toArray();

        return [
            'nom' => $this->faker->name,
            'adresse' => $this->faker->streetAddress,
            'phone' => $this->faker->tollFreePhoneNumber,
            'email' => $this->faker->unique()->email,
            'dateDeNaissance' => $this->faker->dateTimeThisCentury->format('Y-m-d'),
            // 'villeId' => Ville::factory(),            
            // 'villeId' => Ville::class::random()->select('id')->get()->factory()
            // 'villeId' => Ville::factory()->select('id')->get()
            // 'user_id' => User::factory(), //Generates a User from factory and extracts id
            // 'villeId' => $this->faker->randomElement(DB::table('villes')->select('id')->get())
            // 'villeId' => $this->faker->randomElement(DB::table('villes')->random()->id)
            // 'villeId' => $this->faker->Ville::all()->random()->id
            'villeId' => $this->faker->randomElement($villesId)
        ];
    }
}
