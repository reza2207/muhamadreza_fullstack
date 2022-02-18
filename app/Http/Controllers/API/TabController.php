<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Validator;
use App\Models\User;


class TabController extends Controller
{
    public function list()
    {
        //$tab = new Tabungan;
        $list = Tabungan::all(); 
        //dump($list);
        //$data['posts'] = $list;
        //$data['last'] = Articles::orderBy('created_at', 'desc')->first();

        return response()->json([
            'message' => 'success',
            'data' => $list
        ], 200);
    }
}