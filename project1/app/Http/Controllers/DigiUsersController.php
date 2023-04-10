<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DigiUsers;

class DigiUsersController extends Controller
{
    public function getData()
    {
        $Data = DigiUsers::limit(5)->get();
        // return response()->json($users);
        return view('index', ['data' => $Data]);
    }
}
