<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DigiUsers;

class DigiUsersController extends Controller
{
    public function index(Type $var = null)
    {
        return view('index');
    }
    public function getData()
    {
        $Data = DigiUsers::limit(5)->get();
        // return response()->json($users);
        return view('index', ['data' => $Data]);
    }

    public function emptyTable(Request $request)
    {
        $uri = $request->path();
        if($uri == 'empty-table'){
            $emptyQuery = DigiUsers::truncate();
            if($emptyQuery != false){
                // return view('index');
                return redirect()->action([DigiUsersController::class,'getData']);
            }
        }
    }

    public function deleteData(Request $request, $id)
    {
        $user_id = (int)$request->route('id');
        if(is_int($user_id)){
            DigiUsers::where('user_id', $user_id)->delete();
            return redirect()->action([DigiUsersController::class,'getData']);
        }
        else
            return response()->json(['status' => '302', 'message' => 'NAN']);
    }
    
    public function getUserDatabyId(Request $request, $id)
    {
        $user_id = (int)$request->route('id');
        if(is_int($user_id) == true){
        }
    }
}
