<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Brand;
use App\Models\Ticket;
use Illuminate\Support\Str;
use App\Mail\RequestCreated;
use Illuminate\Http\Request;
use App\Models\Tickethistory;
use App\Jobs\JobTicketCreated;
use App\Jobs\JobTicketUpdated;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\TicketStoreRequest;
use App\Http\Requests\TicketUpdateRequest;

class TicketController extends Controller
{

    public function index(Request $request)
    {
        $tickets = Ticket::all();
        $accountDigital = User::notadmin()->pluck('name', 'id')->toArray();
        $projectID = generateProjectID();
        session()->forget('projectid');
        session()->put('projectid', $projectID);

        return view('ticket.index', compact('tickets', 'accountDigital'));
    }

    public function show(Request $request, Ticket $ticket)
    {
        return view('ticket.show', compact('ticket'));
    }

    public function edit(Request $request, Ticket $ticket)
    {
        return view('ticket.edit', compact('tickets'));
    }

    public function store(TicketStoreRequest $request)
    {

        DB::transaction(function () {

            if(request()->hasFile('project_brief')) {
                $file = $request->file('project_brief');
                $projectBriefDoc = Str::random(20) . '.' . $file->getClientOriginalExtension();
                $file->move(storage_path()."/app/requestdocument", $projectBriefDoc);
            }

            if(request()->hasFile('document_upload')) {
                $file = $request->file('document_upload');
                $documentUpload = Str::random(20) . '.' . $file->getClientOriginalExtension();
                $file->move(storage_path()."/app/requestdocument", $documentUpload);
            }

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
                'project_brief' => $projectBriefDoc,
                'document_upload' => $documentUpload,
                'campaign_period_start' => indonesianDate($request->start),
                'campaign_period_end' => indonesianDate($request->end)
            ]);

            $data = Ticket::with('userDestination')->where('user_destination', $request->user_destination)->firstOrFail();

            Mail::to($request->email_submited)->send(new RequestCreated($ticket));
            Mail::to($data->userDestination->email)->send(new RequestCreated($ticket));

        });

        $request->session()->flash('ticket.project_name', $ticket->project_name);

        return redirect()->route('ticket_index');
    }

    public function destroy(Request $request, Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('ticket.index');
    }

    public function formRequest()
    {
        return view('admin.ticket');
    }

    public function listTikectData()
    {
        $model = Ticket::forme()->with(['userDestination' => function ($query) {
            $query->select('id', 'name', 'email');
        }]);

        return datatables()->eloquent($model)->addColumn('userDestination', function (Ticket $ticket) {
            return $ticket->userDestination->name;
        })->toJson();
    }

    public function detailTicket()
    {
        $data = Ticket::with(['userDestination', 'history' => function ($query) {
            $query->orderBy('id', 'desc');
        }])->where('project_id', request('pid'))->firstOrFail();
        return $data;
    }

    public function contohFunctionLengkap(TicketUpdateRequest $request, Ticket $ticket)
    {
        $ticket->update($request->validated());
        $ticket->id->notify(new NotifyTicketCreated($ticket));
        JobTicketUpdated::dispatch($ticket);
        $request->session()->flash('ticket.project_name', $ticket->project_name);
        return redirect()->route('ticket.index');
    }
}
