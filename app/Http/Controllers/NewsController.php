<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $data = [
            'menu' => 'Berita'
        ];
        return view('news.index', $data);
    }
    public function article($id)
    {
        $data = [
            'menu' => 'Berita',
            'id' => $id
        ];
        return view('news.article', $data);
    }
}
