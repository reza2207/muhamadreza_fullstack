<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nabung;
use App\Models\user_tab;

class NabungController extends Controller
{
    public function list()
    {
        //$tab = new nabung;
        $list = nabung::all(); 
        //dump($list);
        //$data['posts'] = $list;
        //$data['last'] = Articles::orderBy('created_at', 'desc')->first();

        return response()->json([
            'message' => 'success',
            'data' => $list
        ], 200);
    }

    
    public function user()
    {
        //$tab = new nabung;
        $list = user_tab::all(); 
        //dump($list);
        //$data['posts'] = $list;
        //$data['last'] = Articles::orderBy('created_at', 'desc')->first();

        return response()->json([
            'message' => 'success',
            'data' => $list
        ], 200);
    }

    public function store(Request $request)
    {
        //$this->middleware('auth');
        $this->validate($request, [
			'nama'=> 'required',
            //'content'=> 'required',
            //'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		]);

        return response()->json([
            'message' => 'success',
            //'data' => $list
        ], 200);
    }
}
