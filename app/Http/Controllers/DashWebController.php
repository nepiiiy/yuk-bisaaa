<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashWebController extends Controller
{

 


    public function dashweb(Request $request)
    {   
        $diti = User::where('status', 'aktif')->get();
        $searchTerm = $request->id;

        $products = User::find($searchTerm);
        return view('website.dashweb', ['data' => $products, 'searchTerm' => $searchTerm,'diti'=>$diti]);
    }


public function search(Request $request)
{
   

    $data = DB::table('users')
        ->where('status', '=', 'aktif')
        ->orderBy('id', 'asc')
        ->get();

    return view ('website.dashweb',['data1'=>$data]);
}

}
