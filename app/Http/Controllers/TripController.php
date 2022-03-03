<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
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
    public function list(){
        $data=Trip::all();
        return view('list',['data'=>$data]);
    }
    public function showData($id){
        $data=Trip::find($id);
        return view('edit',['data'=>$data]);
    }
    
    public function editdata(Request $request){
        $data=Trip::find($request->id);
        $data->bus_id=$request->bus_id;
        $data->departure_city=$request->departure_city;
        $data->destination_city=$request->destination_city;
        $data->price=$request->price;
        $data->available_seats=$request->available_seats;
        $data->date=$request->date;
        $data->arrival_time=$request->arrival_time;
        $data->save();
        
        return redirect('list');;
        
    }
    public function delete($id){
        $data=Trip::find($id);
        $data->delete();
        return redirect('list');
    }


    public function addTrip(Request $request){
        $request->validate([
            'bus_id'=>'required',
            'departure_city'=>'required',
            'destination_city'=>'required',
            'price'=>'required',
            'date'=>'required',
            'available_seats'=>'required',
            'arrival_time'=>'required',
        ]);
        $trip=new Trip();
        $trip->bus_id=$request->bus_id;
        $trip->departure_city=$request->departure_city;
        $trip->destination_city=$request->destination_city;
        $trip->price=$request->price;
        $trip->available_seats=$request->available_seats;
        $trip->date=$request->date;
        $trip->arrival_time=$request->arrival_time;
        $res=$trip->save();
        if($res){
            return back()->with('success','Trip added  successfully');
        } else {
            return back()->with('fail','Something is wrong');
        }
    }
    /** 
    *public function search(Request $request){
     *   $search_text = $request->departure_city;
    *$data = Trip::where('departure_city','LIKE','%'.$search_text.'%');
    *return view('main',compact('data'));

    *}
    */

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show(Trip $trip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(Trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trip $trip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trip $trip)
    {
        //
    }
}
