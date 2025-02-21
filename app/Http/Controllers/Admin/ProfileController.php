<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\ProfileUpdateRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function index(){
        return view('admin.profile.index');
    }

    public function updateProfile(ProfileUpdateRequest $request)
    {
        $user = Auth::user();
        $person =$user->person;

        if ($request->hasFile('image')) {

            if ($user->image && Storage::exists(str_replace('/storage/', 'public/', $user->image))) {
                Storage::delete(str_replace('/storage/', 'public/', $user->image));
            }

            $image = $request->image;
            $imageName = Str::random(10).'_'.$image->getClientOriginalName();
            $path = $image->storeAs('public/uploads', $imageName);
            
            $user->image = Storage::url($path);
            $user->save();
        }
        
        $person->mail_person = $request->mail_person;
        $person->mail_work = $request->mail_work;
        $person->cellular = $request->cellular;
        $person->phone = $request->phone;
        $person->address = $request->address;

        $person->save();

        /* $person->update($request->only(['mail_person', 'mail_work', 'cellular', 'phone', 'address'])); */
        return redirect()->back();
    }
}
