<?php

namespace App\Http\Controllers;

use App\Models\Aspiration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;

class ForumController extends Controller
{
    public function index()
    {
        $data = [
            'menu' => 'Forum',
            'aspirations' => Aspiration::orderBy('created_at', 'desc')->get()
        ];
        return view('forum.index', $data);
    }
    public function add()
    {
        $data = [
            'menu' => 'Forum',
        ];
        return view('forum.add', $data);
    }
    public function insert(Request $request)

    {
        // validate form
        $validate = Validator::make($request->all(), [
            'aspiration' => 'required',
        ], [
            'aspiration.required' => 'Tuliskan aspirasi Anda',
        ]);
        // if validation error
        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }
        //define sender name
        $name = $request->name;
        if ($request->name == "") {
            $name = "anonim";
        }
        //insert DB
        Aspiration::insert([
            'aspiration' => $request->aspiration,
            'name' => $name,
            'created_at' => Carbon::now()
        ]);
        return \redirect('/forum');
    }
}
