<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'subtitle' => ''
        ];
        // return view('admin.dashboard', $data);
        return \redirect('all_aspiration');
    }
}
