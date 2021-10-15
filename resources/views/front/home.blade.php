@extends('layouts.site')

@section('slider')
    <div id="displayTop" class="displaytopthree">
        <div class="container">
            <div class="row">
                <div class="nov-row  col-lg-12 col-xs-12">
                    <div class="nov-row-wrap row">
                        <div class="nov-html col-xl-3 col-lg-3 col-md-3">
                            <div class="block">
                                <div class="block_content">

                                </div>
                            </div>
                        </div>
                        <div id="nov-slider" class="slider-wrapper theme-default col-xl-9 col-lg-9 col-md-9 col-md-12"
                             data-effect="random" data-slices="15" data-animspeed="500" data-pausetime="10000"
                             data-startslide="0" data-directionnav="false" data-controlnav="true"
                             data-controlnavthumbs="false" data-pauseonhover="true" data-manualadvance="false"
                             data-randomstart="false">
                            <div class="nov_preload">
                                <div class="process-loading active">
                                    <div class="loader">
                                        @isset($sliders)
                                            @foreach($sliders as $slider)
                                                <div class="dot"></div>
                                            @endforeach
                                        @endisset


                                    </div>
                                </div>
                            </div>
                            <div class="nivoSlider">

                                @isset($sliders)
                                    @foreach($sliders as $slider)
                                        <a href="#">
                                            <img src="{{$slider -> photo }}"
                                                 alt="" title="#htmlcaption_42">
                                        </a>
                                    @endforeach
                                @endisset


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
@section('content')

    <div id="main">

        <section id="content" class="page-home pagehome-three">
            <div class="container">
                <div class="row">
                    <div class="nov-row spacing-30 mt-15 col-lg-12 col-xs-12">
                        <div class="nov-row-wrap row">
                            <div class="nov-image col-lg-4 col-md-4">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="effect">
                                            <a href="#"> <img class="img-fluid"
                                                              src="{{asset('assets/images/1.jpg')}}"
                                                              alt="banner3-1" title="banner3-1"></a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nov-image col-lg-4 col-md-4">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="effect">
                                            <a href="#"> <img class="img-fluid"
                                                              src="{{asset('assets/images/2.jpg')}}"
                                                              alt="banner3-1" title="banner3-1"></a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nov-image col-lg-4 col-md-4">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="effect">
                                            <a href="#"> <img class="img-fluid"
                                                              src="{{asset('assets/images/3.jpg')}}"
                                                              alt="banner3-1" title="banner3-1"></a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    </div>
                <br>  <br>
                <h2 class="title_block">
                    All Products
                </h2>
                <div id="categories-product">
                    <div id="js-product-list">
                        <div class="products product_list grid row" data-default-view="grid">

                                @foreach(\App\Models\Product::all()->where('is_active',1) as $product)
                                    <div class="item  col-lg-4 col-md-6 col-xs-12 text-center ">
                                        <div class="product-miniature js-product-miniature item-one"
                                             data-id-product="22" data-id-product-attribute="408" itemscope=""
                                             itemtype="http://schema.org/Product">
                                            <div class="thumbnail-container">
                                                <a href="{{route('product.details',$product -> slug)}}"
                                                   class="thumbnail product-thumbnail two-image">
                                                    <img class="img-fluid image-cover"
                                                         src="{{$product -> images[0] -> photo ?? ''}}"
                                                         alt=""
                                                         data-full-size-image-url="{{$product -> images[0] -> photo ?? ''}}"
                                                         width="600" height="600">
                                                    <img class="img-fluid image-secondary"
                                                         src="{{$product -> images[0] -> photo ?? ''}}"
                                                         alt=""
                                                         data-full-size-image-url="{{$product -> images[0] -> photo ?? ''}}"
                                                         width="600" height="600">
                                                </a>


                                                <div class="product-flags new">New</div>
                                            </div>
                                            <div class="product-description">
                                                <div class="product-groups">

                                                    <div class="category-title"><a
                                                            href="">Audio</a>
                                                    </div>

                                                    <div class="group-reviews">
                                                        <div class="product-comments">
                                                            <div class="star_content">
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                            </div>
                                                            <span>0 review</span>
                                                        </div>


                                                        <div class="info-stock ml-auto">
                                                            <label class="control-label">Availability:</label>
                                                            <i class="fa fa-check-square-o"
                                                               aria-hidden="true"></i>
                                                            {{$product -> in_stock ? 'in stock' : 'out of stock'}}
                                                        </div>
                                                    </div>

                                                    <div class="product-title" itemprop="name"><a
                                                            href="{{route('product.details',$product -> slug)}}">{{$product -> name}}</a></div>

                                                    <div class="product-group-price">
                                                        <div class="product-price-and-shipping">
                                                                    <span itemprop="price"
                                                                          class="price">{{$product -> special_price ?? $product -> price }}</span>
                                                            @if($product -> special_price)
                                                                <span
                                                                    class="regular-price">{{$product -> price}}</span>
                                                            @endif

                                                        </div>
                                                    </div>

                                                    <div class="product-desc" itemprop="desciption">
                                                        {!! $product -> description !!}
                                                    </div>
                                                </div>
                                                <div class="product-buttons d-flex justify-content-center"
                                                     itemprop="offers" itemscope=""
                                                     itemtype="http://schema.org/Offer">
{{--                                                    <form--}}
{{--                                                        action=""--}}
{{--                                                        method="post" class="formAddToCart">--}}
{{--                                                        @csrf--}}
{{--                                                        <input type="hidden" name="id_product"--}}
{{--                                                               value="{{$product -> id}}">--}}
{{--                                                        <a class="add-to-cart cart-addition" data-product-id="{{$product -> id}}" data-product-slug="{{$product -> slug}}" href="#"--}}
{{--                                                           data-button-action="add-to-cart"><i--}}
{{--                                                                class="novicon-cart"></i><span>Add to cart</span></a>--}}
{{--                                                    </form>--}}
                                                    <form id="data_form" method="post"action="/cart" class="formAddToCart">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{$product->id}}"/>
                                                        <input type="hidden" name="Quantity" value="1"/>

                                                        <button  onclick=" return myFunction()" class="add-to-cart cart" type="submit" ><il class="novicon-cart"></il> </button>

