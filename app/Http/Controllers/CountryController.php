<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries=Country::all();

        return view('personnel.nationality.country.index',['countries'=>$countries]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personnel.nationality.country.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item=New Country();
        $item->fill($request->all());
        // $item->fill($request->only('name','birth_date','country_id','city_id','address','block_id','note','user_id'));
        $item->save();
        return redirect()->route('country.index');
    }
}
