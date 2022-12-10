<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Review;
use App\Models\Contact;
use App\Models\Accessory;
use App\Models\Motorcycle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $motorcycles = Motorcycle::count();
        $accessories = Accessory::count();
        $reviews = Review::count();
        $communications = Contact::count();
        return view('backend.index', compact('motorcycles', 'accessories', 'reviews', 'communications'));
    }

    public function show()
    {
        $admin = User::first();
        return view('backend.profile.show', compact('admin')); 
    }

    public function edit()
    {
        $admin = User::first();
        return view('backend.profile.edit', compact('admin')); 
    }

    public function update(Request $request)
    {
        $admin = User::first();
        
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $admin->name = $request->name;
        $admin->email = $request->email;

        if(!is_null($request->password) && !empty($request->password))
        {
            $admin->password = Hash::make($request->password);
        }

        $admin->save();

        $notification = array (
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.profile')->with($notification);
    }

}
