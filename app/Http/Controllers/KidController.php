<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Block;
use App\Models\Kid;
use App\Models\Marital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
class KidController extends Controller
{
        /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $marital=Marital::where('id','=',$id)->first();
        return view('personnel.family.kid.create',['marital'=>$marital]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, int $id)
    {
        $marital=Marital::where('id','=',$id)->first();
        $kid=New Kid();
        $kid->fill($request->all());
        // $kid->fill($request->only('name','birth_date','is_male','block_id','note','user_id'));
        $kid->marital_id=$id;
        $kid->bill_id=$marital->bill_id;
        $kid->user_id=auth::id();
        $kid->save();
        return redirect()->route('kid.create',[$marital->bill_id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $kid=kid::where('id','=',$id)->first();
        return view('personnel.family.kid.edit',['kid' =>$kid]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $kid= Kid::find($id);
        $kid->update($request->all());
        $bills=Bill::where('id','=',$kid->bill_id)->first();
        return redirect()->route('bill.index',[$bills->id]);
    }

    public function editBlock( $id)
    {
        $blocks=Block::all();
        $kid=kid::withTrashed($id)->where('id','=',$id)->first();
        return view('personnel.family.kid.block',compact(['kid','blocks']));
    }
    public function destroy( Request $request ,int $id)
    {
        $kid=Kid::withTrashed($id)->where('id','=',$id)->first();
        $bills=Bill::where('id','=',$kid->bill_id)->first();
        // $kid= Kid::find($id);
        $kid->update($request->only('block_id','note'));
        $kid->delete();
        Alert::success(session('success', 'تم حجب مخصصات الطفل'));
        return redirect()->route('bill.index',[$bills->id]);
    }
    public function restore($id)
    {
        // dd($id);
        $kid=Kid::withTrashed($id)->where('id',$id)->first();

        $bills=Bill::where('id','=',$kid->bill_id)->first();
        // $kid= Kid::find($id);
        $kid->restore();
        $kid->block_id=null;
        $kid->update();
        return redirect()->route('bill.index',[$bills->id]);
    }

}
