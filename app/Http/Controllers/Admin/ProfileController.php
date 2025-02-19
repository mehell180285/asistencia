<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        return view('admin.profile.index');
    }

    public function updateProfile(ProfileUpdateRequest $request)
    {
        $user = Auth::user();
        $person =$user->person;

        /* $person->first_name = $request->first_name;
        $person->save(); */

        $person->update($request->only(['mail_person', 'mail_work', 'cellular', 'phone', 'address']));

        return redirect()->back();
    }
}
