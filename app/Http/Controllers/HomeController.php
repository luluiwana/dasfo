<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'menu' => 'Beranda'
        ];
        return view('home.index', $data);
    }
    public function culture()
    {
        $data = [
            'menu' => 'Beranda'
        ];
        return view('home.culture', $data);
    }
    public function goverment()
    {
        $data = [
            'menu' => 'Beranda'
        ];
        return view('home.goverment', $data);
    }
    public function travel()
    {
        $data = [
            'menu' => 'Beranda'
        ];
        return view('home.travel', $data);
    }
    public function social()
    {
        $data = [
            'menu' => 'Beranda'
        ];
        return view('home.social', $data);
    }
}
