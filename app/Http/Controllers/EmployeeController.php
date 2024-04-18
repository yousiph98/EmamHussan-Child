<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\Country;
use App\Models\Department;
use App\Models\Bill;
use App\Models\Employee;
use App\Models\Position;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    { 
        
        $filters = [];
        $data = Employee::orderBy('id', 'desc')
        ->leftjoin('statuses', 'statuses.id', '=', 'employees.status_id')
        ->leftjoin('departments', 'departments.id', '=', 'employees.department_id')
        ->leftjoin('positions', 'positions.id', '=', 'employees.position_id')
        ->leftjoin('countries', 'countries.id', '=', 'employees.country_id')
        ->leftjoin('cities', 'cities.id', '=', 'employees.city_id')
        ->select(['employees.name as EmpName','countries.name as CountryName','cities.name as CityName','employees.nid','employees.num_card','statuses.status as StatusName' ,'departments.name as DepartmentName','positions.position as PositionName','employees.id',DB::raw('(SELECT COUNT(*) FROM bills WHERE bills.employee_id = employees.id) AS Bills')]);
        if ($request->filled('data')) {
            $data = $data->orWhere('employees.nid', $request->data);
            $data = $data->orWhere('employees.name', 'like', '%'.$request->data.'%');
            $data = $data->orWhere('employees.family_name', $request->data);
            $data = $data->orWhere('departments.name', 'like', '%'.$request->data.'%');
        }
        $employees = $data->paginate(100);
        // dd($employeesBill->toArray());
        // dd($employeesBill[10109]['Bills']);
        return view('personnel.employee.index',compact(['employees']));
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $bills=Bill::where('employee_id','=',$id)->first();
        try {
            return redirect()->route('bill.index',[$bills->id]);
        }catch (\Exception $exception){
        $employee=Employee::where('id','=',$id)->first();
        $bill=New Bill();
        $bill->employee_id=$id;
        $bill->active=true;
        // $bill->active_date=$request->active_date;
        $bill->user_id=auth::id();
        $bill->save();
        return redirect()->route('bill.index',[$bill->id]);
        // return view('personnel.bill.active',compact(['employee']));
        }
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
        return view('personnel.employee.create',compact(['countries','cities','statuses','departments','positions']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employee=New Employee();
        $employee->fill($request->all());
        // $employee->fill($request->only('name','family_name','nationality','city_id','address','phone1','phone2','birth_date','status_id','position_id','commencement_date','breakup_date','is_male','note','user_id'));
        $employee->user_id=auth::id();
        $employee->save();
        return redirect()->route('employee.index');
    }

     /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $countries=Country::all();
        $cities=City::all();
        $statuses=Status::all();
        $departments=Department::all();
        $positions=Position::all();
        $employee=Employee::where('id','=',$id)->first();
        return view('personnel.employee.edit',compact(['employee','countries','cities','statuses','departments','positions']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $employee= Employee::find($id);
        // dd($employee->note.$request->note);
        $employee->fill($request->all());
        // $employee->note=[$employee->note + $request->note];
        $employee->birth_date= $request->birth_date ?? now();
        $employee->user_id=auth::id();
        $employee->update();
        $bills=Bill::where('employee_id',$id)->first();
        return redirect()->route('bill.index',[$bills->id]);
    }
}
