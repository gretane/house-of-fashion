<?php

namespace App\Http\Controllers;

use App\Models\Designer;
use App\Http\Requests\StoreDesignerRequest;
use App\Http\Requests\UpdateDesignerRequest;
use Validator;

class DesignerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designers = Designer::all();
        return view('designer.index', ['designers' => $designers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('designer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDesignerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDesignerRequest $request)
    {
        $validator = Validator::make($request->all(),
        [
        'designer_name' => ['required', 'min:2', 'max:64'],
        'designer_surname' => ['required', 'min:2', 'max:64'],
        ]);

        if ($validator->fails()) {
        $request->flash();
        return redirect()->back()->withErrors($validator);
        }

        $designer = new Designer;
        $designer->name = $request->designer_name;
        $designer->surname = $request->designer_surname;
        $designer->save();
        return redirect()->route('designer.index')->with('success_message', 'New designer successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Designer  $designer
     * @return \Illuminate\Http\Response
     */
    public function show(Designer $designer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Designer  $designer
     * @return \Illuminate\Http\Response
     */
    public function edit(Designer $designer)
    {
        return view('designer.edit', ['designer' => $designer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDesignerRequest  $request
     * @param  \App\Models\Designer  $designer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDesignerRequest $request, Designer $designer)
    {
        $validator = Validator::make($request->all(),
        [
        'designer_name' => ['required', 'min:2', 'max:64'],
        'designer_surname' => ['required', 'min:2', 'max:64'],
        ]);

        if ($validator->fails()) {
        $request->flash();
        return redirect()->back()->withErrors($validator);
        }

        $designer->name = $request->designer_name;
        $designer->surname = $request->designer_surname;
        $designer->save();
        return redirect()->route('designer.index')->with('success_message', 'Successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Designer  $designer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Designer $designer)
    {
        if($designer->designerOutfits->count()){
            return redirect()->route('designer.index')->with('info_message', 'Deletion is not available. Designer has at least one outfit.');
        }
        $designer->delete();
        return redirect()->route('designer.index')->with('success_message', 'Deletion succeeded.');
           
    }
}
