<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Site;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $site = Site::first();
        return view('backend.site.show', compact('site'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $site = Site::first();
        return view('backend.site.edit', compact('site'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $request->validate([
            'name_en' => 'required',
            'name_ml' => 'required',
            'description_en' => 'required',
            'description_ml' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'sales_phone' => 'required',
            'service_phone' => 'required',
            'sales_email' => 'required',
            'service_email' => 'required',
        ]);

        $site = Site::first();

        if($request->hasFile('logo'))
        {
            $logo = $request->logo;
            $upload_path = 'frontend/assets/images/';
            $generated_logo = hexdec(uniqid()) . '.' . $logo->getClientOriginalExtension();
            if(file_exists($upload_path))
            {
                Image::make($logo)->resize(170, 50)->save($upload_path . $generated_logo);
                if (file_exists($upload_path . $site->logo))
                {
                    unlink($upload_path . $site->logo);    
                }
            }
        }
        else
        {
            $generated_logo = $site->logo;
        }

        if($request->hasFile('favicon'))
        {
            $favicon = $request->favicon;
            $upload_path = 'frontend/assets/images/' ;
            $generated_favicon = hexdec(uniqid()) . '.' . $favicon->getClientOriginalExtension();
            if(file_exists($upload_path))
            {
                Image::make($favicon)->resize(32, 32)->save($upload_path . $generated_favicon);
                if (file_exists($upload_path . $site->favicon))
                {
                    unlink($upload_path . $site->favicon);
                }
            }
        }
        else
        {
            $generated_favicon = $site->favicon;
        }

        $site->update([
            'name_en' => $request->name_en,
            'name_ml' => $request->name_ml,
            'logo' => $generated_logo,
            'description_en' => $request->description_en,
            'description_ml' => $request->description_ml,
            'phone' => $request->phone,
            'address' => $request->address,
            'sales_phone' => $request->sales_phone,
            'service_phone' => $request->service_phone,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'email' => $request->email,
            'sales_email' => $request->sales_email,
            'service_email' => $request->service_email,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'favicon' => $generated_favicon,
            'url' => $request->url,
            'map' => $request->map,
            'doorstep' => $request->doorstep == 'on' ? 1 : 0 ,
            'updated_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Site Settings Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.site')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(Site $site)
    {
        //
    }
}
