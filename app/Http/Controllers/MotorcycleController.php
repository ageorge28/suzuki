<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Photo;
use App\Models\Category;
use App\Models\Motorcycle;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\MotorcycleDetail;
use Intervention\Image\Facades\Image;

class MotorcycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motorcycles = Motorcycle::all();
        return view('backend.motorcycles.index', compact('motorcycles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name_en')->get();
        return view('backend.motorcycles.create', compact('categories'));
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
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'thumbnail' => 'required|mimes:png,jpg,gif,pdf,xls,csv|max:4096',
            'overview_image' => 'mimes:png,jpg,gif,pdf,xls,csv|max:4096',
            'features_en' => 'required',
            'features_ml' => 'required',
            'accessories_en' => 'required',
            'accessories_ml' => 'required',
            'displacement' => 'required|numeric',
            'engine_type_en' => 'required',
            'engine_type_ml' => 'required',
            'fuel_system_en' => 'required',
            'fuel_system_ml' => 'required',
            'valve_system_en' => 'required',
            'valve_system_ml' => 'required',
            'bore_stroke' => 'required',
            'engine_output' => 'required',
            'torque' => 'required',
            'starter_system_en' => 'required',
            'starter_system_ml' => 'required',
            'transmission_type_en' => 'required',
            'transmission_type_ml' => 'required',
            'wheels_en' => 'required',
            'wheels_ml' => 'required',
            'length' => 'required|numeric',
            'width' => 'required|numeric',
            'height' => 'required|numeric',
            'wheel_base' => 'required|numeric',
            'ground_clearance' => 'required|numeric',
            'seat_height' => 'required|numeric',
            'kerb_mass' => 'required|numeric',
            'fuel_tank_capacity' => 'required|numeric',
            'front_brakes_en' => 'required',
            'front_brakes_ml' => 'required',
            'rear_brakes_en' => 'required',
            'rear_brakes_ml' => 'required',
            'front_tyre' => 'required',
            'rear_tyre' => 'required',
            'front_suspension_en' => 'required',
            'front_suspension_ml' => 'required',
            'rear_suspension_en' => 'required',
            'rear_suspension_ml' => 'required',
            'battery_en' => 'required',
            'battery_ml' => 'required',
            'headlight' => 'required',
            'brochure' => 'mimes:pdf|max:4096'
        ]);

        $thumbnail = $request->file('thumbnail');
        $generated_thumbnail = hexdec(uniqid()) . '.' . $thumbnail->getClientOriginalExtension();
        Image::make($thumbnail)->resize(650, 428)->save('uploads/motorcycles/thumbnails/' . $generated_thumbnail);

        $product_id = Motorcycle::insertGetId([
            'name_en' => $request->name_en,
            'name_ml' => $request->name_ml,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'code' => $request->code,
            'price' => $request->price,
            'slug' => Str::slug($request->name_en, '-'),
            'thumbnail' => $generated_thumbnail,
            'status' => 1,
            'created_at' => Carbon::now()            
        ]);

        if($overview = $request->file('overview_image'))
        {
            $destinationPath = 'uploads/motorcycles/overviews/';
            $generated_overview = hexdec(uniqid()) . '.' . $overview->getClientOriginalExtension();
            Image::make($overview)->save($destinationPath . $generated_overview);
    
        }
        else
        {
            $generated_overview = NULL;
        }

        if($file = $request->file('brochure'))
        {
            $destinationPath = 'uploads/motorcycles/brochures/';
            $brochure = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $brochure);
        }
        else
        {
            $brochure = NULL;
        }

        MotorcycleDetail::create([
            'product_id' => $product_id,
            'description_en' => $request->description_en,
            'description_ml' => $request->description_ml,
            'overview_image' => $generated_overview,           
            'features_en' => $request->features_en,
            'features_ml' => $request->features_ml,
            'accessories_en' => $request->accessories_en,
            'accessories_ml' => $request->accessories_ml,
            'displacement' => $request->displacement,
            'engine_type_en' => $request->engine_type_en,
            'engine_type_ml' => $request->engine_type_ml,
            'fuel_system_en' => $request->fuel_system_en,
            'fuel_system_ml' => $request->fuel_system_ml,
            'valve_system_en' => $request->valve_system_en,
            'valve_system_ml' => $request->valve_system_ml,
            'bore_stroke' => $request->bore_stroke,
            'engine_output' => $request->engine_output,
            'torque' => $request->torque,
            'starter_system_en' => $request->starter_system_en,
            'starter_system_ml' => $request->starter_system_ml,
            'transmission_type_en' => $request->transmission_type_en,
            'transmission_type_ml' => $request->transmission_type_ml,
            'wheels_en' => $request->wheels_en,
            'wheels_ml' => $request->wheels_ml,
            'length' => $request->length,
            'width' => $request->width,
            'height' => $request->height,
            'wheel_base' => $request->wheel_base,
            'ground_clearance' => $request->ground_clearance,
            'seat_height' => $request->seat_height,
            'kerb_mass' => $request->kerb_mass,
            'fuel_tank_capacity' => $request->fuel_tank_capacity,
            'front_brakes_en' => $request->front_brakes_en,
            'front_brakes_ml' => $request->front_brakes_ml,
            'rear_brakes_en' => $request->rear_brakes_en,
            'rear_brakes_ml' => $request->rear_brakes_ml,
            'front_tyre' => $request->front_tyre,
            'rear_tyre' => $request->rear_tyre,
            'front_suspension_en' => $request->front_suspension_en,
            'front_suspension_ml' => $request->front_suspension_ml,
            'rear_suspension_en' => $request->rear_suspension_en,
            'rear_suspension_ml' => $request->rear_suspension_ml,
            'battery_en' => $request->battery_en,
            'battery_ml' => $request->battery_ml,
            'headlight' => $request->headlight,
            'taillight' => $request->taillight,
            'brochure' => $brochure,
            'video' => $request->video,
            'created_at' => Carbon::now()
        ]);

        // Multiple Images Upload
        $photos = $request->file('photos');
        if(!is_null($photos))
        {
            foreach($photos as $photo)
            {
                $generated_photo = hexdec(uniqid()) . '.' . $photo->getClientOriginalExtension();
                Image::make($photo)->resize(650, 428)->save('uploads/motorcycles/photos/' . $generated_photo);
                Photo::insert([
                    'product_id' => $product_id,
                    'file' => $generated_photo,
                    'created_at' => Carbon::now()
                ]);
            }
        }

        $notification = array (
            'message' => 'Motorcycle Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.motorcycles')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Motorcycle  $motorcycle
     * @return \Illuminate\Http\Response
     */
    public function show(Motorcycle $motorcycle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Motorcycle  $motorcycle
     * @return \Illuminate\Http\Response
     */
    public function edit(Motorcycle $motorcycle)
    {
        $categories = Category::orderBy('name_en')->get();
        $subcategories = Subcategory::orderBy('name_en')->get();
        return view('backend.motorcycles.edit', compact('motorcycle', 'categories', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Motorcycle  $motorcycle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motorcycle $motorcycle)
    {
        
        $request->validate([
            'name_en' => 'required',
            'name_ml' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'thumbnail' => 'mimes:png,jpg,gif,pdf,xls,csv|max:4096',
            'overview_image' => 'mimes:png,jpg,gif,pdf,xls,csv|max:4096',
            'features_en' => 'required',
            'features_ml' => 'required',
            'accessories_en' => 'required',
            'accessories_ml' => 'required',
            'displacement' => 'required|numeric',
            'engine_type_en' => 'required',
            'engine_type_ml' => 'required',
            'fuel_system_en' => 'required',
            'fuel_system_ml' => 'required',
            'valve_system_en' => 'required',
            'valve_system_ml' => 'required',
            'bore_stroke' => 'required',
            'engine_output' => 'required',
            'torque' => 'required',
            'starter_system_en' => 'required',
            'starter_system_ml' => 'required',
            'transmission_type_en' => 'required',
            'transmission_type_ml' => 'required',
            'wheels_en' => 'required',
            'wheels_ml' => 'required',
            'length' => 'required|numeric',
            'width' => 'required|numeric',
            'height' => 'required|numeric',
            'wheel_base' => 'required|numeric',
            'ground_clearance' => 'required|numeric',
            'seat_height' => 'required|numeric',
            'kerb_mass' => 'required|numeric',
            'fuel_tank_capacity' => 'required|numeric',
            'front_brakes_en' => 'required',
            'front_brakes_ml' => 'required',
            'rear_brakes_en' => 'required',
            'rear_brakes_ml' => 'required',
            'front_tyre' => 'required',
            'rear_tyre' => 'required',
            'front_suspension_en' => 'required',
            'front_suspension_ml' => 'required',
            'rear_suspension_en' => 'required',
            'rear_suspension_ml' => 'required',
            'battery_en' => 'required',
            'battery_ml' => 'required',
            'headlight' => 'required',
            'brochure' => 'mimes:pdf|max:4096'
        ]);

        $motorcycle_details = MotorcycleDetail::where('product_id', $motorcycle->id)->first();

        if($request->hasFile('thumbnail'))
        {
            $thumbnail = $request->file('thumbnail');
            $generated_thumbnail = hexdec(uniqid()) . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)->resize(650, 428)->save('uploads/motorcycles/thumbnails/' . $generated_thumbnail);
            unlink('uploads/motorcycles/thumbnails/' . $motorcycle->thumbnail);
        }
        else
        {
            $generated_thumbnail = $motorcycle->thumbnail;
        }
  
        $motorcycle->update([
            'name_en' => $request->name_en,
            'name_ml' => $request->name_ml,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'code' => $request->code,
            'price' => $request->price,
            'slug' => Str::slug($request->name_en, '-'),
            'thumbnail' => $generated_thumbnail,
            'status' => 1,
            'created_at' => Carbon::now()            
        ]);

        if($request->hasFile('overview_image'))
        {
            $overview = $request->file('overview_image');
            $destinationPath = 'uploads/motorcycles/overviews/';
            $generated_overview = hexdec(uniqid()) . '.' . $overview->getClientOriginalExtension();
            Image::make($overview)->save($destinationPath . $generated_overview);
            if($motorcycle->details->overview_image)
            {
                unlink($destinationPath . $motorcycle->details->overview_image);
            }
        }
        else
        {
            $generated_overview = $motorcycle->details->overview_image;
        }

        if($request->hasFile('brochure'))
        {
            $file = $request->file('brochure');
            $destinationPath = 'uploads/motorcycles/brochures/';
            $brochure = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $brochure);
            if($motorcycle->details->brochure)
            {
                unlink($destinationPath . $motorcycle->details->brochure);
            }
        }
        else
        {
            $brochure = $motorcycle->details->brochure;
        }

        $motorcycle_details->update([
            'product_id' => $motorcycle->id,
            'description_en' => $request->description_en,
            'description_ml' => $request->description_ml,
            'overview_image' => $generated_overview,           
            'features_en' => $request->features_en,
            'features_ml' => $request->features_ml,
            'accessories_en' => $request->accessories_en,
            'accessories_ml' => $request->accessories_ml,
            'displacement' => $request->displacement,
            'engine_type_en' => $request->engine_type_en,
            'engine_type_ml' => $request->engine_type_ml,
            'fuel_system_en' => $request->fuel_system_en,
            'fuel_system_ml' => $request->fuel_system_ml,
            'valve_system_en' => $request->valve_system_en,
            'valve_system_ml' => $request->valve_system_ml,
            'bore_stroke' => $request->bore_stroke,
            'engine_output' => $request->engine_output,
            'torque' => $request->torque,
            'starter_system_en' => $request->starter_system_en,
            'starter_system_ml' => $request->starter_system_ml,
            'transmission_type_en' => $request->transmission_type_en,
            'transmission_type_ml' => $request->transmission_type_ml,
            'wheels_en' => $request->wheels_en,
            'wheels_ml' => $request->wheels_ml,
            'length' => $request->length,
            'width' => $request->width,
            'height' => $request->height,
            'wheel_base' => $request->wheel_base,
            'ground_clearance' => $request->ground_clearance,
            'seat_height' => $request->seat_height,
            'kerb_mass' => $request->kerb_mass,
            'fuel_tank_capacity' => $request->fuel_tank_capacity,
            'front_brakes_en' => $request->front_brakes_en,
            'front_brakes_ml' => $request->front_brakes_ml,
            'rear_brakes_en' => $request->rear_brakes_en,
            'rear_brakes_ml' => $request->rear_brakes_ml,
            'front_tyre' => $request->front_tyre,
            'rear_tyre' => $request->rear_tyre,
            'front_suspension_en' => $request->front_suspension_en,
            'front_suspension_ml' => $request->front_suspension_ml,
            'rear_suspension_en' => $request->rear_suspension_en,
            'rear_suspension_ml' => $request->rear_suspension_ml,
            'battery_en' => $request->battery_en,
            'battery_ml' => $request->battery_ml,
            'headlight' => $request->headlight,
            'taillight' => $request->taillight,
            'brochure' => $brochure,
            'video' => $request->video,
            'created_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Motorcycle Edit Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.motorcycles')->with($notification);
    }

    public function updateImages(Motorcycle $motorcycle, Request $request)
    {
        $photos = $request->photos;

        if(!is_null($photos))
        {
            foreach($photos as $id => $photo)
            {
                $deletedPhoto = Photo::findOrFail($id);
                unlink('uploads/motorcycles/photos/' . $deletedPhoto->file);
                $generated_photo = hexdec(uniqid()) . '.' . $photo->getClientOriginalExtension();
                Image::make($photo)->resize(650, 428)->save('uploads/motorcycles/photos/' . $generated_photo);
            
                $deletedPhoto->update([
                    'product_id' => $motorcycle->id,
                    'file' => $generated_photo,
                    'updated_at' => Carbon::now()
                ]);
            } // End foreach    
        }

        $notification = array (
            'message' => 'Other Motorcycle Images Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Motorcycle  $motorcycle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motorcycle $motorcycle)
    {

        $motorcycle_details = MotorcycleDetail::where('product_id', $motorcycle->id)->first();

        $photos = Photo::where('product_id', $motorcycle->id)->get();
        foreach($photos as $photo)
        {
            unlink('uploads/motorcycles/photos/' . $photo->file);
            $photo->delete();    
        }

        if(file_exists('uploads/motorcycles/thumbnails/' . $motorcycle->thumbnail))
        {
            unlink('uploads/motorcycles/thumbnails/' . $motorcycle->thumbnail);
        }

        if($motorcycle_details->overview_image)
        {
            unlink('uploads/motorcycles/overviews/' . $motorcycle_details->overview_image);
        }

        if($motorcycle_details->brochure)
        {
            unlink('uploads/motorcycles/brochures/' . $motorcycle_details->brochure);
        }


        $motorcycle->delete();

        $notification = array (
            'message' => 'Motorcycle Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function deleteImage(Request $request, Photo $photo)
    {
        unlink('uploads/motorcycles/photos/' . $photo->file);
        $photo->delete();
        
        $notification = array (
            'message' => 'Motorcycle Image Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function deactivate (Motorcycle $motorcycle)
    {
        $motorcycle->status = 0;
        $motorcycle->save();

        $notification = array (
            'message' => 'Motorcycle Hidden Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function activate (Motorcycle $motorcycle)
    {
        $motorcycle->status = 1;
        $motorcycle->save();

        $notification = array (
            'message' => 'Motorcycle Made Visible Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
