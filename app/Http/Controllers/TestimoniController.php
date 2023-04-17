<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Testimony;
use Illuminate\Support\Facades\Storage;
use Exception;

class TestimoniController extends Controller
{
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'participant_name' => 'required',
            'kelas_id'         => 'required',
            'testimonial'      => 'required',
            'participant_pic'  => 'required|image|mimes:webp|max:5000',
            'participant_prof' => 'required',
        ]);

        if ($validation->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validation);
        }

        Testimony::create([
            'participant_name'      => $request->participant_name,
            'kelas_id'              => $request->kelas_id,
            'testimonial'           => $request->testimonial,
            'participant_pic'       => $request->file('participant_pic')->store('public/testimoni'),
            'kelas_id'              => $request->kelas_id,
            'featured_landing_page' => $request->featured_landing_page == null ? '0' : $request->featured_landing_page,
            'featured_class_page'   => $request->featured_class_page == null ? '0' : $request->featured_class_page,
            'participant_prof'      => $request->participant_prof,
        ]);

        return redirect()->route('testimoni-writer')->with(['success' => 'Testimoni berhasil ditambah']);
    }

    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(), [
            'participant_name' => 'required',
            'kelas_id'         => 'required',
            'testimonial'      => 'required',
            'participant_pic'  => 'image|mimes:webp|max:5000',
            'participant_prof' => 'required',
        ]);

        if ($validation->fails()) {
            return redirect()
                ->back()
                ->with('update', 'item-edit'.$id)
                ->withInput()
                ->withErrors($validation);
        }

        $testimoni = Testimony::where('id', '=', (int) $id)->first();
        if ($request->file('participant_pic')) {
            $image = $request->file('participant_pic')->store('public/testimoni');
            Storage::delete($testimoni->participant_pic);

        } else {
            $image = $testimoni->participant_pic;
        }

        $testimoni->update([
            'participant_name'      => $request->participant_name,
            'kelas_id'              => $request->kelas_id,
            'testimonial'           => $request->testimonial,
            'participant_pic'       => $image,
            'featured_landing_page' => $request->featured_landing_page == null ? '0' : $request->featured_landing_page,
            'featured_class_page'   => $request->featured_class_page == null ? '0' : $request->featured_class_page,
            'participant_prof'      => $request->participant_prof,
        ]);

        return redirect()->route('testimoni-writer')->with(['success' => 'Testimoni berhasil diubah']);
    }

    public function destroy($id)
    {
        $testimoni = Testimony::find($id);

        Storage::delete($testimoni->participant_pic);
        $testimoni->delete();

        return redirect()->route('testimoni-writer')->with(['success' => 'Testimoni berhasil dihapus']);
    }
}
