<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\City;
use App\Models\Country;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Kid;
use App\Models\Marital;
use App\Models\Position;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BillController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $bills=Bill::where('id',$id)->first();
        $billsMarital=Marital::where('bill_id',$bills->id)->get();
        $billsKid=Kid::where('bill_id','=',$id)->get();
        $blockedKids=Kid::onlyTrashed()->where('bill_id','=',$id)->get();
        $blockedMarital=Marital::onlyTrashed()->where('bill_id','=',$id)->get();
        // dd($billsMarital->toArray());
        return view('personnel.bill.index',compact(['bills' ,'billsMarital','billsKid','blockedKids','blockedMarital']));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries=Country::all();
        $cities=City::all();
        $statuses=Status::all();
        $departments=Department::all();
        $positions=Position::all();
        return view('personnel.bill.create',compact(['countries','cities','statuses','departments','positions']));
    }

    public function store(Request $request)
    {
        $employee=New Employee();
        $employee->fill($request->all());
        // $employee->fill($request->only('name','family_name','nationality','city_id','address','phone1','phone2','birth_date','status_id','position_id','commencement_date','breakup_date','is_male','note','user_id'));
        $employee->user_id=auth::id();
        $employee->save();
        // $bill=New Bill();
        // $bill->employee_id=$employee->id;
        // // $bill->active=true;
        // $bill->user_id=auth::id();
        // $bill->save();
        return view('personnel.bill.active',compact(['employee']));

    }
    public function active(Request $request, int $id)
    {
        $bill=New Bill();
        $bill->employee_id=$id;
        $bill->active=true;
        $bill->active_date=$request->active_date;
        $bill->user_id=auth::id();
        $bill->save();
        return redirect()->route('bill.index',[$bill->id]);
    }

}
