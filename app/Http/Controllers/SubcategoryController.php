<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = Subcategory::all();
        $categories = Category::orderBy('name_en')->get();
        return view('backend.subcategories.index', compact('subcategories', 'categories'));
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
            'name_en' => 'required',
            'name_ml' => 'required',
            'category_id' => 'required'
        ]);

        Subcategory::create([
            'name_en' => $request->name_en,
            'name_ml' => $request->name_ml,
            'slug' => Str::slug($request->name_en, '-'),
            'category_id' => $request->category_id,
            'created_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Subcategory Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        $categories = Category::all();
        return view('backend.subcategories.edit', compact('subcategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        $request->validate([
            'name_en' => 'required',
            'name_ml' => 'required',
            'category_id' => 'required'
        ]);

        $subcategory->update([
            'name_en' => $request->name_en,
            'name_ml' => $request->name_ml,
            'slug' => Str::slug($request->name_en, '-'),
            'category_id' => $request->category_id,
            'updated_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Subcategory Edited Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.subcategories')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();

        $notification = array (
            'message' => 'Subcategory Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function deactivate(Subcategory $subcategory)
    {
        $subcategory->status = 0;
        $subcategory->save();

        $notification = array (
            'message' => 'Subcategory Deactivated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function activate(Subcategory $subcategory)
    {
        $subcategory->status = 1;
        $subcategory->save();

        $notification = array (
            'message' => 'Subcategory Activated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function ajax($category_id)
    {
        $subcategories = Subcategory::where('category_id', $category_id)->orderBy('name_en', 'ASC')->get();
        return response()->json($subcategories);
    }

}
