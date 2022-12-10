<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
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
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $about = About::first();
        return view('backend.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $about = About::first();
        return view('backend.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'title_en' => 'required',
            'title_ml' => 'required',
            'description_en' => 'required',
            'description_ml' => 'required',
            'main_image' => 'mimes:png,jpg,gif,jpeg|max:4096',
            'reviews' => 'required',
            'awards' => 'required',
            'products' => 'required',
            'customers' => 'required',
            'image1' => 'mimes:png,jpg,gif,jpeg|max:4096',
            'image2' => 'mimes:png,jpg,gif,jpeg|max:4096',
            'image3' => 'mimes:png,jpg,gif,jpeg|max:4096',
            'image4' => 'mimes:png,jpg,gif,jpeg|max:4096'
        ]);

        $about = About::first();

        if($request->hasFile('main_image'))
        {
            $main_image = $request->file('main_image');
            $upload_path = 'frontend/assets/images/about/';
            $generated_main_image = hexdec(uniqid()) . '.' . $main_image->getClientOriginalExtension();
            if(file_exists($upload_path))
            {
                Image::make($main_image)->save($upload_path . $generated_main_image);
                if (file_exists($upload_path . $about->main_image))
                {
                    unlink($upload_path . $about->main_image);    
                }
            }
        }
        else
        {
            $generated_main_image = $about->main_image;
        }

        if($request->hasFile('image1'))
        {
            $image1 = $request->file('image1');
            $upload_path = 'frontend/assets/images/about/';
            $generated_image1 = hexdec(uniqid()) . '.' . $image1->getClientOriginalExtension();
            if(file_exists($upload_path))
            {
                Image::make($image1)->save($upload_path . $generated_image1);
                if (!is_null($about->image1))
                {
                    unlink($upload_path . $about->image1);    
                }
            }
        }
        else
        {
            $generated_image1 = $about->image1;
        }

        if($request->hasFile('image2'))
        {
            $image2 = $request->file('image2');
            $upload_path = 'frontend/assets/images/about/';
            $generated_image2 = hexdec(uniqid()) . '.' . $image2->getClientOriginalExtension();
            if(file_exists($upload_path))
            {
                Image::make($image2)->save($upload_path . $generated_image2);
                if (!is_null($about->image2))
                {
                    unlink($upload_path . $about->image2);    
                }
            }
        }
        else
        {
            $generated_image2 = $about->image2;
        }

        if($request->hasFile('image3'))
        {
            $image3 = $request->file('image3');
            $upload_path = 'frontend/assets/images/about/';
            $generated_image3 = hexdec(uniqid()) . '.' . $image3->getClientOriginalExtension();
            if(file_exists($upload_path))
            {
                Image::make($image3)->save($upload_path . $generated_image3);
                if (!is_null($about->image3))
                {
                    unlink($upload_path . $about->image3);    
                }
            }
        }
        else
        {
            $generated_image3 = $about->image3;
        }

        if($request->hasFile('image4'))
        {
            $image4 = $request->file('image4');
            $upload_path = 'frontend/assets/images/about/';
            $generated_image4 = hexdec(uniqid()) . '.' . $image4->getClientOriginalExtension();
            if(file_exists($upload_path))
            {
                Image::make($image4)->save($upload_path . $generated_image4);
                if (!is_null($about->image4))
                {
                    unlink($upload_path . $about->image4);    
                }
            }
        }
        else
        {
            $generated_image4 = $about->image4;
        }

        $about->update([
            'title_en' => $request->title_en,
            'title_ml' => $request->title_ml,
            'description_en' => $request->description_en,
            'description_ml' => $request->description_ml,
            'main_image' => $generated_main_image,
            'reviews' => $request->reviews,
            'awards' => $request->awards,
            'products' => $request->products,
            'customers' => $request->customers,
            'image1' => $generated_image1,
            'image2' => $generated_image2,
            'image3' => $generated_image3,
            'image4' => $generated_image4
        ]);

        $notification = array (
            'message' => 'About Page Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.about')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
