<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class AdminNewsController extends Controller
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
            'title' => 'Berita',
            'subtitle' => 'Semua Berita',
            'news' => $news
        ];
        return \view('admin.news.index', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'Berita',
            'subtitle' => 'Buat Berita'
        ];
        return \view('admin.news.create', $data);
    }
    public function view($id)
    {
        $data = [
            'title' => 'Berita',
            'subtitle' => 'Semua Berita',
            'news' => News::find($id)
        ];
        return \view('admin.news.view', $data);
    }
    public function update(Request $request, $id)
    {

        News::where('id', $id)
            ->update(['content' => $request->content, 'title' => $request->title]);
        return  redirect('/view/' . $id);
    }
    public function updateThumbnail(Request $request, $id)
    {
        $request->validate([
            'file' => 'required|mimes:png,jpg,png,jpeg|max:2048'
        ]);
        if ($request->file()) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            //get old header path
            $old_header = News::where('id', $id)->first()->thumbnail;

            // delete old header
            Storage::delete('/public/' . $old_header);
            //upload image
            $filePath = $request->file('file')->storeAs('berita', $fileName, 'public');
            //update header path
            News::where('id', $id)
                ->update(['thumbnail' => $filePath]);
            return back()
                ->with('success', 'File has been uploaded.')
                ->with('file', $fileName);
        }
        return redirect('/view/' . $id);
    }
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:png,jpg,png,jpeg|max:2048'
        ]);
        $fileModel = new News;
        if ($request->file()) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('berita', $fileName, 'public');
            $fileModel->title = $request->title;
            $fileModel->thumbnail = $filePath;
            $fileModel->content = $request->content;
            $fileModel->save();
        }
        return redirect('/all_news');
    }
    public function delete($id)
    {
        //get old header path
        $old_header = News::where('id', $id)->first()->thumbnail;

        // delete old header
        Storage::delete('/public/' . $old_header);
        //delete from db
        News::where('id', $id)->delete();
        return \redirect('all_news');
    }
}
