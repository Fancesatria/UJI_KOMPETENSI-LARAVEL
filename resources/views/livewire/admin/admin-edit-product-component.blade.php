<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Edit Poduct
                            </div>
        
                            <div class="col-md-6">
                                <a href="{{ route('admin.products') }}" class="btn btn-success pull-right">All Products</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="editProduct">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Product Name</label>

                                <div class="col-md-4">
                                    <input type="text" value="" placeholder="Product Name" class="form-control input-md" wire:model="name" wire:keyup="generateslug" />
                                    @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Product Slug</label>

                                <div class="col-md-4">
                                    <input type="text" value="" placeholder="Product Slug" class="form-control input-md" wire:model="slug" />
                                    @error('slug')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Short Description</label>

                                <div class="col-md-4" wire:ignore>
                                    <textarea type="text" id="short_desc" placeholder="Short Description" class="form-control input-md"  wire:model="short_desc"></textarea>
                                    @error('short_desc')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Description</label>

                                <div class="col-md-4" wire:ignore>
                                    <textarea type="text" id="description" placeholder="Description" class="form-control input-md" wire:model="description"></textarea>
                                    @error('description')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Regular Price</label>

                                <div class="col-md-4">
                                    <input type="text" value="" placeholder="Regular Price" class="form-control input-md" wire:model="regular_price">
                                    @error('regular_price')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Sale Price</label>

                                <div class="col-md-4">
                                    <input type="text" value="" placeholder="Sale Price" class="form-control input-md" wire:model="sale_price">
                                    @error('sale_price')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">SKU</label>

                                <div class="col-md-4">
                                    <input type="text" value="" placeholder="SKU" class="form-control input-md" wire:model="SKU">
                                    @error('SKU')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Stock Status</label>

                                <div class="col-md-4">
                                    <select name="" class="form-control" wire:model="stock_status">
                                        <option value="instock">Instock</option>
                                        <option value="outofstock">Out Of Stock</option>
                                    </select>
                                    @error('stock_status')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Featured</label>

                                <div class="col-md-4">
                                    <select name="" class="form-control" wire:model="featured">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Quantity</label>

                                <div class="col-md-4">
                                    <input type="number" value="" placeholder="Quantity" class="form-control input-md" wire:model="quantity">
                                    @error('quantity')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Product Image</label>

                                <div class="col-md-4">
                                    <input type="file" value="" class="input-file" wire:model="newimage">
                                    @if ($newimage)
                                        <img src="{{$newimage->temporaryUrl() }}" width="120"/>
                                    @else 
                                        <img src="{{ asset('assets/images/products') }}/{{ $image }}" width="120"/>
                                    @endif
                                    @error('image')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Product Gallery</label>

                                <div class="col-md-4">
                                    <input type="file" value="" class="input-file" wire:model="newImages" multiple>
                                    @if ($newImages)
                                        @foreach ($newImages as $item)
                                            @if ($item)
                                                <img src="{{$item->temporaryUrl() }}" width="120"/>
                                            @endif
                                        @endforeach
                                    @else 
                                        @foreach ($images as $item)
                                            @if ($item)
                                                <img src="{{$item->temporaryUrl() }}" width="120"/>
                                            @endif
                                        @endforeach
                                    @endif

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Category</label>

                                <div class="col-md-4">
                                    <select name="" class="form-control" wire:model="category_id" wire:change="changeSubcategory">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $item)
                                            <option value="{{$item->id}}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Product Attribute</label>
                                <div class="col-md-3">
                                    <select name="" id="" class="form-control input-md" wire:model="attribute">
                                        <option value="">Select Attribute</option>
                                        @foreach ($attributes as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-1">
                                    <button type="button" class="btn btn-info" wire:click.prevent="addAttribute">Add</button>
                                </div>
                            </div>

                            {{-- kalau kita nambah attribute maka program ini akan berjalan(munculin inputan) --}}
                            @foreach ($inputs as $key=>$value)
                                <div class="form-group">
                                    <label for="" class="col-md-4 control-label">{{ $attributes->where('id',$attribute_array[$key])->first()->name }}</label>

                                    <div class="col-md-3">
                                        <input type="text" value="" placeholder="{{ $attributes->where('id',$attribute_array[$key])->first()->name }}" class="form-control input-md" wire:model="attribute_values.{{$value}}">
                                    </div>

                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-danger btn-sm" wire:click.prevent="delAttribute({{$key}})"><i class="fa fa-times"></i></button>

                                    </div>

                                    @if ($errors->isEmpty())
                                        <div wire:ignore id="processing" style="font-size: 22px; margin-bottom: 20px; padding-left:17px; color:green; display:none">
                                            <i class="fa fa-spinner fa-pulse fa-fw"></i>
                                            <span>Loading...</span>
                                        </div>
                                    @endif

                                </div>
                            @endforeach

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary ">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(function(){
            // for short desc textarea
            tinymce.init({
                selector:'#short_desc',
                setup:function(editor){
                    editor.on('Change', function(e){
                        tinyMCE.triggerSave();
                        var sd_data = $('#short_desc').val(); //variabel ini sbg konduktor
                        @this.set('short_desc', sd_data);
                    });
                }
            });
            // for description textarea
            tinymce.init({
                selector:'#description',
                setup:function(editor){
                    editor.on('Change', function(e){
                        tinyMCE.triggerSave();
                        var d_data = $('#description').val();
                        @this.set('description', d_data);
                    });
                }
            });
        });
    </script>
@endpush