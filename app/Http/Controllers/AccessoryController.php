<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Seo;
use App\Models\Site;
use App\Models\Category;
use App\Models\Accessory;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class AccessoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accessories = Accessory::orderBy('name_en')->get();
        $accessory_category = Category::where('name_en', 'Accessories')->first();
        $subcategories = Subcategory::where('category_id', $accessory_category->id)->orderBy('name_en')->get();
        return view('backend.accessories.index', compact('accessories', 'subcategories'));
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
            'subcategory_id' => 'required',
            'code' => 'required',
            'image' => 'required|mimes:png,jpg,gif,jpeg|max:2048'
        ]);

        if($image = $request->file('image'))
        {
            $destinationPath = 'uploads/accessories/images/';
            $generated_image = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $generated_image);
        }

        Accessory::create([
            'name_en' => $request->name_en,
            'name_ml' => $request->name_ml,
            'subcategory_id' => $request->subcategory_id,
            'image' => $generated_image,
            'code' => $request->code,
            'price' => $request->price,
            'created_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Accessory Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function show(Accessory $accessory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function edit(Accessory $accessory)
    {   
        $accessory_category = Category::where('name_en', 'Accessories')->first();
        $subcategories = Subcategory::where('category_id', $accessory_category->id)->orderBy('name_en')->get();
        return view('backend.accessories.edit', compact('accessory', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accessory $accessory)
    {
        $request->validate([
            'name_en' => 'required',
            'name_ml' => 'required',
            'subcategory_id' => 'required',
            'code' => 'required',
            'image' => 'mimes:png,jpg,gif,jpeg|max:2048'
        ]);

        if($image = $request->file('image'))
        {
            $destinationPath = 'uploads/accessories/images/';
            $generated_image = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $generated_image);
            unlink($destinationPath . $accessory->image);
        }
        else
        {
            $generated_image = $accessory->image;
        }

        $accessory->update([
            'name_en' => $request->name_en,
            'name_ml' => $request->name_ml,
            'image' => $generated_image,
            'subcategory_id' => $request->subcategory_id,
            'code' => $request->code,
            'price' => $request->price,
            'updated_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Accessory Edited Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.accessories')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accessory $accessory)
    {
        $destinationPath = 'uploads/accessories/images/';

        unlink($destinationPath . $accessory->image);

        $accessory->delete();

        $notification = array (
            'message' => 'Accessory Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function deactivate (Accessory $accessory)
    {
        $accessory->status = 0;
        $accessory->save();

        $notification = array (
            'message' => 'Accessory Hidden Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function activate (Accessory $accessory)
    {
        $accessory->status = 1;
        $accessory->save();

        $notification = array (
            'message' => 'Accessory Made Visible Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
