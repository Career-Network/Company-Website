<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Mentor;
use Illuminate\Support\Facades\Storage;
use Exception;

class MentorController extends Controller
{
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'mentor_name' => 'required',
            'current_job' => 'required',
            'expertise' => 'required',
            'mentor_about' => 'required',
            'mentor_pic' => 'image|mimes:webp,png,jpg|max:5000',
        ]);

        if ($validation->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validation);
        }

        $testData = Mentor::create([
            'mentor_name' => $request->mentor_name,
            'current_job' => $request->current_job,
            'expertise' => $request->expertise,
            'mentor_about' => $request->mentor_about,
            'mentor_pic' => $request->file('mentor_pic') == null ? 'null' : $request->file('mentor_pic')->store('public/mentor'),
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()->route('detail-mentor');
    }

    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(), [
            'mentor_name' => 'required',
            'current_job' => 'required',
            'expertise' => 'required',
            'mentor_about' => 'required',
            'mentor_pic' => 'image|mimes:webp,png,jpg|max:5000',
        ]);

        if ($validation->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validation);
        }

        $mentor = Mentor::where('id', '=', (int) $id)->first();
        if ($request->file('mentor_pic')) {
            $image = $request->file('mentor_pic')->store('public/mentor');
            Storage::delete($mentor->mentor_pic);

        } else {
            $image = $mentor->mentor_pic;
        }

        $mentor->update([
            'mentor_name' => $request->mentor_name,
            'current_job' => $request->current_job,
            'expertise' => $request->expertise,
            'mentor_about' => $request->mentor_about,
            'mentor_pic' => $image,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()->route('detail-mentor');
    }

    public function destroy($id)
    {
        $mentor = Mentor::find($id);

        Storage::delete($mentor->mentor_pic);
        $mentor->delete();

        return redirect()->route('detail-mentor');
    }
}
