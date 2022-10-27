<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VillageData;
use Illuminate\Support\Facades\Storage;
use App\Models\People;

class DataController extends Controller
{
    public function index($title)

    {
        $data = [
            'title' => 'Data',
            'subtitle' => $title,
            'check_data' => VillageData::where('title', $title)->count(),
            'village_data' => VillageData::where('title', $title)->first()
        ];
        return \view('admin.data.index', $data);
    }
    public function govdata($title)

    {
        $data = [
            'title' => 'Data',
            'subtitle' => $title,
            'check_data' => VillageData::where('title', $title)->count(),
            'village_data' => VillageData::where('title', $title)->first(),
            'cashflow' => VillageData::where('title', 'Anggaran')->first()
        ];
        return \view('admin.data.gov_index', $data);
    }
    public function create($title)
    {
        $data = [
            'title' => 'Data',
            'subtitle' => $title
        ];

        return \view('admin.data.create', $data);
    }
    public function create_govdata($title)
    {
        $data = [
            'title' => 'Data',
            'subtitle' => $title
        ];

        return \view('admin.data.gov', $data);
    }
    public function store(Request $request, $title)
    {
        $request->validate([
            'file' => 'required|mimes:png,jpg,png,jpeg|max:2048'
        ]);
        $fileModel = new VillageData;
        if ($request->file()) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('data_desa', $fileName, 'public');
            // $fileModel->thumbnail = time() . '_' . $request->file->getClientOriginalName();
            $fileModel->title = $title;
            $fileModel->thumbnail = $filePath;
            $fileModel->content = $request->content;
            $fileModel->save();
        }
        return redirect('/data/' . $title);
    }
    public function add_people(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:png,jpg,png,jpeg|max:2048'
        ]);
        $fileModel = new People;
        if ($request->file()) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('perangkat', $fileName, 'public');
            // $fileModel->thumbnail = time() . '_' . $request->file->getClientOriginalName();
            $fileModel->title = $request->title;
            $fileModel->photo = $filePath;
            $fileModel->name = $request->name;
            $fileModel->save();
        }
        return redirect('govdata/Pemerintahan');
    }
    public function store_gov(Request $request, $title)
    {
        $request->validate([
            'file' => 'required|mimes:png,jpg,png,jpeg|max:2048',
            'cashflow' => 'required'
        ]);
        $fileModel = new VillageData;
        if ($request->file()) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('data_desa', $fileName, 'public');
            $fileModel->title = $title;
            $fileModel->thumbnail = $filePath;
            $fileModel->save();
        }
        $fileModel = new VillageData;
        if ($request->file()) {
            $fileName = time() . '_' . $request->cashflow->getClientOriginalName();
            $filePath = $request->file('cashflow')->storeAs('data_desa', $fileName, 'public');
            $fileModel->title = 'Anggaran';
            $fileModel->thumbnail = $filePath;
            $fileModel->save();
        }
        return redirect('/govdata/' . $title);
    }
    public function update(Request $request, $title)
    {

        VillageData::where('title', $title)
            ->update(['content' => $request->content]);
        return  redirect('/data/' . $title);
    }
    public function updateHeader(Request $request, $title)
    {
        $request->validate([
            'file' => 'required'
        ]);
        if ($request->file()) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            //get old header path
            $old_header = VillageData::where('title', $title)->first()->thumbnail;
            // \print_r($old_header);
            // die;
            // delete old header
            Storage::delete('/public/' . $old_header);
            //upload image
            $filePath = $request->file('file')->storeAs('data_desa', $fileName, 'public');
            //update header path
            VillageData::where('title', $title)
                ->update(['thumbnail' => $filePath]);
            return back()
                ->with('success', 'File has been uploaded.')
                ->with('file', $fileName);
        }
        return redirect('/data/' . $title);
    }
}
