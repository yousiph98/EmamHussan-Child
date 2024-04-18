<?php

namespace App\Http\Controllers;

use App\Models\Block;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blocks=Block::all();
        return view('personnel.staffing.block.index',['blocks'=>$blocks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personnel.staffing.block.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $block=New Block();
        $block->fill($request->all());
        // $block->fill($request->only('name','birth_date','country_id','city_id','address','block_id','note','user_id'));
        $block->save();
        return redirect()->route('block.index');
    }
}
