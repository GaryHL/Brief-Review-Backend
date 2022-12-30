<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brief;

class BriefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $briefs = Brief::all();
        return $briefs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brief = new Brief();
        $brief -> tile = $request -> title;
        $brief -> description = $request -> requirements;
        $brief -> cover_brief = $request -> cover_brief;
        $brief -> technology = $request -> technology;
        $brief -> badges = $request -> badges;
        $brief -> users_completed = $request -> users_completed;
        $brief -> difficulty = $request -> difficulty;
        $brief -> type = $request -> type;

        $brief -> save();
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $brief = Brief ::findOrFail($request -> id) ; 
        $brief -> tile = $request -> title;
        $brief -> description = $request -> requirements;
        $brief -> cover_brief = $request -> cover_brief;
        $brief -> technology = $request -> technology;
        $brief -> badges = $request -> badges;
        $brief -> users_completed = $request -> users_completed;
        $brief -> difficulty = $request -> difficulty;
        $brief -> type = $request -> type;

        $brief -> save();
        return $brief;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($request)
    {
        $brief =  Brief::destroy($request->id);
        return $brief;
    }
}