{{--                                                        <p><input type="number" id="pin" min="1"style="width: 3em"placeholder="الكمية"name="Quantity"--}}
{{--                                                                  value="1">--}}
{{--                                                            <button type="submit" style="float: right;" ><il class="fa fa-cart-plus"></il> </button></p>--}}
                                                    </form>

                                                    <a class="addToWishlist  wishlistProd_22" href="#"
                                                       data-product-id="{{$product -> id}}"
                                                    >
                                                        <i class="fa fa-heart"></i>
                                                        <span>Add to Wishlist</span>
                                                    </a>
                                                    <a href="#" class="quick-view hidden-sm-down"
                                                       data-product-id="{{$product -> id}}">
                                                        <i class="fa fa-search"></i><span> Quick view</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<br>
                                    @include('front.includes.product-details',$product)
                                @endforeach

                        </div>
                    </div>

                </div>
                    <div class="nov-row policy-home col-lg-12 col-xs-12">
                        <h2 class="title_block">
                            Team Work
                        </h2>
                        <div class="nov-row-wrap row">

                            <div class="nov-html col-xl-3 col-lg-3 col-md-3">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="policy-row"><i class="noviconpolicy noviconpolicy-1"></i>
                                            <div class="policy-content">
                                                <div class="policy-name">Mahmoud Hassouna</div>
                                                <div class="policy-des">full stack developer web
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nov-html col-xl-3 col-lg-3 col-md-3">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="policy-row"><i class="noviconpolicy noviconpolicy-2"></i>
                                            <div class="policy-content">
                                                <div class="policy-name">Mohammed El Faraa</div>
                                                <div class="policy-des">full stack developer web

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nov-html col-xl-3 col-lg-4 col-md-3">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="policy-row"><i class="noviconpolicy noviconpolicy-3"></i>
                                            <div class="policy-content">
                                                <div class="policy-name">Yousef El Zaninn</div>
                                                <div class="policy-des">
                                                    web designer
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nov-html col-xl-3 col-lg-3 col-md-3">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="policy-row"><i class="noviconpolicy noviconpolicy-3"></i>
                                            <div class="policy-content">
                                                <div class="policy-name">Mohammed El Qirman</div>
                                                <div class="policy-des">web designer

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <br><br>
                </div>
            </div>
        </section>


    </div>


@stop
@auth()
<script>
    function myFunction() {
        alert("added success!");
    }
</script>
@endauth
