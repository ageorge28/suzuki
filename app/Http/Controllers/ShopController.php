<?php

namespace App\Http\Controllers;

use App\Models\Seo;
use App\Models\Site;
use App\Models\Category;
use App\Models\Accessory;
use App\Models\Motorcycle;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function category($slug)
    {
        $site = Site::first();
        $seo = Seo::first();

        $category = Category::where('slug', $slug)->first();

        if($category)
        {
            $motorcycles = Motorcycle::where('category_id', $category->id)->paginate(6);
        }
        else
        {
            $subcategory = Subcategory::where('slug', $slug)->first();
            $category = $subcategory;
            $motorcycles = Motorcycle::where('subcategory_id', $subcategory->id)->paginate(6);
        }

        $bikes = Category::where('name_en', 'Bikes')->first();
        $scooters = Category::where('name_en', 'Scooters')->first();
        $bikes_subcategories = Subcategory::where('category_id', $bikes->id)->where('status', 1)->get();
        $scooters_subcategories = Subcategory::where('category_id', $scooters->id)->where('status', 1)->get();
        
        return view('frontend.motorcycle_category', compact('site', 'motorcycles', 'category', 'bikes', 'scooters', 'bikes_subcategories', 'scooters_subcategories', 'seo'));
    }

    public function show($slug)
    {
        $site = Site::first();
        $seo = Seo::first();

        $motorcycle = Motorcycle::where('slug', $slug)->where('status', 1)->first();

        $bikes = Category::where('name_en', 'Bikes')->first();
        $scooters = Category::where('name_en', 'Scooters')->first();
        $bikes_subcategories = Subcategory::where('category_id', $bikes->id)->where('status', 1)->get();
        $scooters_subcategories = Subcategory::where('category_id', $scooters->id)->where('status', 1)->get();

        return view('frontend.details', compact('motorcycle', 'site', 'seo', 'bikes', 'scooters', 'bikes_subcategories', 'scooters_subcategories'));
    }

    public function accessories($slug)
    {
        $site = Site::first();
        $seo = Seo::first();

        $subcategory = Subcategory::where('slug', $slug)->first();
        $accessories = Accessory::where('subcategory_id', $subcategory->id)->paginate(6);
        $accessory_category = Category::where('name_en', 'Accessories')->first();
        $subcategories = Subcategory::where('category_id', $accessory_category->id)->orderBy('name_en')->get();  
        
        $bikes = Category::where('name_en', 'Bikes')->first();
        $scooters = Category::where('name_en', 'Scooters')->first();
        $bikes_subcategories = Subcategory::where('category_id', $bikes->id)->where('status', 1)->get();
        $scooters_subcategories = Subcategory::where('category_id', $scooters->id)->where('status', 1)->get();
        
        return view('frontend.accessory_category', compact('site', 'accessories', 'subcategories', 'subcategory', 'seo', 'bikes', 'scooters', 'bikes_subcategories', 'scooters_subcategories'));
    }



}
