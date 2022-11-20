
<div class="invoice-body">
    <div class="">
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="invoice-container">
                            <div class="invoice-header">
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="custom-actions-btns mb-5">
                                            {{-- <a href="#" class="btn btn-primary">
                                                <i class="icon-download"></i> Download
                                            </a>
                                            <a href="#" class="btn btn-secondary">
                                                <i class="icon-printer"></i> Print
                                            </a> --}}
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <a href="index.html" class="invoice-logo">
                                            Adventure Store
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <address class="text-right">
                                            Adventure Store.
                                            info@adventurestore.com.<br>
                                            0987654321.<br>
                                            1234567890.<br>
                                            0987654321.<br>
                                        </address>
                                    </div>
                                </div>
                                <!-- Row end -->
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                        <div class="invoice-details">
                                            <address>
                                                {{$order->firstname}} {{$order->lastname}}<br>
                                                {{$order->line1}}, {{$order->city}}, {{$order->province}}, {{$order->country}}
                                            </address>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="invoice-details">
                                            <div class="invoice-num">
                                                <div>Invoice - #00{{ $order->id}}</div>
                                                <div>{{$order->created_at}}</div>
                                            </div>
                                        </div>													
                                    </div>
                                </div>
                                <!-- Row end -->
                            </div>
                            <div class="invoice-body">
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table custom-table m-0">
                                                <thead>
                                                    <tr>
                                                        <th>Items</th>
                                                        <th>Product Name</th>
                                                        <th>Product ID</th>
                                                        <th>Quantity</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($order->orderItems as $item)
                                                        <tr >
                                                            <td style="text-align: center"><img src="{{ asset('assets/images/products')}}/{{$item->product->image}}" alt="{{$item->product->name}}" width="100"></td>
                                                            <td>
                                                                {{$item->product->name}}.<br>
                                                                {{$item->product->short_description}}
                                                            </td>
                                                            <td style="text-align: center">{{$item->product->SKU}}</td>
                                                            <td style="text-align: center">{{$item->quantity}}</td>
                                                            
                                                        </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td colspan="2">
                                                            <p>
                                                                Shipping Agent<br>
                                                                Subtotal<br>
                                                                Shipping<br>
                                                                Discount<br>
                                                                Tax<br>
                                                            </p>
                                                            <h5 class="text-success"><strong>Grand Total</strong></h5>
                                                        </td>			
                                                        <td>
                                                            <p>
                                                                {{$order->shipping_agent}}<br>
                                                                ${{$order->subtotal}}<br>
                                                                ${{$order->shipping_charge}}<br>
                                                                ${{$order->discount}}<br>
                                                                ${{$order->tax}}<br>
                                                            </p>
                                                            <h5 class="text-success"><strong>${{$order->total}}</strong></h5>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->
                            </div>
                            <div class="invoice-footer">
                                Thank you for your Business.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>