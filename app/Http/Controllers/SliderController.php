<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('backend.sliders.index', compact('sliders'));
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
            $destinationPath = 'frontend/assets/images/sliders/';
            $generated_image = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $generated_image);
        }

        Slider::create([
            'image' => $generated_image,
            'created_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Slider Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('backend.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'image' => 'mimes:png,jpg,gif,jpeg|max:2048'
        ]);

        if($image = $request->file('image'))
        {
            $destinationPath = 'frontend/assets/images/sliders/';
            $generated_image = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $generated_image);
            unlink($destinationPath . $slider->image);
        }

        $slider->update([
            'image' => $generated_image,
            'updated_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Slider Changed Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.sliders')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $destinationPath = 'frontend/assets/images/sliders/';

        unlink($destinationPath . $slider->image);

        $slider->delete();

        $notification = array (
            'message' => 'Slider Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
