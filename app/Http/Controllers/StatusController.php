<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statuses=Status::all();
        return view('personnel.staffing.status.index',compact(['statuses']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personnel.staffing.status.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item=New Status();
        $item->fill($request->all());
        // $item->fill($request->only('name','birth_date','country_id','city_id','address','block_id','note','user_id'));
        $item->save();
        return redirect()->route('status.index');
    }
}
