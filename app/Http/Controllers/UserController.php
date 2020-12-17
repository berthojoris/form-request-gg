<?php

namespace App\Http\Controllers;

use DataTables;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function userData()
    {
        $data = User::select('*');
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($data) {
                $btn = '<a href="'.route('userEdit', $data->id).'" id="'.$data->id.'" class="editBtn btn btn-primary btn-sm">Edit</a> ';
                $btn = $btn.'<a href="'.route('userDestroy', $data->id).'" id="'.$data->id.'" class="deleteBtn btn btn-danger btn-sm">Delete</a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function index()
    {
        return view('admin.userlist');
    }

    public function store(Request $request)
    {
        $validate = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required_if:form_type,create'
        ]);

        $validate['password'] = bcrypt($validate['password']);

        User::create($validate);

        return jsonOutput("User created", null, 201);
    }


    public function edit(User $user)
    {
        return jsonOutput("User found", $user, 200);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return jsonOutput("User deleted", null, 200);
    }

    public function update(Request $request)
    {
        $validate = $this->validate($request, [
            'update_name' => 'required',
            'update_email' => 'required',
            'update_password' => 'required'
        ]);

        $update = User::whereId($request->update_id)->firstOrFail();
        $update->update([
            'name' => $request->update_name,
            'email' => $request->update_email,
            'password' => bcrypt($request->update_password)
        ]);

        return jsonOutput("User updated", null, 200);
    }

    public function create()
    {
        //
    }

    public function show($id)
    {
        //
    }
}
