<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Ticket;
use Illuminate\Support\Str;
use Faker\Provider\en_US\Company;
use Faker\Provider\pl_PL\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'project_id' => $this->faker->swiftBicNumber,
            'project_name' => $this->faker->company,
            'departemen_request' => $this->faker->company,
            'user_destination' => User::notadmin()->get()->random(),
            'pic_request' => $this->faker->name,
            'email_submited' => $this->faker->safeEmail,
            'digital_asset' => $this->faker->company,
            'background' => $this->faker->text,
            'objective' => $this->faker->text,
            'target_audience' => $this->faker->jobTitle,
            'creative_consideration' => $this->faker->text,
            'support_other_channel' => $this->faker->creditCardType,
            'kpi' => $this->faker->ean8,
            'requirement_rules' => $this->faker->paragraph(3, true),
            'reference' => $this->faker->paragraph(3, true),
            'project_brief' => $this->faker->ean8.'.pdf',
            'campaign_period_start' => $this->faker->date(),
            'campaign_period_end' => $this->faker->date(),
            'estimated_budget' => $this->faker->randomFloat(0, 0, 999999999.),
            'document_upload' => $this->faker->ean8.'.pdf',
        ];
    }
}
