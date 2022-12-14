<?php

namespace Database\Factories;

use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Message::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        do{
            $from = rand(1, 10);
            $to = rand(1, 10);
        }while($from==$to);
        
        return [
            'from' => $from,
            'to' => $to,
            'message' => $this->faker->paragraph,
            'is_read' => rand(0, 1),
        ];
    }
}
