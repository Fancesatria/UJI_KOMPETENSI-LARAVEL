<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">All Sliders</div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.addhomeslider')}}" class="btn btn-success pull-right">Add New Slider</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Subtitle</th>
                                    <th>Price</th>
                                    <th>Link</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($sliders as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td><img src="{{asset('assets/images/sliders')}}/{{$item->image}}" alt="" width="120"></td>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->subtitle}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->link}}</td>
                                        <td>{{$item->status == 1 ? 'Active':'Inactive'}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>
                                            <a href="{{ route('admin.edithomeslider',['slider_id'=>$item->id]) }}">
                                                <i class="fa fa-edit fa-2x"></i>
                                            </a>

                                            <a href="#" onclick="confirm('You want to remove this item ?') || event.stopImediatePropagation()" wire:click.prevent="delSlide({{$item->id}})" style="margin-left: 10px">
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
