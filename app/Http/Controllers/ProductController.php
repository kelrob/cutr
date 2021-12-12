<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductRequest;
use App\Http\Requests\EditProductRequest;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function addProduct(AddProductRequest $request)
    {

        $count = 0;
        $productImages = $request->file;

        $colors = json_encode($request->color);

        $saveProduct = Product::create([
            'admin_id' => Auth::user()->id,
            'name' => $request->name,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'description' => $request->description,
            'amount' => $request->amount,
            'color' => $colors,
            'type' => $request->type,
            'goods_in_stock' => $request->goods_in_stock,
        ]);

        foreach ($productImages as $image) {
            $imageName = time() . $count . '.' . $image->extension();
            $image->move(public_path("/product_images"), $imageName);
            $imageLink = env('APP_URL') . "/product_images/$imageName";

            ProductImage::create([
                'product_id' => $saveProduct->id,
                'product_images' => $imageLink,
            ]);

            $count++;
        }

        return redirect()->back()->with('success', 'Product Created Successfully');

    }

    public function editProduct(EditProductRequest $request)
    {
        $colors = json_encode($request->color);
        $product = Product::where('id', $request->id)->first();

        $product->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'amount' => $request->amount,
            'color' => $colors,
            'type' => $request->type,
            'goods_in_stock' => $request->goods_in_stock,
        ]);

        return redirect()->back()->with('success', 'Product Updated Successfully');
    }

    public function deleteProduct($id)
    {
        $productImages = ProductImage::where('product_id', $id)->get();

        // Delete Images
        foreach ($productImages as $image) {
            $image->delete();
        }

        // Delete product
        $banner = Product::where('id', $id)->first();
        $banner->delete();

        return true;
    }
}
