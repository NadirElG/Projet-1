<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use File;

class UserProfileController extends Controller
{
    public function index()
    {
        return view('frontend.dashboard.profile');
    }
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => ['required','max:100'],
            'email' => ['required','email','max:100','unique:users,email,'.Auth::user()->id,],
            'image' => ['image','max:2048']
            ]);

            $user = Auth::user();
        
            if($request->hasFile('image')){
                if(File::exists(public_path($user->image))){
                    File::delete(public_path($user->image));
                }
    
                $image = $request->image;
                $imageName = rand().'_'.$image->getClientOriginalName();
                $image->move(public_path('uploads'), $imageName);
    
                $path = "/uploads/".$imageName;
                $user->image = $path;
            }
    
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
    
            toastr()->success('Profile Updated Successfully !');
            return redirect()->back();
    }

}
