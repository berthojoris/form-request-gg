<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use DataTables;

class RoleController extends Controller
{

    public function data()
    {
        $data = Role::select('*');
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($data) {
                $btn = '<a href="#" id="'.$data->id.'" class="editBtn btn btn-primary btn-sm">Edit</a> ';
                $btn = $btn.'<a href="#" id="'.$data->id.'" class="deleteBtn btn btn-danger btn-sm">Delete</a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function index()
    {
        return view('admin.role');
    }

    public function create(Request $request)
    {
        $validate = $this->validate($request, [
            'name' => 'required',
            'guard_name' => 'required'
        ]);

        $role = Role::create([
            'name' => 'writer',
            'guard_name' => 'web'
        ]);

        return jsonOutput("Role created", null, 201);
    }
}
