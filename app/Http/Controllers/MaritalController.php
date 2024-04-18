<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Block;
use App\Models\City;
use App\Models\Country;
use App\Models\Marital;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MaritalController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $countries=Country::all();
        $cities=City::all();
        $bill=Bill::where('id','=',$id)->first();
        return view('personnel.family.marital.create',compact(['bill','countries','cities']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , int $id)
    {
        $marital=New Marital();
        $marital->fill($request->all());
        // $marital->fill($request->only('name','birth_date','country_id','city_id','address','block_id','note','user_id'));
        $marital->bill_id=$id;
        $marital->user_id=auth::id();
        $marital->save();
        return redirect()->route('bill.index',[$marital->bill_id]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $marital=Marital::where('id','=',$id)->first();
        return view('personnel.family.marital.edit',['marital' =>$marital]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $marital= Marital::find($id);
        $marital->update($request->all());
        $bills=Bill::where('id','=',$marital->bill_id)->first();
        return redirect()->route('bill.index',[$bills->id]);
    }


    public function editBlock( $id)
    {
        $blocks=Block::all();
        $marital=Marital::where('id','=',$id)->first();
        return view('personnel.family.marital.block',compact(['marital','blocks']));
    }

    public function destroy(Request $request ,int $id)
    {
        $marital=Marital::where('id','=',$id)->first();
        $bills=Bill::where('id','=',$marital->bill_id)->first();
        $marital->update($request->only('block_id'));
        $marital->delete();
        Alert::success(session('success', 'تم حجب مخصصات الزوجة'));
        return redirect()->route('bill.index',[$bills->id]);
    }
    public function restore($id)
    {
        $marital=Marital::onlyTrashed($id)->first();
        $marital->restore();
        return redirect()->route('bill.index',compact(['bills']));
    }

}
