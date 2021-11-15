<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddTestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function addTestimonial(AddTestimonialRequest $request)
    {
        $newTestimonial = Testimonial::create([
            'customer_name' => $request->customer_name,
            'testimonial' => $request->testimonial,
        ]);

        if ($newTestimonial) {
            return redirect()->back()->with('success', 'Testimonial Uploaded Successfully');
        }
    }

    public function updateTestimonial(Request $request)
    {
        $testimonial = Testimonial::where('id', $request->id)->first();

        $updateTestimonial = $testimonial->update([
            'customer_name' => $request->customer_name,
            'testimonial' => $request->testimonial,
        ]);

        if ($updateTestimonial) {
            return redirect()->back()->with('success', 'Testimonial Updated Successfully');
        }
    }

    public function deleteTestimonial($id)
    {
        $testimonial = Testimonial::where('id', $id)->first();
        $testimonial->delete();

        return true;
    }
}
