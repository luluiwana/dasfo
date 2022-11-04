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
            'cashflow' => VillageData::where('title', 'Anggaran')->first(),
            'people' => People::orderBy('id', 'asc')->get()
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
            'file.*' => 'required|mimes:png,jpg,png,jpeg|max:2048'
        ]);
        for ($item = 0; $item <= count($request->name); $item++) {

            if (isset($request->file[$item])) {
                $images = $request->file('file');
                $fileName = time() . '_' .  $images[$item]->getClientOriginalName();
                $filePath = $images[$item]->storeAs('perangkat', $fileName, 'public');
                $fileModel = new People();
                $fileModel->title = $request->title[$item];
                $fileModel->name = $request->name[$item];
                $fileModel->photo = $filePath;
                $fileModel->save();
            }
        }
        return redirect('govdata/Pemerintahan');
    }
    public function edit_people(Request $request, $id)
    {
        $request->validate([
            'file.*' => 'mimes:png,jpg,png,jpeg|max:2048'
        ]);

        if (isset($request->file)) {
            $images = $request->file('file');
            $fileName = time() . '_' .  $images->getClientOriginalName();
            $filePath = $images->storeAs('perangkat', $fileName, 'public');
            //get old photo
            $old = People::where('id', $id)->first()->photo;
            //delete old photo
            Storage::delete('/public/' . $old);
            //update
            $data = [
                'title' => $request->title,
                'name' => $request->name,
                'photo' => $filePath
            ];
            People::where('id', $id)->update($data);
        } else {
            //update
            $data = [
                'title' => $request->title,
                'name' => $request->name,
            ];
            People::where('id', $id)->update($data);
        }


        return redirect('govdata/Pemerintahan');
    }
    public function delete_people($id)
    {
        //get old photo
        $old = People::where('id', $id)->first()->photo;
        //delete old photo
        Storage::delete('/public/' . $old);
        //delete from db
        People::where('id', $id)->delete();
        return redirect('govdata/Pemerintahan');
    }
    public function store_gov(Request $request, $title)
    {
        $request->validate([
            'file' => 'required|mimes:png,jpg,png,jpeg|max:2048',
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
            // $fileName = time() . '_' . $request->cashflow->getClientOriginalName();
            // $filePath = $request->file('cashflow')->storeAs('data_desa', $fileName, 'public');
            $fileModel->title = 'Anggaran';
            $fileModel->thumbnail = '';
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
