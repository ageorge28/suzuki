<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::all();
        return view('backend.branches.index', compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'town' => 'required',
            'phone' => 'required'
        ]);

        Branch::create([
            'name' => $request->name,
            'address' => $request->address,
            'town' => $request->town,
            'pincode' => $request->pincode,
            'phone' => $request->phone,            
            'created_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Branch Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
        return view('backend.branches.edit', compact('branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'town' => 'required',
            'phone' => 'required'
        ]);

        $branch->update([
            'name' => $request->name,
            'address' => $request->address,
            'town' => $request->town,
            'pincode' => $request->pincode,
            'phone' => $request->phone,            
            'updated_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Branch Edited Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.branches')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        $branch->delete();

        $notification = array (
            'message' => 'Branch Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
