<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Kelas;
use Exception;

class KelasController extends Controller
{
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'kelas_cover'    => 'image|mimes:webp|max:5000',
            'kelas_category' => 'required',
            'description'    => 'required',
            'kelas_title'    => 'required',
            'kelas_about'    => 'required',
            'kelas_price'    => 'required',
            'kelas_loc'      => 'required',
            'start_date'     => 'required',
            'end_date'       => 'required',
            'syllabus'       => 'required',
        ]);

        if ($validation->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validation);
        }

        $testData = Kelas::create([
            'kelas_cover'    => $request->file('kelas_cover') == null ? 'null' : $request->file('kelas_cover')->store('public/kelas'),
            'kelas_category' => $request->kelas_category,
            'description'    => $request->description,
            'kelas_title'    => $request->kelas_title,
            'kelas_about'    => $request->kelas_about,
            'kelas_price'    => $request->kelas_price,
            'kelas_loc'      => $request->kelas_loc,
            'start_date'     => $request->start_date,
            'end_date'       => $request->end_date,
            'syllabus'       => $request->syllabus,
        ]);

        return redirect()->route('classSchedule-writer');
    }

    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(), [
            'kelas_cover'    => 'image|mimes:webp|max:5000',
            'kelas_category' => 'required',
            'description'    => 'required',
            'kelas_title'    => 'required',
            'kelas_about'    => 'required',
            'kelas_price'    => 'required',
            'kelas_loc'      => 'required',
            'start_date'     => 'required',
            'end_date'       => 'required',
            'syllabus'       => 'required',
        ]);

        if ($validation->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validation);
        }

        $kelas = Kelas::where('id', '=', (int) $id)->first();
        if ($request->file('kelas_cover')) {
            $image = $request->file('kelas_cover')->store('public/kelas');
            Storage::delete($kelas->kelas_cover);

        } else {
            $image = $kelas->mentor_pic;
        }

        $kelas->update([
            'kelas_cover'    => $image,
            'kelas_category' => $request->kelas_category,
            'description'    => $request->description,
            'kelas_title'    => $request->kelas_title,
            'kelas_about'    => $request->kelas_about,
            'kelas_price'    => $request->kelas_price,
            'kelas_loc'      => $request->kelas_loc,
            'start_date'     => $request->start_date,
            'end_date'       => $request->end_date,
            'syllabus'       => $request->syllabus,
        ]);
        
        return redirect()->route('classSchedule-writer');
    }

    public function destroy($id)
    {
        Kelas::destroy($id);

        return redirect()->route('classSchedule-writer');
    }
}
