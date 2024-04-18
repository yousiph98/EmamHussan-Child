<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $positions=Position::all();
        return view('personnel.staffing.position.index',compact(['positions']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personnel.staffing.position.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item=New Position();
        $item->fill($request->all());
        // $item->fill($request->only('name','birth_date','country_id','city_id','address','block_id','note','user_id'));
        $item->save();
        return redirect()->route('position.index');

    }
}
