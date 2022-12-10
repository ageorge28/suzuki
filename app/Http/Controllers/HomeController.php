<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Seo;
use App\Models\Site;
use App\Models\About;
use App\Models\Banner;
use App\Models\Branch;
use App\Models\Review;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Workshop;
use App\Models\Accessory;
use App\Models\Motorcycle;
use App\Mail\Communication;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $site = Site::first();
        $seo = Seo::first();
        $banners = Banner::all();
        $sliders = Slider::all();
        $bikes = Category::where('name_en', 'Bikes')->first();
        $scooters = Category::where('name_en', 'Scooters')->first();
        $bikes_subcategories = Subcategory::where('category_id', $bikes->id)->where('status', 1)->get();
        $scooters_subcategories = Subcategory::where('category_id', $scooters->id)->where('status', 1)->get();
        $accessories = Category::where('name_en', 'Accessories')->first();
        $workshop = Category::where('name_en', 'Workshop')->first();
        $motorcycles = Motorcycle::all();
        
        return view('frontend.index', compact('site', 'banners', 'sliders', 'bikes', 'scooters', 'accessories', 'workshop', 'motorcycles', 'seo', 'bikes_subcategories', 'scooters_subcategories'));
    }

    public function motorcycles()
    {
        $site = Site::first();
        $seo = Seo::first();
        $motorcycles = Motorcycle::paginate(6);
        $bikes = Category::where('name_en', 'Bikes')->first();
        $scooters = Category::where('name_en', 'Scooters')->first();
        $bikes_subcategories = Subcategory::where('category_id', $bikes->id)->where('status', 1)->get();
        $scooters_subcategories = Subcategory::where('category_id', $scooters->id)->where('status', 1)->get();
        
        return view('frontend.motorcycles', compact('site', 'motorcycles', 'bikes', 'scooters', 'bikes_subcategories', 'scooters_subcategories', 'seo'));
    }

    public function accessories()
    {
        $site = Site::first();
        $seo = Seo::first();
        $accessories = Accessory::paginate(6);
        $accessory_category = Category::where('name_en', 'Accessories')->first();
        $subcategories = Subcategory::where('category_id', $accessory_category->id)->orderBy('name_en')->get();
        $bikes = Category::where('name_en', 'Bikes')->first();
        $scooters = Category::where('name_en', 'Scooters')->first();
        $bikes_subcategories = Subcategory::where('category_id', $bikes->id)->where('status', 1)->get();
        $scooters_subcategories = Subcategory::where('category_id', $scooters->id)->where('status', 1)->get();    
        return view('frontend.accessories', compact('site', 'accessories', 'subcategories', 'seo', 'bikes', 'scooters', 'bikes_subcategories', 'scooters_subcategories'));
    }

    public function about()
    {
        $site = Site::first();
        $seo = Seo::first();
        $about = About::first();
        $reviews = Review::all();
        $bikes = Category::where('name_en', 'Bikes')->first();
        $scooters = Category::where('name_en', 'Scooters')->first();
        $bikes_subcategories = Subcategory::where('category_id', $bikes->id)->where('status', 1)->get();
        $scooters_subcategories = Subcategory::where('category_id', $scooters->id)->where('status', 1)->get();    
        return view('frontend.about', compact('site', 'seo', 'about', 'reviews', 'bikes', 'scooters', 'bikes_subcategories', 'scooters_subcategories'));
    }

    public function workshop()
    {
        $site = Site::first();
        $seo = Seo::first();
        $workshop = Workshop::first();
        $bikes = Category::where('name_en', 'Bikes')->first();
        $scooters = Category::where('name_en', 'Scooters')->first();
        $bikes_subcategories = Subcategory::where('category_id', $bikes->id)->where('status', 1)->get();
        $scooters_subcategories = Subcategory::where('category_id', $scooters->id)->where('status', 1)->get();    
        return view('frontend.workshop', compact('site', 'seo', 'workshop', 'bikes', 'scooters', 'bikes_subcategories', 'scooters_subcategories'));
    }

    public function contact()
    {
        $site = Site::first();
        $seo = Seo::first();
        $bikes = Category::where('name_en', 'Bikes')->first();
        $scooters = Category::where('name_en', 'Scooters')->first();
        $bikes_subcategories = Subcategory::where('category_id', $bikes->id)->where('status', 1)->get();
        $scooters_subcategories = Subcategory::where('category_id', $scooters->id)->where('status', 1)->get();    
        $branches = Branch::all();
        return view('frontend.contact', compact('site', 'seo', 'bikes', 'scooters', 'bikes_subcategories', 'scooters_subcategories', 'branches'));
    }

    public function sendMail(Request $request)
    {
        $site = Site::first();

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $contact = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ];

        Contact::create([
            'phone' => $request->phone,
            'created_at' => Carbon::now()
        ]);

        Mail::to('goldensuzuki.ptasale@gmail.com')->send(new Communication($contact));

        $notification = array (
            'message' => 'Your message has been sent',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
