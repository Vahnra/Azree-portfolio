<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Images;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Images/Index', [

        ]);
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
            'name' => 'required|string|max:255',
            'size' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        $fileName = 'image/' . time().'.'.$request->file('image')->extension();  

        $request->file('image')->move(public_path('image'), $fileName);

        Images::create([
            'name' => $request->name,
            'size' => $request->size,
            'image' => $fileName
        ]);

        sleep(1);

        return redirect(route('images.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function show(Images $images)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function edit(Images $images)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function update(Images $images, Request $request)
    {
        $this->authorize('update', $images);

        $image = Images::find($request->route()->parameters()['image']);

        $request->validate([
            'name' => 'required|string|max:255',
            'size' => 'required',
        ]);

        $image->name = $request->get('name');

        $image->size = $request->get('size');

        $image->save();

        return redirect(route('home'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function destroy(Images $images, Request $request)
    {
        $this->authorize('delete', $images);

        $image = Images::find($request->route()->parameters()['image']);

        $image->delete();

        return redirect(route('home'));
    }
}
