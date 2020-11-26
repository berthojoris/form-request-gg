<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Ticket;
use App\Models\Tickethistory;

class TickethistoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tickethistory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'ticket_id' => Ticket::factory(),
            'status' => $this->faker->randomElement(["ACCEPTED","ON_PROGRESS","PENDING","CANCELED","DONE"]),
            'note' => $this->faker->text,
            'document_upload' => $this->faker->word,
        ];
    }
}
