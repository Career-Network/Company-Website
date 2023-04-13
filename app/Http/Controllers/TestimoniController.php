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
            'class_name' => 'required',
            'testimonial' => 'required',
            'participant_pic' => 'image|mimes:webp,png,jpg|max:5000',
            // 'participant_prof' => 'required',
        ]);

        if ($validation->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validation);
        }

        Testimony::create([
            'participant_name' => $request->participant_name,
            'class_name' => $request->class_name,
            'testimonial' => $request->testimonial,
            'participant_pic' => $request->file('participant_pic') == null ? 'null' : $request->file('participant_pic')->store('public/testimoni'),
            'kelas_id' => $request->kelas_id,
            'featured_landing_page' => $request->featured_landing_page == null ? '0' : $request->featured_landing_page,
            'featured_class_page' => $request->featured_class_page == null ? '0' : $request->featured_class_page,
            'participant_prof' => 'testing data',
        ]);

        return redirect()->route('testimoni-writer')->with(['success' => 'success message']);
    }

    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(), [
            'participant_name' => 'required',
            'class_name' => 'required',
            'testimonial' => 'required',
            'participant_pic' => 'image|mimes:webp,png,jpg|max:5000',
            // 'participant_prof' => 'required',
        ]);

        if ($validation->fails()) {
            toast('Your testimoni does not uploaded!','error');
            return redirect()
                ->back()
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
            'participant_name' => $request->participant_name,
            'class_name' => $request->class_name,
            'testimonial' => $request->testimonial,
            'participant_pic' => $image,
            'featured_landing_page' => $request->featured_landing_page == null ? '0' : $request->featured_landing_page,
            'featured_class_page' => $request->featured_class_page == null ? '0' : $request->featured_class_page,
            'participant_prof' => 'testing data',
        ]);

        return redirect()->route('testimoni-writer');
    }

    public function destroy($id)
    {
        $testimoni = Testimony::find($id);

        Storage::delete($testimoni->participant_pic);
        $testimoni->delete();

        return redirect()->route('testimoni-writer');
    }
}
