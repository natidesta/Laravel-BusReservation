<?php

namespace App\Http\Controllers;
use App\Models\Trip;
use App\Models\Bus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    //
    function search(Request $request){
      
     
        if(isset($_GET['query'])){
            $search_text=$_GET['query'];
            $s2=$_GET['query2'];
            $s3=$_GET['query3'];
            // $data=DB::table('trips')
            $data = Trip::where('departure_city','LIKE','%'.$search_text.'%')
            ->where('destination_city','LIKE','%'.$s2.'%')
            ->where('date','LIKE','%'.$s3.'%')
            ->with('bus')
            ->paginate('6');
            return view('search',['data'=>$data]);
            
        }else{
            return view('search');
        }

    }
    
}
