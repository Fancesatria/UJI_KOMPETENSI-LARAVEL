<div>
    <div class="container" style="padding:30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">All Coupons</div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.addcoupons') }}" class="btn btn-success pull-right">Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Coupon Code</th>
                                    <th>Coupon Type</th>
                                    <th>Coupon Value</th>
                                    <th>Cart Value</th>
                                    <th>Expiry Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($coupons as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->code}}</td>
                                        <td>{{$item->type}}</td>
                                        @if ($item->type == 'fixed')
                                        <td>${{$item->value}}</td>
                                        @else
                                        <td>${{$item->value}} %</td>
                                        @endif
                                        
                                        <td>{{$item->cart_value}}</td>
                                        <td>{{$item->expiry_date}}</td>
                                        <td>
                                            <a href="{{ route('admin.editcoupons',['coupon_id'=>$item->id]) }}">
                                                <i class="fa fa-edit fa-2x"></i>
                                            </a>

                                            <a href="#" onclick="confirm('You want to remove this item ?') || event.stopImediatePropagation()" wire:click.prevent="delCoupon({{$item->id}})" style="margin-left: 10px">
                                                <i class="fa fa-times fa-2x text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
