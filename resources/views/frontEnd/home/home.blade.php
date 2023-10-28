@extends('frontEnd.master')
@section('title')
 Home | | page
@endsection
@section('content')
     <!-- Header Area End Here -->
            <!-- Begin Slider With Category Menu Area -->
            <div class="slider-with-banner">
                <div class="container">
                    <div class="row">
                        <!-- Begin Category Menu Area -->
                        <div class="col-lg-3">
                            <!--Category Menu Start-->
                            <div class="category-menu category-menu-2">
                                <div class="category-heading">
                                    <h2 class="categories-toggle"><span>categories</span></h2>
                                </div>
                                <div id="category-menu-list" class="category-menu-list">
                                    <ul>
                                        @foreach ($categories as $category)
                                        <li class="right-menu"><a href="{{route('category.products',$category->id)}}">{{$category->name}}</a>
                                            @if (count($category->subCategory) > 0)
                                           
                                            <ul class="cat-mega-menu">
                                                <li class="right-menu">
                                                   <ul>
                                                    @foreach ($category->subCategory as $subCategory)
                                                          <li><a href="{{route('category.products',$subCategory->id)}}">{{$subCategory->name}}</a></li>
                                                    @endforeach
                                                        
                                                   </ul>
                                                 </li>
                                            </ul>
                                            @endif
                                        </li>
                                          @endforeach
                                        <li class="rx-parent">
                                            <a class="rx-default">More Categories</a>
                                            <a class="rx-show">Less Categories</a>
                                        </li>
                                    </ul>
                                 </div>
                            </div>
                            <!--Category Menu End-->
                        </div>
                        <!-- Category Menu Area End Here -->
                        <!-- Begin Slider Area -->
                        <div class="col-lg-6 col-md-8">
                            <div class="slider-area slider-area-3 pt-sm-30 pt-xs-30 pb-xs-30">
                                <div class="slider-active owl-carousel">
                                    <!-- Begin Single Slide Area -->
                                    <div class="single-slide align-center-left animation-style-01 bg-7">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5>Sale Offer <span>-20% Off</span> This Week</h5>
                                            <h2>Chamcham Galaxy S9 | S9+</h2>
                                            <h3>Starting at <span>$589.00</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="{{route('products')}}">Shopping Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                    <!-- Begin Single Slide Area -->
                                    <div class="single-slide align-center-left animation-style-02 bg-8">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5>Sale Offer <span>Black Friday</span> This Week</h5>
                                            <h2>Work Desk Surface Studio 2018</h2>
                                            <h3>Starting at <span>$1599.00</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                    <!-- Begin Single Slide Area -->
                                    <div class="single-slide align-center-left animation-style-01 bg-9">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5>Sale Offer <span>-10% Off</span> This Week</h5>
                                            <h2>Phantom 4 Pro+ Obsidian</h2>
                                            <h3>Starting at <span>$809.00</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- Slider Area End Here -->
                        <!-- Begin Li Banner Area -->
                        <div class="col-lg-3 col-md-4 text-center pt-sm-30">
                            <div class="li-banner">
                                <a href="#">
                                    <img src="{{asset('frontend/assets')}}/images/banner/3_1.jpg" alt="">
                                </a>
                            </div>
                            <div class="li-banner mt-15 mt-sm-30 mt-xs-25 mb-xs-5">
                                <a href="#">
                                    <img src="{{asset('frontend/assets')}}/images/banner/3_2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- Li Banner Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Slider With Category Menu Area End Here -->
            <!-- Begin Li's Static Banner Area -->
            <div class="li-static-banner pt-20 pt-sm-30">
                <div class="container">
                    <div class="row">
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-4 col-md-4 text-center">
                            <div class="single-banner pb-xs-30">
                                <a href="#">
                                    <img src="{{asset('frontend/assets')}}/images/banner/1_3.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-4 col-md-4 text-center">
                            <div class="single-banner pb-xs-30">
                                <a href="#">
                                    <img src="{{asset('frontend/assets')}}/images/banner/1_4.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-4 col-md-4 text-center">
                            <div class="single-banner">
                                <a href="#">
                                    <img src="{{asset('frontend/assets')}}/images/banner/1_5.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Li's Static Banner Area End Here -->
            <!-- Begin Li's Special Product Area -->
            <section class="product-area li-laptop-product Special-product pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Hot Deals Products</span>
                                </h2>
                            </div>
                            <div class="row">
                                <div class="special-product-active owl-carousel">
                                 @foreach ($hot_deals_products as $hot_deals_product)
                                   <div class="col-lg-12 ">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap ">
                                            <div class="product-image">
                                                <a href="{{route('product.details',$hot_deals_product->id)}}" target="_blank">
                                                    <img src="{{asset($hot_deals_product->image)}}" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Studio Design</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a class="product_name" href="{{route('product.details',$hot_deals_product->id)}}" target="_blank"><h5>{{$hot_deals_product->name}}</h5></a>
                                                    <div class="price-box">
                                                        <span class="new-price new-price-2">TK.{{number_format($hot_deals_product->selling_price)}}</span>
                                                        <span class="old-price">TK.{{number_format($hot_deals_product->regular_price)}}</span>
                                                        @php($off = (($hot_deals_product->regular_price - $hot_deals_product->selling_price)/$hot_deals_product->regular_price) * 100)
                                                        <span class="discount-percentage">-{{ceil($off)}}%</span>
                                                    </div>
                                                    <div class="countersection">
                                                        <div class="li-countdown"></div>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Special Product Area End Here -->
            <!-- Begin Featured Product With Banner Area -->
            <div class="featured-pro-with-banner mt-sm-5 pb-sm-10 mt-xs-5 pb-xs-10">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Featured Banner Area -->
                        <div class="col-lg-3 text-center">
                            <div class="single-banner featured-banner">
                                <a href="#">
                                    <img src="{{asset('frontend/assets')}}/images/banner/featured-banner.jpg" alt="Li's Featured Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Li's Featured Banner Area End Here -->
                        <!-- Begin Featured Product Area -->
                        <div class="col-lg-9">
                            <div class="featured-product pt-sm-30 pt-xs-30">
                                <div class="li-section-title">
                                    <h2>
                                        <span>Featured Products</span>
                                    </h2>
                                </div>
                                <div class="row">
                                    <div class="featured-product-active owl-carousel">
                                        <div class="featured-product-bundle">
                                            <div class="featured-pro-wrapper mb-30 mb-sm-25">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img alt="" src="{{asset('frontend/assets')}}/images/featured-product/1.jpg">
                                                    </a>
                                                </div>
                                                <div class="featured-pro-content">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Studio Design</a>
                                                        </h5>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4><a class="featured-product-name" href="single-product.html">Mug Today is a good day</a></h4>
                                                    <div class="featured-price-box">
                                                        <span class="new-price new-price-2">$71.80</span>
                                                        <span class="old-price">$77.22</span>
                                                        <span class="discount-percentage">-7%</span>
                                                    </div>
                                                    <div class="featured-product-action">
                                                        <ul class="add-actions-link">
                                                            <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                            <li><a class="links-details" href="single-product.html"><i class="fa fa-heart-o"></i></a></li>
                                                            <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="featured-pro-wrapper">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img alt="" src="{{asset('frontend/assets')}}/images/featured-product/1.jpg">
                                                    </a>
                                                </div>
                                                <div class="featured-pro-content">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Studio Design</a>
                                                        </h5>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4><a class="featured-product-name" href="single-product.html">Mug Today is a good day</a></h4>
                                                    <div class="featured-price-box">
                                                        <span class="new-price">$71.80</span>
                                                    </div>
                                                    <div class="featured-product-action">
                                                        <ul class="add-actions-link">
                                                            <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                            <li><a class="links-details" href="single-product.html"><i class="fa fa-heart-o"></i></a></li>
                                                            <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Featured Product Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Featured Product With Banner Area End Here -->
     <!-- Begin Li's Trending Product Area -->
            <section class="product-area li-trending-product pt-60 pb-45 pt-xs-50">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Tab Menu Area -->
                        <div class="col-lg-12">
                            <div class="li-product-tab li-trending-product-tab">
                                <h2>
                                    <span>Trendding Products</span>
                                </h2>
                                             
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                            <div class="tab-content li-tab-content li-trending-product-content">
                                <div id="home1" class="tab-pane show fade in active">
                                    <div class="row">
                                        <div class="product-active owl-carousel">
                                            
                                            @foreach ($trendding_products as $trendding_product)
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="{{route('product.details',$trendding_product->id)}}" target="_blank">
                                                            <img src="{{asset($trendding_product->image)}}" alt="Li's Product Image">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                    <a href="shop-left-sidebar.html">Studio Design</a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <a class="product_name" href="{{route('product.details',$trendding_product->id)}}" target="_blank"><h5>{{$trendding_product->name}}</h5></a>
                                                            <div class="price-box">
                                                                <span class="new-price new-price-2">TK:{{number_format($trendding_product->selling_price)}}</span>
                                                                <span class="old-price">TK:{{number_format($trendding_product->regular_price)}}</span>
                                                                @php($off = (($trendding_product->regular_price - $trendding_product->selling_price)/$trendding_product->regular_price) * 100)
                                                               <span class="discount-percentage">-{{ceil($off)}}%</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                                <li><a class="links-details" href="single-product.html"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div> 
                                            @endforeach
                                        
                                        </div>
                                    </div>
                                </div>
                              </div>
                            <!-- Tab Menu Content Area End Here -->
                        </div>
                        <!-- Tab Menu Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Trending Product Area End Here -->
@endsection
