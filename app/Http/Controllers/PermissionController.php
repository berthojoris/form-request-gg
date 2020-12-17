<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use DataTables;

class PermissionController extends Controller
{
    public function data()
    {
        $data = Permission::select('*');
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
        return view('admin.permission');
    }

    public function create(Request $request)
    {

    }
}
