<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PartidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'date'=> $this->faker->date(),
            'local_id'=>\App\Models\Team::all()->random()->id,
            
            'visitor_id'=>\App\Models\Team::all()->random()->id,
            'local_goals'=>rand(0,5),
            'visitor_goals'=>rand(0,5),
           
        ];
        
    }
}
