<?php

namespace App\Http\Controllers;

use App\Exports\BillExport;
use App\Http\Requests\UserStoreRequest;
use App\Models\Employee;
use App\Models\Kid;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
        /**
     * Display the registration view.
     */
    public function create()
    {
        $employees= Employee::all();
        return view('user.register',compact('employees'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(UserStoreRequest $request)
    // : RedirectResponse
    {

        $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'employee_id' => $request->employee_id,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('user.index');
    }

    public function index(Request $request)
    { 
        $filters = [];
        $data = User::orderBy('id', 'desc');
        if ($request->filled('data')) {
            $data = $data->orWhere('id', $request->data);
            $data = $data->orWhere('email', 'like', '%'.$request->data.'%');
            // $data = $data->orWhere('email', $request->data);
        }
        $users = $data->get();
        return view('user.index',compact(['users']));
    }

    public function export()
    {
        // $kids =Kid::onlyTrashed()->get();
        // foreach ($kids as $index=>$kid) {
        //     $user_age = Carbon::parse($kid->deleted_at)->diffInDays(Carbon::now());
        //         dump($user_age);
        // } 
        // dd($kids->toArray());
        
        return Excel::download(new BillExport, 'Users.xlsx');
    }

    public function createPermission($id)
    {
        $roles=Role::all();
        $user=User::where('id','=',$id)->first();
        return view('user.permission',compact(['user','roles']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function permission(Request $request, int $id)
    {
        $user=User::find($id);
        $user->assignRole($request->role);
        $user->update();
        return redirect()->route('user.index');
    }

}
