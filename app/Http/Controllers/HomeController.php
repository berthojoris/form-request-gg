<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\Tickethistory;
use App\Http\Requests\ProfileRequest;

class HomeController extends Controller
{

    public function index()
    {
        $ticket = Ticket::all()->count();
        $history = Tickethistory::all()->count();
        return view('home', compact('ticket', 'history'));
    }

    public function profile()
    {
        $profile = User::whereId(myID())->first();
        return view('admin.profile', compact('profile'));
    }

    public function updateProfile(ProfileRequest $request)
    {
        if(request('password')) {
            User::find(myID())->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);
        } else {
            User::find(myID())->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }

        $request->session()->flash('profile', "Update profile success");

        return redirect()->route('profile');
    }
}
