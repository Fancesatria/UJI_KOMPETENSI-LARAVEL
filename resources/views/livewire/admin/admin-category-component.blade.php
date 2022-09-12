<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }

        .sclist{
            list-style: none
        }

        .sclist li{
            line-height: 33px;
            border-bottom: 1px solid #ccc;
        }

        .slink i{
            font-size: 16px;
            margin-left: 12px;
        }
    </style>
    <div class="container" style="padding:30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">All Categories</div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.addcategory') }}" class="btn btn-success pull-right">Add New</a>
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
                                    <th>Category Name</th>
                                    <th>Slug</th>
                                    <th>Sub Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($categories as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->slug}}</td>
                                        <td>
                                            <ul class="sclist">
                                                @foreach ($item->subCategories as $scategory)
                                                    <li><li class="fa fa-caret-right"></li> {{$scategory->name}} 
                                                        <a href="{{ route('admin.editcategory',['category_slug'=>$item->slug,'scategory_slug'=>$scategory->slug])}}" class="slink"> <i class="fa fa-edit"></i></a>
                                                        <a href="#" class="slink" wire:click.prevent="delSubcategory({{$scategory->id}})" onclick="confirm('You want to remove this item ?') || event.stopImediatePropagation()"> 
                                                            <i class="fa fa-times fa-2x text-danger"></i></a>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.editcategory',['category_slug'=>$item->slug]) }}">
                                                <i class="fa fa-edit fa-2x"></i>
                                            </a>

                                            <a href="#" onclick="confirm('You want to remove this item ?') || event.stopImediatePropagation()" wire:click.prevent="delCategory({{$item->id}})" style="margin-left: 10px">
                                                <i class="fa fa-times fa-2x text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
