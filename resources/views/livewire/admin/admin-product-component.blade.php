<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-4">
                                All Products
                            </div>
    
                            <div class="col-md-4">
                                <a href="{{ route('admin.addproducts') }}" class="btn btn-success pull-right">Add New</a>
                            </div>

                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Search..." wire:model="searchTerm">
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message')}}
                            </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Stock</th>
                                    <th>Regular Price</th>
                                    <th>Sale Price</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($products as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td><img src="{{ asset('assets/images/products')}}/{{$item->image}}" alt="" width="60"></td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->stock_status}}</td>
                                    <td>${{$item->regular_price}}</td>
                                    <td>${{$item->sale_price}}</td>
                                    <td>{{$item->category->name}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>
                                        <a href="{{ route('admin.editproducts',['product_slug'=>$item->slug]) }}">
                                            <li class="fa fa-edit fa-2x"></li>
                                        </a>

                                        <a href="#" onclick="confirm('You want to remove this item ?') || event.stopImediatePropagation()" wire:click.prevent="delProduct({{ $item->id }})" style="margin-left: 10px" >
                                            <li class="fa fa-times fa-2x text-danger"></li>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$products->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
