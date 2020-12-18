<?php

namespace App\Http\Controllers;

use App\Http\Requests\TickethistoryStoreRequest;
use App\Http\Requests\TickethistoryUpdateRequest;
use App\Models\Tickethistory;
use Illuminate\Http\Request;

class TickethistoryController extends Controller
{

    public function index(Request $request)
    {
        $tickethistories = Tickethistory::all();

        return view('tickethistory.index', compact('tickethistories'));
    }

    public function show(Request $request, Tickethistory $tickethistory)
    {
        return view('tickethistory.show', compact('tickethistory'));
    }

    public function store(TickethistoryStoreRequest $request)
    {
        if(request()->hasFile('document_upload')) {
            $file = $request->file('document_upload');
            $randomName = rand() . '.' . $file->getClientOriginalExtension();
            $file->move(storage_path()."/app/historyfile", $randomName);
        }

        Tickethistory::create([
            'ticket_id' => request('ticket_id'),
            'status' => request('status'),
            'note' => request('note'),
            'document_upload' => (request()->hasFile('document_upload')) ? $randomName : null
        ]);

        return jsonOutput("History Created", null, 201);
    }

    public function edit(Request $request, Tickethistory $tickethistory)
    {
        return view('tickethistory.edit', compact('tickethistory'));
    }

    public function update(TickethistoryUpdateRequest $request, Tickethistory $tickethistory)
    {
        $tickethistory->update($request->validated());

        $ticket->id->notify(new NotifyTicketCreated($tickethistory));

        $request->session()->flash('tickethistory', $tickethistory);

        return redirect()->route('tickethistory.index');
    }
}
