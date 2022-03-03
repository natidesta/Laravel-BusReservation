<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Trip;
use Illuminate\Http\Request;

class ReservationController extends Controller
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
    
    public function reserve(Request $request){
        $request->validate([
            'name'=>'required',
            'no_of_seat'=>'required|min:1|max:2',
        ]);
        $res = new Reservation();
        $trip = Trip::find($request->trip_id);
        $res->Fullname=$request->name;
        $res->bus_id=$request->bus_id;
        $res->trip_id=$request->trip_id;
        $res->ticket_no=uniqid();
        $res->price=($request->price * $request->no_of_seat);
        $res->Number_of_seats=$request->no_of_seat;
        $avail_seats = $trip->available_seats;
        $no_of_seats = $request->no_of_seat;
        if($no_of_seats > 2){
            return back()->with('fail', ' maximium is 2 seats');
        }
        if($avail_seats < $no_of_seats ) {
            return back()->with('fail', 'No available seats');
        } else {
            $trip->available_seats = ($avail_seats - $no_of_seats);
            $trip->save();
            $result=$res->save();
        }
        
        if($result){
            return back()->with('success','you have reserved successfully.  Your ticket number is '.$res->ticket_no);
        } else {
            return back()->with('fail','Something is wrong');
        }
    }
    public function cancel(){
        return view("cancel");
    }
/*
    public function showbooked(){
        $data=Reservation::all();
        return view('booked',['data'=>$data]);
    }
*/



    public function cancel_ticket(Request $request){
        $res=Reservation::where('ticket_no','=',$request->ticket_no);
       
       $rest= $res->delete();
        if($rest){
            return back()->with('success','Ticket  canceld successfully');
        } else {
            return back()->with('fail','Something is wrong');
        }

        return redirect('cancel');
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
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
