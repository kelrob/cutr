<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddBannerRequest;
use App\Http\Requests\EditBannerRequest;
use App\Models\Banner;

class BannerController extends Controller
{
    public function addBanner(AddBannerRequest $request)
    {

        $banner = $request->banner;
        $bannerName = time() . '.' . $banner->extension();
        $banner->move(public_path("/banner_images"), $bannerName);
        $bannerLink = config('app.url') . "/banner_images/$bannerName";

        $uploadBanner = Banner::create([
            'banner_url' => $bannerLink,
            'banner_heading' => $request->banner_heading,
            'banner_sub_heading' => $request->banner_sub_heading,
            'cta_btn_text' => $request->cta_btn_text,
            'cta_btn_link' => $request->cta_btn_link,
        ]);

        if ($uploadBanner) {
            return redirect()->back()->with('success', 'Banner Uploaded Successfully');
        }
    }

    public function editBanner(EditBannerRequest $request)
    {
        $banner = Banner::where('id', $request->id)->first();

        $updateBanner = $banner->update([
            'banner_heading' => $request->banner_heading,
            'banner_sub_heading' => $request->banner_sub_heading,
            'cta_btn_text' => $request->cta_btn_text,
            'cta_btn_link' => $request->cta_btn_link,
        ]);

        if ($updateBanner) {
            return redirect()->back()->with('success', 'Banner Updated Successfully');
        }
    }

    public function deleteBanner($id)
    {
        $banner = Banner::where('id', $id)->first();
        $banner->delete();

        return true;
    }
}
