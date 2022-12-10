<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::all();
        return view('backend.reviews.index', compact('reviews'));
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
            'review_en' => 'required',
            'review_ml' => 'required'
        ]);

        Review::create([
            'name_en' => $request->name_en,
            'name_ml' => $request->name_ml,
            'review_en' => $request->review_en,
            'review_ml' => $request->review_ml,
            'created_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Review Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        return view('backend.reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        $request->validate([
            'name_en' => 'required',
            'name_ml' => 'required',
            'review_en' => 'required',
            'review_ml' => 'required'
        ]);

        $review->update([
            'name_en' => $request->name_en,
            'name_ml' => $request->name_ml,
            'review_en' => $request->review_en,
            'review_ml' => $request->review_ml,
            'updated_at' => Carbon::now()
        ]);

        $notification = array (
            'message' => 'Review Edited Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.reviews')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $review->delete();

        $notification = array (
            'message' => 'Review Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
