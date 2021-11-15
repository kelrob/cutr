<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCouponRequest;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function newCoupon(AddCouponRequest $request)
    {
        $newCoupon = Coupon::create([
            'code' => $request->code,
            'percentage_off' => $request->percentage_off,
            'is_active' => $request->is_active == 'active' ? true : false,
        ]);

        if ($newCoupon) {
            return redirect()->back()->with('success', 'Coupon Uploaded Successfully');
        }
    }

    public function updateCoupon(Request $request)
    {
        $coupon = Coupon::where('id', $request->id)->first();

        $updateCoupon = $coupon->update([
            'code' => $request->code,
            'percentage_off' => $request->percentage_off,
            'is_active' => $request->is_active == 'active' ? true : false,
        ]);

        if ($updateCoupon) {
            return redirect()->back()->with('success', 'Coupon Uploaded Successfully');
        }
    }

    public function deleteCoupon($id)
    {
        $coupon = Coupon::where('id', $id)->first();
        $coupon->delete();

        return true;
    }
}
