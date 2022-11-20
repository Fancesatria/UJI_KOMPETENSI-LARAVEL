<?php

namespace App\Http\Livewire;

use Cart;
use Carbon\Carbon;
use App\Models\Coupon;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CartComponent extends Component
{
    public $haveCouponCode;
    public $removeCoupon;
    public $couponCode;
    public $discount;
    public $subtotalWithDiscount;
    public $taxWithDiscount;
    public $totalWithDiscount;
    

    //QUANTITY ------------------------
    public function increaseQty($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty+1;
        Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-count-component','refreshComponent');
    }

    public function decreaseQty($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty-1;
        Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-count-component','refreshComponent');
    }


    //CART ------------------------
    public function delCart($rowId)
    {
        Cart::instance('cart')->remove($rowId);
        $this->emitTo('cart-count-component','refreshComponent');
        session()->flash('success_message','Item has been removed');
    }

    public function delAll()
    {
        Cart::instance('cart')->destroy();
        $this->emitTo('cart-count-component','refreshComponent');
    }


    //SAVE PRODUCTS ------------------------
    public function saveForLater($rowId)
    {
        $item = Cart::instance('cart')->get($rowId);
        Cart::instance('cart')->remove($rowId);
        Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price)->associate('App\Models\Product');
        $this->emitTo('cart-count-component','refreshComponent');
        session()->flash('success_message','Item has been saved');
    }

    public function moveToCart($rowId){
        $item = Cart::instance('saveForLater')->get($rowId);
        Cart::instance('saveForLater')->remove($rowId);
        Cart::instance('cart')->add($item->id, $item->name, 1, $item->price)->associate('App\Models\Product');
        $this->emitTo('cart-count-component','refreshComponent');
        session()->flash('s_success_message','Item has been moved to cart');
    }

    public function delSaved($rowId)
    {
        Cart::instance('saveForLater')->remove($rowId);
        session()->flash('s_success_message','Item has been removed');
    }

    //COUPON ------------------------
    public function applyCouponCode(){
        $coupon = Coupon::where('code', $this->couponCode)->where('expiry_date','>=',Carbon::today())->where('cart_value', '<=',Cart::instance('cart')->subtotal())->first();
        if (!$coupon) {
            session()->flash('coupon_message','Coupon code is invalid!');
            return;
        }
        session()->put('coupon',[
            'code'=>$coupon->code,
            'type'=>$coupon->type,
            'value'=>$coupon->value,
            'cart_value'=>$coupon->cart_value
        ]);
        // dd($coupon);
    }

    public function calculateDiscount(){
        if (session()->has('coupon')) {
            if(session()->get('coupon')['type'] =='fixed'){
                $this->discount = session()->get('coupon')['value'];
            } else {
                $this->discount = Cart::instance('cart')->subtotal()*session()->get('coupon')['value']/100;
            }
            $this->subtotalWithDiscount = Cart::instance('cart')->subtotal() - $this->discount;
            //config taxnya diambil dr folder config trs masuk file cart
            $this->taxWithDiscount = ($this->subtotalWithDiscount*config('cart.tax')/100);
            $this->totalWithDiscount = $this->subtotalWithDiscount+$this->taxWithDiscount;
        }
    }

    public function removeCoupon(){
        session()->forget('coupon');
    }


    //CHECKOUT ------------------------
    public function checkOut()
    {
        if (Auth::check()) {
            return redirect()->route('checkout');
        } else {
            return redirect()->route('login');
        }
    }

    public function setAmountForCheckout(){
        if (!Cart::instance('cart')->count() > 0 ) {
            session()->forget('checkout');
            return;
        }
        if (session()->has('coupon')) {
            session()->put('checkout',[
                'discount'=>$this->discount,
                'subtotal'=>$this->subtotalWithDiscount,
                'tax'=>$this->taxWithDiscount,
                'total'=>$this->totalWithDiscount
            ]);
        } else {
            session()->put('checkout',[
                'discount'=>0,
                'subtotal'=>Cart::instance('cart')->subtotal(),
                'tax'=>Cart::instance('cart')->tax(),
                'total'=>Cart::instance('cart')->total()
            ]);
        }
    }

    //ongkir berdasarkan persenan
    public function shippingCost(){
        //hilangin dulu komanya krn sistem nganggap koma itu satuan bukan ribuan, 
        //trs diconvert ke float
        return (float) str_replace(',', '', Cart::instance('cart')->subtotal());
    }

    //buat total after shipping cost
    public function totalCost(){
        //hilangin dulu komanya krn sistem nganggap koma itu satuan bukan ribuan, 
        //trs diconvert ke float
        return (float) str_replace(',', '', Cart::instance('cart')->total());
    }
    
    
    public function render()
    {
        //ini nnti dipanggil ke view 
        $shippingCharge = $this->shippingCost() * 5 / 100;
        $totalCharge = $this->totalCost() + $shippingCharge;
        //COUPON 
        if (session()->has('coupon')) {
            if (Cart::instance('cart')->subtotal() < session()->get('coupon')['cart_value']) {
                session()->forget('coupon');
            } else {
                $this->calculateDiscount();
            }
        }

        //CHECKOUT
        $this->setAmountForCheckout();

        if (Auth::check()) {
            Cart::instance('cart')->store(Auth::user()->email);
            Cart::instance('saveForLater')->store(Auth::user()->email);
        }
        
        $latest_products = Product::orderBy('created_at','DESC')->limit(5)->get();
        return view('livewire.cart-component',['latest_products'=>$latest_products])->layout('layouts.base');
    }
}
