<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Ticket;
use App\Models\Tickethistory;
use App\Notification\NotifyTicketCreated;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Notification;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\TickethistoryController
 */
class TickethistoryControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $tickethistories = Tickethistory::factory()->count(3)->create();

        $response = $this->get(route('tickethistory.index'));

        $response->assertOk();
        $response->assertViewIs('tickethistory.index');
        $response->assertViewHas('tickethistories');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $tickethistory = Tickethistory::factory()->create();

        $response = $this->get(route('tickethistory.show', $tickethistory));

        $response->assertOk();
        $response->assertViewIs('tickethistory.show');
        $response->assertViewHas('tickethistory');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\TickethistoryController::class,
            'store',
            \App\Http\Requests\TickethistoryStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $uuid = $this->faker->uuid;
        $ticket = Ticket::factory()->create();
        $status = $this->faker->randomElement(/** enum_attributes **/);
        $note = $this->faker->text;

        $response = $this->post(route('tickethistory.store'), [
            'uuid' => $uuid,
            'ticket_id' => $ticket->id,
            'status' => $status,
            'note' => $note,
        ]);

        $tickethistories = Tickethistory::query()
            ->where('uuid', $uuid)
            ->where('ticket_id', $ticket->id)
            ->where('status', $status)
            ->where('note', $note)
            ->get();
        $this->assertCount(1, $tickethistories);
        $tickethistory = $tickethistories->first();

        $response->assertRedirect(route('tickethistory.index'));
        $response->assertSessionHas('tickethistory', $tickethistory);
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $tickethistory = Tickethistory::factory()->create();

        $response = $this->get(route('tickethistory.edit', $tickethistory));

        $response->assertOk();
        $response->assertViewIs('tickethistory.edit');
        $response->assertViewHas('tickethistory');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\TickethistoryController::class,
            'update',
            \App\Http\Requests\TickethistoryUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $tickethistory = Tickethistory::factory()->create();
        $uuid = $this->faker->uuid;
        $ticket = Ticket::factory()->create();
        $status = $this->faker->randomElement(/** enum_attributes **/);
        $note = $this->faker->text;

        Notification::fake();

        $response = $this->put(route('tickethistory.update', $tickethistory), [
            'uuid' => $uuid,
            'ticket_id' => $ticket->id,
            'status' => $status,
            'note' => $note,
        ]);

        $tickethistory->refresh();

        $response->assertRedirect(route('tickethistory.index'));
        $response->assertSessionHas('tickethistory', $tickethistory);

        $this->assertEquals($uuid, $tickethistory->uuid);
        $this->assertEquals($ticket->id, $tickethistory->ticket_id);
        $this->assertEquals($status, $tickethistory->status);
        $this->assertEquals($note, $tickethistory->note);

        Notification::assertSentTo($ticket->id, NotifyTicketCreated::class, function ($notification) use ($tickethistory) {
            return $notification->tickethistory->is($tickethistory);
        });
    }
}
