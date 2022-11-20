<main id="main" class="main-site">
    <style>
        .summary-item .row-in-form input[type="password"],.summary-item .row-in-form input[type="text"], .summary-item .row-in-form input[type="tel"] {
            font-size: 13px;
            line-height: 19px;
            display: inline-block;
            height: 43px;
            padding: 2px 20px;
            max-width: 300px;
            width: 100%;
            border: 1px solid #e6e6e6;
        }
    </style>

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span>Checkout</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            <form wire:submit.prevent="placeOrder" onsubmit="$('#processing').show();">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wrap-address-billing">
                            <h3 class="box-title">Billing Address</h3>
                            <div class="billing-address">
                                <p class="row-in-form">
                                    <label for="fname">first name<span>*</span></label>
                                    <input id="fname" type="text" name="fname" value="" placeholder="Your name" wire:model="firstname">
                                    @error('firstname')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="lname">last name<span>*</span></label>
                                    <input id="lname" type="text" name="lname" value="" placeholder="Your last name" wire:model="lastname">
                                    @error('lastname')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="email">Email Addreess:</label>
                                    <input id="email" type="email" name="email" value="" placeholder="Type your email" wire:model="email">
                                    @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="phone">Phone number<span>*</span></label>
                                    <input id="phone" type="number" name="phone" value="" placeholder="Phone number" wire:model="mobile">
                                    @error('mobile')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="line1">Line 1:</label>
                                    <input id="line1" type="text" name="line1" value="" placeholder="Street at apartment number" wire:model="line1">
                                    @error('line1')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="line2">Line 2:</label>
                                    <input id="line2" type="text" name="line2" value="" placeholder="Street at apartment number" wire:model="line2">
                                    @error('line2')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="province">Province<span>*</span></label>
                                    <input id="province" type="text" name="province" value="" placeholder="Province" wire:model="province">
                                    @error('province')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="country">Country<span>*</span></label>
                                    <select name="" class="form-control input-md" wire:model="country">
                                        <option value="0">Select Country</option>
                                        @foreach ($co as $c)
                                            <option value="{{$c->distance_km}}">{{ $c->country }}</option>
                                        @endforeach
                                    </select>
                                </p>
                                <p class="row-in-form">
                                    <label for="city">Town / City<span>*</span></label>
                                    <input id="city" type="text" name="city" value="" placeholder="City name" wire:model="city">
                                    @error('city')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="zip-code">Postcode / ZIP:</label>
                                    <input id="zip-code" type="text" name="zip-code" value="" placeholder="Your postal code" wire:model="zipcode">
                                    @error('zipcode')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form fill-wife">
                                    <label class="checkbox-field">
                                        <input name="different-add" id="different-add" value="1" type="checkbox" wire:model="shipDifferentAddress">
                                        <span>Ship to a different address?</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                    </div>

                    @if ($shipDifferentAddress)
                        <div class="col-md-12">
                            <div class="wrap-address-billing">
                                <h3 class="box-title">Shipping Address</h3>
                                <div class="billing-address">
                                    <p class="row-in-form">
                                        <label for="fname">first name<span>*</span></label>
                                        <input id="fname" type="text" name="fname" value="" placeholder="Your name" wire:model="ship_firstname">
                                        @error('ship_firstname')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="lname">last name<span>*</span></label>
                                        <input id="lname" type="text" name="lname" value="" placeholder="Your last name" wire:model="ship_lastname">
                                        @error('ship_lastname')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="email">Email Addreess:</label>
                                        <input id="email" type="email" name="email" value="" placeholder="Type your email" wire:model="ship_email">
                                        @error('ship_email')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="phone">Phone number<span>*</span></label>
                                        <input id="phone" type="number" name="phone" value="" placeholder="10 digits format" wire:model="ship_mobile">
                                        @error('ship_mobile')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="line1">Line 1:</label>
                                        <input id="line1" type="text" name="line1" value="" placeholder="Street at apartment number" wire:model="ship_line1">
                                        @error('ship_line1')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="line2">Line 2:</label>
                                        <input id="line2" type="text" name="line2" value="" placeholder="Street at apartment number" wire:model="ship_line2">
                                        @error('ship_line2')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="province">Province<span>*</span></label>
                                        <input id="province" type="text" name="province" value="" placeholder="Province" wire:model="ship_province">
                                        @error('ship_province')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="country">Country<span>*</span></label>
                                        <select name="" class="form-control input-md" wire:model="ship_country">
                                            <option value="0">Select Country</option>
                                            @foreach ($co as $c)
                                                <option value="{{$c->distance_km}}">{{ $c->country }}</option>
                                            @endforeach
                                        </select>
                                    </p>
                                    <p class="row-in-form">
                                        <label for="city">Town / City<span>*</span></label>
                                        <input id="city" type="text" name="city" value="" placeholder="City name" wire:model="ship_city">
                                        @error('ship_city')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="zip-code">Postcode / ZIP:</label>
                                        <input id="zip-code" type="text" name="zip-code" value="" placeholder="Your postal code" wire:model="ship_zipcode">
                                        @error('ship_zipcode')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                    @endif
                    
                </div>
                
                <div class="summary summary-checkout">
                    <div class="summary-item payment-method">
                        <h4 class="title-box">Payment Method</h4>

                        @if ($payMethod == 'card')
                            <div class="wrap-address-billing">
                                @if (Session::has('stripe_error'))
                                    <div class="alert alert-danger" role="alert">{{Session::get('stripe_error')}}</div>
                                @endif
                                <p class="row-in-form">
                                    <label for="card-no">Card Number</label>
                                    <input id="" type="text" name="card-no" value="" placeholder="Card Number" wire:model="cardNo">
                                    @error('cardNo')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </p>
                                
                                <p class="row-in-form">
                                    <label for="exp-month">Expiry Month</label>
                                    <input id="" type="text" name="exp-month" value="" placeholder="MM" wire:model="expMonth">
                                    @error('expMonth')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </p>

                                <p class="row-in-form">
                                    <label for="exp-year">Expiry Year</label>
                                    <input id="" type="text" name="exp-year" value="" placeholder="YYYY" wire:model="expYear">
                                    @error('expYear')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </p>

                                <p class="row-in-form">
                                    <label for="cvc">CVC</label>
                                    <input id="" type="password" name="cvc" value="" placeholder="CVC" wire:model="cvc">
                                    @error('cvc')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </p>
                            </div>
                        @endif

                        <div class="choose-payment-methods">
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-bank" value="cod" type="radio" wire:model="payMethod">
                                <span>Cash On Delivery</span>
                                <span class="payment-desc">Order now Pay on Delivery</span>
                            </label>
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-visa" value="card" type="radio" wire:model="payMethod">
                                <span>Debit/Credit Card</span>
                                <span class="payment-desc">There are many variations of passages of Lorem Ipsum available</span>
                            </label>
                            {{-- <label class="payment-method">
                                <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio" wire:model="payMethod">
                                <span>Paypal</span>
                                <span class="payment-desc">You can pay with your credit</span>
                                <span class="payment-desc">card if you don't have a paypal account</span>
                            </label> --}}
                            @error('payMethod')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        @if (Session::has('checkout'))
                            <p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">${{Session::get('checkout')['total'] + $shipping_charge}}</span></p>
                        @endif

                        @if ($errors->isEmpty())
                            <div wire:ignore id="processing" style="font-size: 22px; margin-bottom: 20px; padding-left:17px; color:green; display:none">
                                <i class="fa fa-spinner fa-pulse fa-fw"></i>
                                <span>Processing...</span>
                            </div>
                        @endif
                        
                        
                        <button type="submit" class="btn btn-medium">Place order now</button>
                    </div>
                    <div class="summary-item shipping-method">
                        <h4 class="title-box f-title">Shipping Options</h4>
                        <p class="row-in-form">
                            <select name="" class="form-control input-md" wire:model="select_expedition" wire:change="setShippingCharge">
                                <option value="0">Select Shipping Agent</option>
                                @foreach ($expedition as $ex)
                                    <option value="{{$ex->cost_perkm}}">{{ $ex->name }} . . . . ($ {{$ex->cost_perkm}} perKm)</option>
                                @endforeach
                            </select>
                            @if (Session::has('msg'))
                                <p class="text-danger">{{Session::get('msg')}}</p>
                            @endif
                        </p>
                        <p class="summary-info"><span class="title">Shipping Charge :</span></p>
                        @if ($shipping_charge)
                            <p class="summary-info">Fixed <span class="title" style="font-weight: bold">${{$shipping_charge}}</span></p>
                        @else
                            <p class="summary-info">Fixed <span class="title" style="font-weight: bold">$0.00</span></p>
                        @endif
                        
                    </div>
                </div>
            </form>
        </div><!--end main content area-->
    </div><!--end container-->
{{-- @php
    dd($country_l);
@endphp --}}
</main>
