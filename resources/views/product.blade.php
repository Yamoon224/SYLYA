<x-guest-layout>
    <x-slot name="title">
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="page-title-heading">
                                <h1 class="title">@lang('locale.product', ['suffix'=>''])</h1>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span class="mr-1"><i class="ti ti-home"></i></span>
                                <a title="Homepage" href="{{ route('shop') }}">@lang('locale.shop', ['suffix'=>''])</a>
                                <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
                                <span class="ttm-textcolor-skincolor">@lang('locale.product', ['suffix'=>''])</span>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>                    
        </div>
    </x-slot>

    <section class="single-product-section layout-3 clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ttm-single-product-details">
                        <div class="ttm-single-product-info">
                            <div class="row">
                                <div class="col-lg-5 col-md-8 col-sm-12 ml-auto mr-auto">
                                    <div class="product-gallery easyzoom-product-gallery">
                                       <div class="product-look-preview-plus full">
                                            <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                                                <a href="{{ asset('storage/'.$item->img_front) }}">
                                                    <img class="img-fluid" src="{{ asset('storage/'.$item->img_front) }}" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                         <div class="product-look-views full">
                                            <div class="row">
                                                <div class="col-lg-10 col-md-10 col-sm-8 mr-auto">
                                                    <div class="mt-35 ml-40 mr-40">
                                                        <ul class="thumbnails easyzoom-gallery-slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows":true, "infinite":true, "vertical":false}'>
                                                            <li>
                                                                <a href="{{ asset('storage/'.$item->img_front) }}" data-standard="{{ asset('storage/'.$item->img_front) }}">
                                                                    <img class="img-fluid" src="{{ asset('storage/'.$item->img_front) }}" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ asset('storage/'.$item->img_back) }}" data-standard="{{ asset('storage/'.$item->img_back) }}">
                                                                    <img class="img-fluid" src="{{ asset('storage/'.$item->img_back) }}" alt="" />
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="summary entry-summary pl-50 res-991-pl-0 res-991-pt-40">
                                        <h2 class="product_title entry-title">{{ $item->name }}</h2>
                                        <div class="share-icons social-links">
                                            <span>Share :</span>
                                            <a href="#"><i class="ti ti-facebook"></i></a>
                                            <a href="#"><i class="ti ti-twitter-alt"></i></a>   
                                        </div>
                                        <div class="comments-notes clearfix">
                                            &nbsp;&nbsp;<a href="javascript:void(0)" class="review-link" rel="nofollow">(No review)</a>
                                            &nbsp;&nbsp;<a href="javascript:void(0)" class="review-link" rel="nofollow">Write to Review</a>
                                            <div class="product-rating clearfix">
                                                <ul class="star-rating clearfix">
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_in-stock"><i class="fa fa-check-circle"></i><span> in Stock Only 14 left</span></div>
                                        <span class="price">
                                            <ins>
                                                <span class="product-Price-amount">{{ moneyFormat($item->price) }}</span>
                                            </ins>
                                            <del>
                                                <span class="product-Price-amount">{{ moneyFormat($item->price+3000) }}</span>
                                            </del>
                                        </span>
                                        <div class="product-details__short-description">{{ $item->description }}</div>
                                        <div class="mt-15 mb-25">
                                            <div class="quantity">
                                                <label>Quantity: </label>
                                                <input type="text" value="1" min="1" name="quantity-number" class="qty">
                                                <span class="inc quantity-button">+</span>
                                                <span class="dec quantity-button">-</span>
                                            </div>
                                        </div>
                                        <div class="actions">
                                            <div class="add-to-cart">
                                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="#">Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <a href="#" rel="nofollow" data-product-id="24006456" data-product-type="simple" class="add_to_wishlist">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                <span class="wishlist-text">Add to Wish List</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-10 pb-5 res-991-pt-0 res-991-pb-10">
                            <div class="row no-gutters ttm-bgcolor-grey border">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <!-- featured-icon-box -->
                                    <div class="featured-icon-box style3 text-center">
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                            <i class="themifyicon ti-truck"></i>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Fast & Free Shopping</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>All Order Over $199</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <!-- featured-icon-box -->
                                    <div class="featured-icon-box style3 text-center">
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                            <i class="themifyicon ti-reload"></i>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>100% Money Back Guaranty</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>30 Days Money Return</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <!-- featured-icon-box -->
                                    <div class="featured-icon-box style3 text-center">
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                            <i class="themifyicon ti-comments"></i>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Support 24/7 Days</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Hot Line: +123 456 789</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
</x-guest-layout>