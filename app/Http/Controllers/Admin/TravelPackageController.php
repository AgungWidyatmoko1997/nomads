<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TravelPackageRequest;
use Illuminate\Http\Request;
use App\TravelPackage;
use Illuminate\Support\Str;

class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = TravelPackage::all();

        return view('pages.admin.travel-package.index', [
            'items' => $items 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.travel-package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TravelPackageRequest $request)
    {
        TravelPackage::create([
            'title' => $request->title,
            'location' => $request->location,
            'about' => $request->about,
            'featured_event' => $request->featured_event,
            'language' => $request->language,
            'foods' => $request->foods,
            'departure_date' => $request->departure_date,
            'duration' => $request->duration,
            'type' => $request->type,
            'price' => $request->price,
            'slug' => Str::slug($request->title)
        ]);

        return redirect()->route('travel-package.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = TravelPackage::findOrFail($id);

        return view('pages.admin.travel-package.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TravelPackageRequest $request, $id)
    {
        $item = TravelPackage::findOrFail($id);

        $item->update([
            'title' => $request->title,
            'location' => $request->location,
            'about' => $request->about,
            'featured_event' => $request->featured_event,
            'language' => $request->language,
            'foods' => $request->foods,
            'departure_date' => $request->departure_date,
            'duration' => $request->duration,
            'type' => $request->type,
            'price' => $request->price,
            'slug' => Str::slug($request->title)
        ]);

        return redirect()->route('travel-package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TravelPackage::findOrFail($id);
        $item->delete($id);

        return redirect()->route('travel-package.index');
    }
}
