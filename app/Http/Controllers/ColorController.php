<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddColorRequest;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function newColor(AddColorRequest $request)
    {
        $newColor = Color::create([
            'name' => $request->name,
            'color_code' => $request->color_code,
        ]);

        if ($newColor) {
            return redirect()->back()->with('success', 'Color Added Successfully');
        }
    }

    public function updateColor(Request $request)
    {
        $color = Color::where('id', $request->id)->first();

        $updateColor = $color->update([
            'name' => $request->name,
            'color_code' => $request->color_code,
        ]);

        if ($updateColor) {
            return redirect()->back()->with('success', 'Color Updated Successfully');
        }
    }

    public function deleteColor($id)
    {
        $banner = Color::where('id', $id)->first();
        $banner->delete();

        return true;
    }

}
