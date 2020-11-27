<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Brand;
use App\Models\Ticket;
use Illuminate\Support\Str;
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

        $pb = $request->file('project_brief');

        $newFileName = Str::random(10) . "." . $pb->getClientOriginalExtension();
        $destination = 'uploads';

        $ticket = Ticket::create([
            'project_name' => $request->project_name,
            'departemen_request' => $request->departemen_request,
            'pic_request' => $request->pic_request,
            'email_submited' => $request->email_submited,
            'user_destination' => $request->user_destination,
            'background' => $request->background,
            'objective' => $request->objective,
            'digital_asset' => json_encode($request->digital_asset),
            'target_audience' => $request->target_audience,
            'creative_consideration' => $request->creative_consideration,
            'support_other_channel' => $request->support_other_channel,
            'kpi' => $request->kpi,
            'requirement_rules' => $request->requirement_rules,
            'reference' => $request->reference,
            'project_brief' => $newFileName,
            'document_upload' => 'empty.jpg',
            'campaign_period_start' => indonesianDate($request->start),
            'campaign_period_end' => indonesianDate($request->end)
        ]);

        $pb->move($destination, $newFileName);

        // $ticket->id->notify(new NotifyTicketCreated($ticket));

        // JobTicketCreated::dispatch($ticket);

        $request->session()->flash('ticket.project_name', $ticket->project_name);

        return redirect()->route('ticket_index');
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
