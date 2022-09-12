<div class="wrap-search center-section">
    <div class="wrap-search-form">
        <form action="{{ route('product.search')}}" id="form-search-top" name="form-search-top">
            <input type="text" name="search" value="{{$search}}" placeholder="Search here...">
            <button form="form-search-top" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            <div class="wrap-list-cate">
                <input type="hidden" name="prodCat" value="{{$prodCat}}" id="product-cate">
                <input type="hidden" name="prodCatId" value="{{$prodCatId}}" id="product-cate-id">
                <a href="#" class="link-control">{{ str_split($prodCat, 12)[0] }}</a>
                <ul class="list-cate">
                    <li class="level-0">All Category</li>
                    @foreach ($categories as $item)
                        <li class="level-1" data-id="{{$item->id}}">{{$item->name}}</li>
                    @endforeach
                </ul>
            </div>
        </form>
    </div>
</div>