<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aspiration;
use Illuminate\Support\Carbon;

class AnswerAspirationController extends Controller
{
    public function index()
    {
        //parse date to indonesian format
        $aspiration = Aspiration::orderBy('created_at', 'desc')->get();
        $index = 0;
        foreach ($aspiration as $item) {
            $date = Carbon::parse($aspiration[$index]->created_at)->locale('id');
            $date->settings(['formatFunction' => 'translatedFormat']);
            $aspiration[$index]->tanggal = $date->format('l, j F Y');
            $aspiration[$index]->jam = $date->format('H:i');
            $index++;
        }
        $data = [
            'title' => 'Aspirasi',
            'subtitle' => 'Semua Aspirasi',

            'aspirations' => $aspiration
        ];
        return \view('admin.aspiration.index', $data);
    }
    public function read($id)
    {
        $data = [
            'title' => 'Aspirasi',
            'subtitle' => 'Semua Aspirasi',
            'aspiration' => Aspiration::find($id)
        ];
        return \view('admin.aspiration.read', $data);
    }
    public function answer(Request $request, $id)
    {
        Aspiration::where('id', $id)->update(
            [
                'answer' => $request->answer
            ]
        );
        return \redirect('read/' . $id);
    }
    public function delete($id)
    {
        Aspiration::where('id', $id)->delete();
        return \redirect('all_aspiration');
    }
}
