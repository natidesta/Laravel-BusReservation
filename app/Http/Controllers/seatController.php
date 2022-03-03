<?php

namespace App\Http\Controllers;

use App\Models\seat;
use Illuminate\Http\Request;

class seatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function addseats(Request $request){
        
        $seat=new seat();
        $seat->available=$request->available;
        $seat->reserved=$request->reserved;
        $res=$seat->save();
        dd($request->available);
        if($res){
            return back()->with('success','you have added seats successfully');
        } else {
            return back()->with('fail','Something is wrong');
        }
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
     * @param  \App\Models\seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function show(seat $seat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function edit(seat $seat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, seat $seat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function destroy(seat $seat)
    {
        //
    }
}
