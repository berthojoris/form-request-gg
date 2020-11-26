<?php

namespace Tests\Feature\Http\Controllers;

use App\Jobs\JobTicketCreated;
use App\Jobs\JobTicketUpdated;
use App\Models\Ticket;
use App\Models\User;
use App\Notification\NotifyTicketCreated;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Queue;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\TicketController
 */
class TicketControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $tickets = Ticket::factory()->count(3)->create();

        $response = $this->get(route('ticket.index'));

        $response->assertOk();
        $response->assertViewIs('ticket.index');
        $response->assertViewHas('tickets');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $ticket = Ticket::factory()->create();

        $response = $this->get(route('ticket.show', $ticket));

        $response->assertOk();
        $response->assertViewIs('ticket.show');
        $response->assertViewHas('ticket');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $ticket = Ticket::factory()->create();

        $response = $this->get(route('ticket.edit', $ticket));

        $response->assertOk();
        $response->assertViewIs('ticket.edit');
        $response->assertViewHas('tickets');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\TicketController::class,
            'store',
            \App\Http\Requests\TicketStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $uuid = $this->faker->uuid;
        $status = $this->faker->randomElement(/** enum_attributes **/);
        $project_id = $this->faker->word;
        $project_name = $this->faker->word;
        $departemen_request = $this->faker->word;
        $user_destination = User::factory()->create();
        $username_submited = $this->faker->word;
        $email_submited = $this->faker->word;
        $digital_asset = $this->faker->word;
        $background = $this->faker->text;
        $objective = $this->faker->text;
        $target_audience = $this->faker->word;
        $creatif_consideration = $this->faker->text;
        $support_other_channel = $this->faker->word;
        $kpi = $this->faker->word;
        $requirement_rules = $this->faker->word;
        $reference = $this->faker->word;
        $project_brief = $this->faker->word;
        $campaign_period_start = $this->faker->date();
        $campaign_period_end = $this->faker->date();
        $estimated_budget = $this->faker->randomFloat(/** double_attributes **/);

        Notification::fake();
        Queue::fake();

        $response = $this->post(route('ticket.store'), [
            'uuid' => $uuid,
            'status' => $status,
            'project_id' => $project_id,
            'project_name' => $project_name,
            'departemen_request' => $departemen_request,
            'user_destination' => $user_destination->id,
            'username_submited' => $username_submited,
            'email_submited' => $email_submited,
            'digital_asset' => $digital_asset,
            'background' => $background,
            'objective' => $objective,
            'target_audience' => $target_audience,
            'creatif_consideration' => $creatif_consideration,
            'support_other_channel' => $support_other_channel,
            'kpi' => $kpi,
            'requirement_rules' => $requirement_rules,
            'reference' => $reference,
            'project_brief' => $project_brief,
            'campaign_period_start' => $campaign_period_start,
            'campaign_period_end' => $campaign_period_end,
            'estimated_budget' => $estimated_budget,
        ]);

        $tickets = Ticket::query()
            ->where('uuid', $uuid)
            ->where('status', $status)
            ->where('project_id', $project_id)
            ->where('project_name', $project_name)
            ->where('departemen_request', $departemen_request)
            ->where('user_destination', $user_destination->id)
            ->where('username_submited', $username_submited)
            ->where('email_submited', $email_submited)
            ->where('digital_asset', $digital_asset)
            ->where('background', $background)
            ->where('objective', $objective)
            ->where('target_audience', $target_audience)
            ->where('creatif_consideration', $creatif_consideration)
            ->where('support_other_channel', $support_other_channel)
            ->where('kpi', $kpi)
            ->where('requirement_rules', $requirement_rules)
            ->where('reference', $reference)
            ->where('project_brief', $project_brief)
            ->where('campaign_period_start', $campaign_period_start)
            ->where('campaign_period_end', $campaign_period_end)
            ->where('estimated_budget', $estimated_budget)
            ->get();
        $this->assertCount(1, $tickets);
        $ticket = $tickets->first();

        $response->assertRedirect(route('ticket.index'));
        $response->assertSessionHas('ticket.project_name', $ticket->project_name);

        Notification::assertSentTo($ticket->id, NotifyTicketCreated::class, function ($notification) use ($ticket) {
            return $notification->ticket->is($ticket);
        });
        Queue::assertPushed(JobTicketCreated::class, function ($job) use ($ticket) {
            return $job->ticket->is($ticket);
        });
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\TicketController::class,
            'update',
            \App\Http\Requests\TicketUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $ticket = Ticket::factory()->create();
        $uuid = $this->faker->uuid;
        $status = $this->faker->randomElement(/** enum_attributes **/);
        $project_id = $this->faker->word;
        $project_name = $this->faker->word;
        $departemen_request = $this->faker->word;
        $user_destination = User::factory()->create();
        $username_submited = $this->faker->word;
        $email_submited = $this->faker->word;
        $digital_asset = $this->faker->word;
        $background = $this->faker->text;
        $objective = $this->faker->text;
        $target_audience = $this->faker->word;
        $creatif_consideration = $this->faker->text;
        $support_other_channel = $this->faker->word;
        $kpi = $this->faker->word;
        $requirement_rules = $this->faker->word;
        $reference = $this->faker->word;
        $project_brief = $this->faker->word;
        $campaign_period_start = $this->faker->date();
        $campaign_period_end = $this->faker->date();
        $estimated_budget = $this->faker->randomFloat(/** double_attributes **/);

        Notification::fake();
        Queue::fake();

        $response = $this->put(route('ticket.update', $ticket), [
            'uuid' => $uuid,
            'status' => $status,
            'project_id' => $project_id,
            'project_name' => $project_name,
            'departemen_request' => $departemen_request,
            'user_destination' => $user_destination->id,
            'username_submited' => $username_submited,
            'email_submited' => $email_submited,
            'digital_asset' => $digital_asset,
            'background' => $background,
            'objective' => $objective,
            'target_audience' => $target_audience,
            'creatif_consideration' => $creatif_consideration,
            'support_other_channel' => $support_other_channel,
            'kpi' => $kpi,
            'requirement_rules' => $requirement_rules,
            'reference' => $reference,
            'project_brief' => $project_brief,
            'campaign_period_start' => $campaign_period_start,
            'campaign_period_end' => $campaign_period_end,
            'estimated_budget' => $estimated_budget,
        ]);

        $ticket->refresh();

        $response->assertRedirect(route('ticket.index'));
        $response->assertSessionHas('ticket.project_name', $ticket->project_name);

        $this->assertEquals($uuid, $ticket->uuid);
        $this->assertEquals($status, $ticket->status);
        $this->assertEquals($project_id, $ticket->project_id);
        $this->assertEquals($project_name, $ticket->project_name);
        $this->assertEquals($departemen_request, $ticket->departemen_request);
        $this->assertEquals($user_destination->id, $ticket->user_destination);
        $this->assertEquals($username_submited, $ticket->username_submited);
        $this->assertEquals($email_submited, $ticket->email_submited);
        $this->assertEquals($digital_asset, $ticket->digital_asset);
        $this->assertEquals($background, $ticket->background);
        $this->assertEquals($objective, $ticket->objective);
        $this->assertEquals($target_audience, $ticket->target_audience);
        $this->assertEquals($creatif_consideration, $ticket->creatif_consideration);
        $this->assertEquals($support_other_channel, $ticket->support_other_channel);
        $this->assertEquals($kpi, $ticket->kpi);
        $this->assertEquals($requirement_rules, $ticket->requirement_rules);
        $this->assertEquals($reference, $ticket->reference);
        $this->assertEquals($project_brief, $ticket->project_brief);
        $this->assertEquals(Carbon::parse($campaign_period_start), $ticket->campaign_period_start);
        $this->assertEquals(Carbon::parse($campaign_period_end), $ticket->campaign_period_end);
        $this->assertEquals($estimated_budget, $ticket->estimated_budget);

        Notification::assertSentTo($ticket->id, NotifyTicketCreated::class, function ($notification) use ($ticket) {
            return $notification->ticket->is($ticket);
        });
        Queue::assertPushed(JobTicketUpdated::class, function ($job) use ($ticket) {
            return $job->ticket->is($ticket);
        });
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $ticket = Ticket::factory()->create();

        $response = $this->delete(route('ticket.destroy', $ticket));

        $response->assertRedirect(route('ticket.index'));

        $this->assertSoftDeleted($ticket);
    }
}
