<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AdminAgendaController extends Controller
{
    public function index()
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
            'title' => 'Data',
            'subtitle' => 'Agenda',
            'check_data' => 0,
            'agenda' => $agenda
        ];
        return \view('admin.data.agenda', $data);
    }
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'date' => $request->date,
            'start' => $request->start,
            'end' => $request->end
        ];

        Agenda::insert($data);
        return \redirect('all_agenda');
    }
    public function update(Request $request, $id)
    {
        $data = [
            'name' => $request->name,
            'date' => $request->date,
            'start' => $request->start,
            'end' => $request->end
        ];

        Agenda::where('id', $id)->update($data);
        return \redirect('all_agenda');
    }
    public function delete(Request $request, $id)
    {
        Agenda::where('id', $id)->delete();
        return \redirect('all_agenda');
    }
}
