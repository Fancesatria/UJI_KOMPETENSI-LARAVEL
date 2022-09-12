<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Livewire\Component;

class AdminCouponsComponent extends Component
{
    public function delCoupon($coupon_id)
    {
        $Coupon = Coupon::find($coupon_id);
        $Coupon->delete();
        session()->flash('message','Coupon Removed !');
    }
    public function render()
    {
        $coupons = Coupon::all();
        return view('livewire.admin.admin-coupons-component',['coupons'=>$coupons])->layout('layouts.base');
    }
}
