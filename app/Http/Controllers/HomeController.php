<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VillageData;
use App\Models\News;
use Illuminate\Support\Carbon;
use App\Models\People;
use App\Models\Agenda;

class HomeController extends Controller
{
    public function index()
    {
        //parse date to indonesian format
        $news = News::orderBy('id', 'desc')->limit(3)->get();
        $index = 0;
        foreach ($news as $item) {
            $date = Carbon::parse($news[$index]->created_at)->locale('id');
            $date->settings(['formatFunction' => 'translatedFormat']);
            $news[$index]->tanggal = $date->format('l, j F Y');
            $index++;
        }
        $data = [
            'menu' => 'Beranda',
            'news' => $news
        ];
        return view('home.index', $data);
    }
    public function info($title)
    {
        $data = [
            'menu' => 'Beranda',
            'title' => $title,
            'village_data' => VillageData::where('title', $title)->first(),
            'check' => VillageData::where('title', $title)->count(),
        ];
        return view('home.info', $data);
    }
    public function gov($title)
    {
        $data = [
            'menu' => 'Beranda',
            'title' => $title,
            'village_data' => VillageData::where('title', $title)->first(),
            'check' => VillageData::where('title', $title)->count(),
            'people' => People::orderBy('id', 'asc')->get(),
            'anggaran' => VillageData::where('title', 'Anggaran')->first()
        ];
        return view('home.gov', $data);
    }
    public function agenda()
    {
        //parse date to indonesian format
        $agenda =  Agenda::orderBy('date', 'desc')->get();
        $index = 0;
        foreach ($agenda as $item) {
            $date = Carbon::parse($agenda[$index]->date)->locale('id');
            $date->settings(['formatFunction' => 'translatedFormat']);
            $agenda[$index]->tanggal = $date->format('l, j F Y');
            $index++;
        }
        $data = [
            'menu' => 'Beranda',
            'title' => 'Agenda',
            'agenda' => $agenda
        ];
        return view('home.agenda', $data);
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

    public function profil()
    {
        $data = [
            'menu' => 'Beranda'
        ];
        return view('home.profil-village', $data);
    }
    public function apparatus()
    {
        $data = [
            'menu' => 'Beranda'
        ];
        return view('home.apparatus', $data);
    }
}
