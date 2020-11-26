<?php

namespace App\Http\Controllers;

use App\Http\Requests\TickethistoryStoreRequest;
use App\Http\Requests\TickethistoryUpdateRequest;
use App\Models\Tickethistory;
use Illuminate\Http\Request;

class TickethistoryController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tickethistories = Tickethistory::all();

        return view('tickethistory.index', compact('tickethistories'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tickethistory $tickethistory
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Tickethistory $tickethistory)
    {
        return view('tickethistory.show', compact('tickethistory'));
    }

    /**
     * @param \App\Http\Requests\TickethistoryStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TickethistoryStoreRequest $request)
    {
        $tickethistory = Tickethistory::create($request->validated());

        $request->session()->flash('tickethistory', $tickethistory);

        return redirect()->route('tickethistory.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tickethistory $tickethistory
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Tickethistory $tickethistory)
    {
        return view('tickethistory.edit', compact('tickethistory'));
    }

    /**
     * @param \App\Http\Requests\TickethistoryUpdateRequest $request
     * @param \App\Models\Tickethistory $tickethistory
     * @return \Illuminate\Http\Response
     */
    public function update(TickethistoryUpdateRequest $request, Tickethistory $tickethistory)
    {
        $tickethistory->update($request->validated());

        $ticket->id->notify(new NotifyTicketCreated($tickethistory));

        $request->session()->flash('tickethistory', $tickethistory);

        return redirect()->route('tickethistory.index');
    }
}
