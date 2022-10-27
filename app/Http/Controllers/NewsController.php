<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Carbon;

class NewsController extends Controller
{
    public function index()
    {
        //parse date to indonesian format
        $news = News::orderBy('created_at', 'desc')->get();
        $index = 0;
        foreach ($news as $item) {
            $date = Carbon::parse($news[$index]->created_at)->locale('id');
            $date->settings(['formatFunction' => 'translatedFormat']);
            $news[$index]->tanggal = $date->format('l, j F Y');
            $index++;
        }
        $data = [
            'menu' => 'Berita',
            'news' => $news
        ];
        return view('news.index', $data);
    }
    public function article($id)
    {
        //parse date to indonesian format
        $news = News::find($id);

        $date = Carbon::parse($news->created_at)->locale('id');
        $date->settings(['formatFunction' => 'translatedFormat']);
        $news->tanggal = $date->format('l, j F Y');
        $data = [
            'menu' => 'Berita',
            'id' => $id,
            'news' => $news

        ];
        return view('news.article', $data);
    }
}
