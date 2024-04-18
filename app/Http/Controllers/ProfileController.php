<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Kid;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use PhpParser\Node\Stmt\Switch_;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        $request->user()->save();
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    // public function index()
    // {
        // dd(Auth::user()->email);
    //     $kids =Kid::all();
        // select(['kids.birth_date'])->get()->toArray();
        // $parsedDates = [];
        // return $kids[$index]['birth_date'] ;  
        // $parsedDates[] = Carbon::parse($kid);
        // }
        
        // foreach($kids as $kid){
    //     foreach ($kids as $index=>$kid) {
    //         $parsedDates = Carbon::parse($kid->birth_date);
    //         $dn=$parsedDates->diffInYears(Carbon::parse(now()));
    // $ToDay = Carbon::parse(now());
    // $age = $kids->diffInYears($ToDay);
    //     }
    //     dd($kid->toArray());
        // $kids->delete();                                
    // }
    public function index()   {   
        $kids =Kid::get();
        foreach ($kids as $index=>$kid) {
            $user_age = Carbon::parse($kid->birth_date)->diff(Carbon::now())->format('%y');
            if ($user_age > 18) {
                $kid->delete();
                // dump($user_age);
            } 
        }
        return view('personnel.home.index');
    }
    
    public function protozoa()
    {
        return view('personnel.home.protozoa');
    }
    public function staffing()
    {
        return view('personnel.home.staffing');
    }
}
