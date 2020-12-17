<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Ticket;
use App\Models\User;

class TicketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ticket::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'status' => $this->faker->randomElement(["OPEN", "CLOSE"]),
            'project_id' => $this->faker->word,
            'project_name' => $this->faker->word,
            'departemen_request' => $this->faker->word,
            'user_destination' => User::all()->random(),
            'pic_request' => $this->faker->name,
            'email_submited' => $this->faker->word,
            'digital_asset' => $this->faker->word,
            'background' => $this->faker->text,
            'objective' => $this->faker->text,
            'target_audience' => $this->faker->word,
            'creative_consideration' => $this->faker->text,
            'support_other_channel' => $this->faker->word,
            'kpi' => $this->faker->word,
            'requirement_rules' => $this->faker->word,
            'reference' => $this->faker->word,
            'project_brief' => $this->faker->word,
            'campaign_period_start' => $this->faker->date(),
            'campaign_period_end' => $this->faker->date(),
            'estimated_budget' => $this->faker->randomFloat(0, 0, 999999999999.),
            'document_upload' => $this->faker->word,
        ];
    }
}
