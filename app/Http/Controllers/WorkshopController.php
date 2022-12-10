<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $workshop = Workshop::first();
        return view('backend.workshop.show', compact('workshop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $workshop = Workshop::first();
        return view('backend.workshop.edit', compact('workshop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $workshop = Workshop::first();

        $request->validate([
            'title_en' => 'required',
            'title_ml' => 'required',
            'description_en' => 'required',
            'description_ml' => 'required',
            'main_image' => 'mimes:png,jpg,gif,jpeg|max:4096',
            'image1' => 'mimes:png,jpg,gif,jpeg|max:4096',
            'image2' => 'mimes:png,jpg,gif,jpeg|max:4096',
            'image3' => 'mimes:png,jpg,gif,jpeg|max:4096',
            'image4' => 'mimes:png,jpg,gif,jpeg|max:4096'
        ]);

        if($request->hasFile('main_image'))
        {
            $main_image = $request->file('main_image');
            $upload_path = 'frontend/assets/images/workshop/';
            $generated_main_image = hexdec(uniqid()) . '.' . $main_image->getClientOriginalExtension();
            if(file_exists($upload_path))
            {
                Image::make($main_image)->save($upload_path . $generated_main_image);
                if (file_exists($upload_path . $workshop->main_image))
                {
                    unlink($upload_path . $workshop->main_image);    
                }
            }
        }
        else
        {
            $generated_main_image = $workshop->main_image;
        }

        if($request->hasFile('image1'))
        {
            $image1 = $request->file('image1');
            $upload_path = 'frontend/assets/images/workshop/';
            $generated_image1 = hexdec(uniqid()) . '.' . $image1->getClientOriginalExtension();
            if(file_exists($upload_path))
            {
                Image::make($image1)->save($upload_path . $generated_image1);
                if ($workshop->image1)
                {
                    unlink($upload_path . $workshop->image1);    
                }
            }
        }
        else
        {
            $generated_image1 = $workshop->image1;
        }

        if($request->hasFile('image2'))
        {
            $image2 = $request->file('image2');
            $upload_path = 'frontend/assets/images/workshop/';
            $generated_image2 = hexdec(uniqid()) . '.' . $image2->getClientOriginalExtension();
            if(file_exists($upload_path))
            {
                Image::make($image2)->save($upload_path . $generated_image2);
                if ($workshop->image2)
                {
                    unlink($upload_path . $workshop->image2);    
                }
            }
        }
        else
        {
            $generated_image2 = $workshop->image2;
        }

        if($request->hasFile('image3'))
        {
            $image3 = $request->file('image3');
            $upload_path = 'frontend/assets/images/workshop/';
            $generated_image3 = hexdec(uniqid()) . '.' . $image3->getClientOriginalExtension();
            if(file_exists($upload_path))
            {
                Image::make($image3)->save($upload_path . $generated_image3);
                if ($workshop->image3)
                {
                    unlink($upload_path . $workshop->image3);    
                }
            }
        }
        else
        {
            $generated_image3 = $workshop->image3;
        }

        if($request->hasFile('image4'))
        {
            $image4 = $request->file('image4');
            $upload_path = 'frontend/assets/images/workshop/';
            $generated_image4 = hexdec(uniqid()) . '.' . $image4->getClientOriginalExtension();
            if(file_exists($upload_path))
            {
                Image::make($image4)->save($upload_path . $generated_image4);
                if ($workshop->image4)
                {
                    unlink($upload_path . $workshop->image4);    
                }
            }
        }
        else
        {
            $generated_image4 = $workshop->image4;
        }

        $workshop->update([
            'title_en' => $request->title_en,
            'title_ml' => $request->title_ml,
            'description_en' => $request->description_en,
            'description_ml' => $request->description_ml,
            'main_image' => $generated_main_image,
            'image1' => $generated_image1,
            'image2' => $generated_image2,
            'image3' => $generated_image3,
            'image4' => $generated_image4,
            'contacts' => $request->contacts
        ]);

        $notification = array (
            'message' => 'Workshop Page Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.workshop')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workshop $workshop)
    {
        //
    }
}
