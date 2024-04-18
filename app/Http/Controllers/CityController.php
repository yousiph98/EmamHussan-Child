<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $cities=City::all()->where('country_id','=',$id);
        return view('personnel.nationality.city.index',compact(['cities','id']));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $country=Country::where('id','=',$id)->first();
        return view('personnel.nationality.city.create',compact(['country']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, int $id)
    {
        $city=New City();
        $city->fill($request->all());
        // $city->fill($request->only('name','birth_date','country_id','city_id','address','block_id','note','user_id'));
        $city->country_id=$id;
        $city->save();
        return redirect()->route('city.index',compact(['id']));
    }
}
