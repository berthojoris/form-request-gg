<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Support\Str;
use App\Mail\RequestHistory;
use Illuminate\Http\Request;
use App\Models\Tickethistory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
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
        DB::beginTransaction();
        try {
            if(request()->hasFile('document_upload')) {
                $file = $request->file('document_upload');
                $randomName = Str::random(20) . '.' . $file->getClientOriginalExtension();
                $file->move(storage_path()."/app/historyfile", $randomName);
            }

            $ticketHistory = Tickethistory::create([
                'ticket_id' => request('ticket_id'),
                'status' => request('status'),
                'note' => request('note'),
                'document_upload' => (request()->hasFile('document_upload')) ? $randomName : null
            ]);

            $ticket = Ticket::find(request('ticket_id'))->first();
            $receiveEmail = $ticket->email_submited;

            Mail::to($receiveEmail)->send(new RequestHistory($ticketHistory));
            DB::commit();
            return jsonOutput("History Created", null, 201);
        } catch (\Exception $e) {
            DB::rollback();
            return jsonOutput("Fail to save history", null, 500);
        }
    }

    public function edit(Request $request, Tickethistory $tickethistory)
    {
        return view('tickethistory.edit', compact('tickethistory'));
    }
}
