<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments=Department::all();
        return view('personnel.staffing.department.index',['departments'=>$departments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personnel.staffing.department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item=New Department();
        $item->fill($request->all());
        // $item->fill($request->only('name','birth_date','country_id','city_id','address','block_id','note','user_id'));
        $item->save();
        return redirect()->route('department.index');
    }
}
