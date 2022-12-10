<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        return view('backend.banners.index', compact('banners'));
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
            'image' => 'required|mimes:png,jpg,gif,jpeg|max:2048'
        ]);

        if($image = $request->file('image'))
        {
            $destinationPath = 'frontend/assets/images/banners/';
            $generated_image = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $generated_image);
        }

        Banner::create([
            'image' => $generated_image,
            'created_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Banner Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('backend.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'image' => 'mimes:png,jpg,gif,jpeg|max:2048'
        ]);

        if($image = $request->file('image'))
        {
            $destinationPath = 'frontend/assets/images/banners/';
            $generated_image = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $generated_image);
            unlink($destinationPath . $banner->image);
        }

        $banner->update([
            'image' => $generated_image,
            'updated_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Banner Changed Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.banners')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $destinationPath = 'frontend/assets/images/banners/';

        unlink($destinationPath . $banner->image);

        $banner->delete();

        $notification = array (
            'message' => 'Banner Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
