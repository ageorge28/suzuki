<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('name_en')->get();
        return view('backend.categories.index', compact('categories'));
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
            'image' => 'required|mimes:png,jpg,gif,jpeg|max:2048'
        ]);

        if($image = $request->file('image'))
        {
            $destinationPath = 'frontend/assets/images/categories/';
            $generated_image = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $generated_image);
        }

        Category::create([
            'name_en' => $request->name_en,
            'name_ml' => $request->name_ml,
            'slug' => Str::slug($request->name_en, '-'),
            'image' => $generated_image,
            'created_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Category Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('backend.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name_en' => 'required',
            'name_ml' => 'required',
            'image' => 'mimes:png,jpg,gif,jpeg|max:2048'
        ]);

        if($image = $request->file('image'))
        {
            $destinationPath = 'frontend/assets/images/categories/';
            $generated_image = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $generated_image);
            unlink($destinationPath . $category->image);
        }
        else
        {
            $generated_image = $category->image;
        }

        $category->update([
            'name_en' => $request->name_en,
            'name_ml' => $request->name_ml,
            'slug' => Str::slug($request->name_en, '-'),
            'image' => $generated_image,
            'updated_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Category Edited Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.categories')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $destinationPath = 'frontend/assets/images/categories/';

        unlink($destinationPath . $category->image);

        $category->delete();

        $notification = array (
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
