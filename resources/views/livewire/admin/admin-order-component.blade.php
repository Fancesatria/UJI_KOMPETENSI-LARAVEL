<div>
    <style>
        nav svg{
            height: 20px;
        }

        nav .hidden{
            display: block !important;

        }
    </style>
    <div class="container" style="padding:30px 0">
        
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12">All Orders</div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('order_message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('order_message') }}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Order Id</th>
                                    <th>Name</th>
                                    <th>Subtotal</th>
                                    <th>Discount</th>
                                    <th>Tax</th>
                                    <th>Total</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Zipcode</th>
                                    <th>Status</th>
                                    <th>Order Date</th>
                                    <th colspan="2" class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($orders as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->firstname . ' '. $item->lastname}}</td>
                                        <td>${{$item->subtotal}}</td>
                                        <td>${{$item->discount}}</td>
                                        <td>${{$item->tax}}</td>
                                        <td>${{$item->total}}</td>
                                        <td>{{$item->mobile}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->zipcode}}</td>
                                        <td>{{$item->status}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>
                                            <a href="{{ route('admin.orderdetails',['order_id'=>$item->id]) }}" class="btn btn-info btn-sm">Details</a>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Status
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#" wire:click.prevent="updateStatus({{$item->id}},'delivered')">Delivered</a></li>
                                                    <li><a href="#" wire:click.prevent="updateStatus({{$item->id}},'canceled')">Canceled</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$orders->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
