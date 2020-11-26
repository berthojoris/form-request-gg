<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Brand;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Jobs\JobTicketCreated;
use App\Jobs\JobTicketUpdated;
use App\Http\Requests\TicketStoreRequest;
use App\Http\Requests\TicketUpdateRequest;

class TicketController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tickets = Ticket::all();
        $accountDigital = User::all()->pluck('name', 'id')->toArray();
        $brandName = Brand::all()->pluck('name', 'id')->toArray();
        $projectID = generateProjectID();
        session()->forget('projectid');
        session()->put('projectid', $projectID);

        return view('ticket.index', compact('tickets', 'accountDigital', 'brandName'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Ticket $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Ticket $ticket)
    {
        return view('ticket.show', compact('ticket'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Ticket $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Ticket $ticket)
    {
        return view('ticket.edit', compact('tickets'));
    }

    /**
     * @param \App\Http\Requests\TicketStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TicketStoreRequest $request)
    {
        $ticket = Ticket::create($request->validated());

        $ticket->id->notify(new NotifyTicketCreated($ticket));

        JobTicketCreated::dispatch($ticket);

        $request->session()->flash('ticket.project_name', $ticket->project_name);

        return redirect()->route('ticket.index');
    }

    /**
     * @param \App\Http\Requests\TicketUpdateRequest $request
     * @param \App\Models\Ticket $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(TicketUpdateRequest $request, Ticket $ticket)
    {
        $ticket->update($request->validated());

        $ticket->id->notify(new NotifyTicketCreated($ticket));

        JobTicketUpdated::dispatch($ticket);

        $request->session()->flash('ticket.project_name', $ticket->project_name);

        return redirect()->route('ticket.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Ticket $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Ticket $ticket)
    {
        $ticket->delete();

        return redirect()->route('ticket.index');
    }
}
