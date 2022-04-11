<?php

namespace App\Http\Controllers;

use App\Models\Outfit;
use App\Http\Requests\StoreOutfitRequest;
use App\Http\Requests\UpdateOutfitRequest;
use App\Models\Designer;
use Validator;


class OutfitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outfits = Outfit::all();
        return view('outfit.index', ['outfits' => $outfits]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $designers = Designer::all();
        return view('outfit.create', ['designers' => $designers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOutfitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOutfitRequest $request)
    {
        $validator = Validator::make($request->all(),
        [
        'outfit_type' => ['required', 'min:2', 'max:50'],
        'outfit_color' => ['required', 'min:2', 'max:20'],
        'outfit_size' => ['required', 'integer', 'min:2', 'max:50'],
        'outfit_about' => ['required'],
        'designer_id' => ['required', 'integer', 'min:1'],
        ]);

        if ($validator->fails()) {
        $request->flash();
        return redirect()->back()->withErrors($validator);
        }


        $outfit = new Outfit;
        $outfit->type = $request->outfit_type;
        $outfit->color = $request->outfit_color;
        $outfit->size = $request->outfit_size;
        $outfit->about = $request->outfit_about;
        $outfit->designer_id = $request->designer_id;
        $outfit->save();
        return redirect()->route('outfit.index')->with('success_message', 'New outfit successfully added.');       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Outfit  $outfit
     * @return \Illuminate\Http\Response
     */
    public function show(Outfit $outfit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Outfit  $outfit
     * @return \Illuminate\Http\Response
     */
    public function edit(Outfit $outfit)
    {
        $designers = Designer::all();
        return view('outfit.edit', ['outfit' => $outfit, 'designers' => $designers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOutfitRequest  $request
     * @param  \App\Models\Outfit  $outfit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOutfitRequest $request, Outfit $outfit)
    {
        $validator = Validator::make($request->all(),
        [
        'outfit_type' => ['required', 'min:2', 'max:50'],
        'outfit_color' => ['required', 'min:2', 'max:20'],
        'outfit_size' => ['required', 'integer', 'min:2', 'max:50'],
        'outfit_about' => ['required'],
        'designer_id' => ['required', 'integer', 'min:1'],
        ]);

        if ($validator->fails()) {
        $request->flash();
        return redirect()->back()->withErrors($validator);
        }


        $outfit->type = $request->outfit_type;
        $outfit->color = $request->outfit_color;
        $outfit->size = $request->outfit_size;
        $outfit->about = $request->outfit_about;
        $outfit->designer_id = $request->designer_id;
        $outfit->save();
        return redirect()->route('outfit.index')->with('success_message', 'Successfully updated.');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Outfit  $outfit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outfit $outfit)
    {
        $outfit->delete();
        return redirect()->route('outfit.index')->with('success_message', 'Deletion succeeded.');  
    }
}
