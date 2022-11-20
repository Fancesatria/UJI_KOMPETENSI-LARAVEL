	<main id="main">
		<div class="container">

			<!--MAIN SLIDE-->
			<div class="wrap-main-slide">
				<div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
					@foreach ($sliders as $item)
					<div class="item-slide">
						<img src="{{ asset('assets/images/sliders') }}/{{$item->image}}" alt="" class="img-slide">
						<div class="slide-info slide-1">
							<h2 class="f-title" style="text-align: left; "><b>{{ $item->title }}</b></h2>
							<span class="subtitle" style="color: white">{{ $item->subtitle }}</span>
							<p class="sale-info" style="color: white">Starts from: <span class="price" style="color: white">${{$item->price}}</span></p>
							<a href="{{ $item->link}}" class="btn-link">Shop Now</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>

			<!--BANNER-->
			<div class="wrap-banner style-twin-default">
				<div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="{{ asset('assets/images/rsz_s1x.jpg') }}" alt="" width="580" height="200"></figure>
					</a>
				</div>
				<div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="{{ asset('assets/images/s2.jpg') }}" alt="" width="580" height="200"></figure>
					</a>
				</div>
			</div>

			<!--On Sale-->
			@if ($saleProduct->count() > 0 && $dateValidation)
			<div class="wrap-show-advance-info-box style-1 has-countdown">
				<h3 class="title-box">On Sale</h3>
				<div class="wrap-countdown mercado-countdown" data-expire="{{ Carbon\Carbon::parse($saleDate->sale_date)->format('Y/m/d h:m:s') }}"></div>
				<div class="wrap-products slide-carousel owl-carousel  " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

					@foreach ($saleProduct as $item)
					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="{{ route('product.details', ['slug'=>$item->slug])}}" title="{{$item->name}}">
								<figure><img src="{{ asset('assets/images/products/'.$item->image) }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
						</div>
						<div class="product-info">
							<a href="{{ route('product.details', ['slug'=>$item->slug])}}" class="product-name"><span>{{ $item->name}}</span></a>
							<div class="wrap-price"><ins><p class="product-price">${{$item->sale_price}}</p></ins> <del><p class="product-price">${{$item->regular_price}}</p></del></div>
						</div>
					</div>
					@endforeach

				</div>
			</div>
			@endif

			<!--Latest Products-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Latest Products</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="{{ asset('assets/images/bannerku3.jpg') }}" width="1170" height="240" alt=""></figure>
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-contents">
							<div class="tab-content-item active" id="digital_1a">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

									@foreach ($lproducts as $item)
									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="{{ route('product.details',['slug'=>$item->slug]) }}" title="{{ $item->name }}">
												<figure><img src="{{ asset('assets/images/products') }}/{{$item->image}}" width="800" height="800" alt="{{ $item->name }}"></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="{{ route('product.details',['slug'=>$item->slug])  }}" class="product-name"><span>{{ $item->name }}</span></a>
											<div class="wrap-price"><span class="product-price">${{ $item->regular_price }}</span></div>
										</div>
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Product Categories-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Product Categories</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="{{ asset('assets/images/bannerku4.jpg') }}" width="1170" height="240" alt=""></figure>
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-control">
							@foreach ($categories as $key=>$category)
								<a href="#category_{{$category->id}}" class="tab-control-item $key {{ $key == 0 ? 'active':''}}">{{ $category->name }}</a>
							@endforeach
						</div>
						<div class="tab-contents">
							@foreach ($categories as $key=>$category)
							<div class="tab-content-item {{ $key == 0 ? 'active':'' }}" id="category_{{$category->id}}">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

									@php
										$c_product = DB::table('products')->where('category_id',$category->id)->get()->take($productNumber);
									@endphp
									@foreach ($c_product as $item)
										<div class="product product-style-2 equal-elem ">
											<div class="product-thumnail">
												<a href="{{ route('product.details', ['slug'=>$item->slug]) }}" title="{{ $item->name }}">
													<figure><img src="{{ asset('assets/images/products') }}/{{$item->image}}" width="800" height="800" alt="{{ $item->name }}"></figure>
												</a>
												<div class="group-flash">
													<span class="flash-item new-label">new</span>
												</div>
												<div class="wrap-btn">
													<a href="#" class="function-link">quick view</a>
												</div>
											</div>
											<div class="product-info">
												<a href="{{ route('product.details', ['slug'=>$item->slug]) }}" class="product-name"><span>{{ $item->name }}</span></a>
												<div class="wrap-price"><span class="product-price">${{ $item->regular_price }}</span></div>
											</div>
										</div>
									@endforeach

								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>

            <div class="wa-chat">
                <a href=" https://wa.me/6289617320859?text=Hello,%20I%20have%20some%20questions" target="_blank">
                    <img src="{{ asset('assets/images/wa.png')}}" alt="whatsapp logo" width="60px" height="60px">
                </a>
            </div>
		</div>

	</main>
