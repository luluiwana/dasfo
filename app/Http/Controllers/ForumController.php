<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $data = [
            'menu' => 'Forum'
        ];
        return view('forum.index', $data);
    }
    public function add()
    {
        $data = [
            'menu' => 'Forum'
        ];
        return view('forum.add', $data);
    }
}
