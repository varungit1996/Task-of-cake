<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cakelist;

class UserApiController extends Controller
{
    public function index(Request $req)
    {
        // dd($search);
        $data= Cakelist::all();
        return response()->json($data);
    }
}
