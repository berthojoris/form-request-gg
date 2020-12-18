<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Tickethistory;
use App\Http\Requests\TickethistoryStoreRequest;
use App\Http\Requests\TickethistoryUpdateRequest;

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
            $randomName = Str::random(20) . '.' . $file->getClientOriginalExtension();
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
}
