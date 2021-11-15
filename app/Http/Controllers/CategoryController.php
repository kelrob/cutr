<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\AddSubCategoryRequest;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function newCategory(AddCategoryRequest $request)
    {
        $image = $request->image;
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path("/category"), $imageName);
        $imageLink = config('app.url') . "/category/$imageName";

        $newCategory = Category::create([
            'name' => $request->name,
            'cover_photo' => $imageLink,
            'slug' => Str::slug($request->slug, '-'),
        ]);

        if ($newCategory) {
            return redirect()->back()->with('success', 'Category Uploaded Successfully');
        }
    }

    public function newSubCategory(AddSubCategoryRequest $request)
    {
        $image = $request->image;
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path("/category"), $imageName);
        $imageLink = config('app.url') . "/category/$imageName";

        $newCategory = SubCategory::create([
            'name' => $request->name,
            'cover_photo' => $imageLink,
            'slug' => Str::slug($request->slug, '-'),
        ]);

        if ($newCategory) {
            return redirect()->back()->with('success', 'Sub Category Uploaded Successfully');
        }
    }
}
