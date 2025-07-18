<x-guest-layout>
    <x-slot name="title">
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="page-title-heading">
                                <h1 class="title">@lang('locale.blog', ['suffix'=>'s'])</h1>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span class="mr-1"><i class="ti ti-home"></i></span>
                                <a title="Homepage" href="{{ route('welcome') }}">@lang('locale.welcome')</a>
                                <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
                                <span class="ttm-textcolor-skincolor">@lang('locale.blog', ['suffix'=>'s'])</span>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>                    
        </div>
    </x-slot>

    <section class="pt-60 pb-60 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                   <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-post ttm-box-view-top-image">
                        <div class="ttm-post-featured-outer">
                            <div class="ttm-post-thumbnail featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('images/blog/01.jpg') }}" alt="">
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="2019-07-28T07:07:55+00:00">28<span class="entry-month">Jul</span></time>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="featured-content featured-content-post">
                            <div class="post-meta">
                                <span class="ttm-meta-line byline"><i class="fa fa-user"></i>Admin</span>
                                <span class="ttm-meta-line tag-link"><i class="fa fa-tag"></i>Child Education</span>
                            </div>
                            <div class="post-title featured-title">
                                <h5><a href="#">Danger of Having High Water Pressure</a></h5>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-post end -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-post ttm-box-view-top-image">
                        <div class="ttm-post-featured-outer">
                            <div class="ttm-post-thumbnail featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('images/blog/02.jpg') }}" alt="">
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="2019-08-10T07:07:55+00:00">10<span class="entry-month">Aug</span></time>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="featured-content featured-content-post">
                            <div class="post-meta">
                                <span class="ttm-meta-line byline"><i class="fa fa-user"></i>Admin</span>
                                <span class="ttm-meta-line tag-link"><i class="fa fa-tag"></i>Child Education</span>
                            </div>
                            <div class="post-title featured-title">
                                <h5><a href="#">The Most Common Painting Mistakes</a></h5>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-post end -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-post ttm-box-view-top-image">
                        <div class="ttm-post-featured-outer">
                            <div class="ttm-post-thumbnail featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('images/blog/03.jpg') }}" alt="">
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="2019-08-21T07:07:55+00:00">21<span class="entry-month">Aug</span></time>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="featured-content featured-content-post">
                            <div class="post-meta">
                                <span class="ttm-meta-line byline"><i class="fa fa-user"></i>Admin</span>
                                <span class="ttm-meta-line tag-link"><i class="fa fa-tag"></i>Child Education</span>
                            </div>
                            <div class="post-title featured-title">
                                <h5><a href="#">Choosing Roofing Material for Home</a></h5>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-post end-->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                   <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-post ttm-box-view-top-image">
                        <div class="ttm-post-featured-outer">
                            <div class="ttm-post-thumbnail featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('images/blog/04.jpg') }}" alt="">
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="2019-08-26T07:07:55+00:00">26<span class="entry-month">Aug</span></time>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="featured-content featured-content-post">
                            <div class="post-meta">
                                <span class="ttm-meta-line byline"><i class="fa fa-user"></i>Admin</span>
                                <span class="ttm-meta-line tag-link"><i class="fa fa-tag"></i>Child Education</span>
                            </div>
                            <div class="post-title featured-title">
                                <h5><a href="#">Equipping Researchers in the Developing.</a></h5>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-post end -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-post ttm-box-view-top-image">
                        <div class="ttm-post-featured-outer">
                            <div class="ttm-post-thumbnail featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('images/blog/05.jpg') }}" alt="">
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="2019-09-06T07:07:55+00:00">06<span class="entry-month">Sep</span></time>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="featured-content featured-content-post">
                            <div class="post-meta">
                                <span class="ttm-meta-line byline"><i class="fa fa-user"></i>Admin</span>
                                <span class="ttm-meta-line tag-link"><i class="fa fa-tag"></i>Child Education</span>
                            </div>
                            <div class="post-title featured-title">
                                <h5><a href="#">Simple Steps for Replacing old Tiling</a></h5>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-post end -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-post ttm-box-view-top-image">
                        <div class="ttm-post-featured-outer">
                            <div class="ttm-post-thumbnail featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('images/blog/06.jpg') }}" alt="">
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="2019-09-12T07:07:55+00:00">12<span class="entry-month">Sep</span></time>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="featured-content featured-content-post">
                            <div class="post-meta">
                                <span class="ttm-meta-line byline"><i class="fa fa-user"></i>Admin</span>
                                <span class="ttm-meta-line tag-link"><i class="fa fa-tag"></i>Child Education</span>
                            </div>
                            <div class="post-title featured-title">
                                <h5><a href="#">Got a Leaking? Hire an experienced Plumber</a></h5>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-post end-->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                   <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-post ttm-box-view-top-image">
                        <div class="ttm-post-featured-outer">
                            <div class="ttm-post-thumbnail featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('images/blog/07.jpg') }}" alt="">
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="2019-09-12T07:07:55+00:00">12<span class="entry-month">Sep</span></time>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="featured-content featured-content-post">
                            <div class="post-meta">
                                <span class="ttm-meta-line byline"><i class="fa fa-user"></i>Admin</span>
                                <span class="ttm-meta-line tag-link"><i class="fa fa-tag"></i>Child Education</span>
                            </div>
                            <div class="post-title featured-title">
                                <h5><a href="#">Handling Clogged Shower Drain Problems</a></h5>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-post end -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-post ttm-box-view-top-image">
                        <div class="ttm-post-featured-outer">
                            <div class="ttm-post-thumbnail featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('images/blog/08.jpg') }}" alt="">
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="2019-09-12T07:07:55+00:00">12<span class="entry-month">Sep</span></time>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="featured-content featured-content-post">
                            <div class="post-meta">
                                <span class="ttm-meta-line byline"><i class="fa fa-user"></i>Admin</span>
                                <span class="ttm-meta-line tag-link"><i class="fa fa-tag"></i>Child Education</span>
                            </div>
                            <div class="post-title featured-title">
                                <h5><a href="#">Protecting Your Outdoor Tankless Water Heater</a></h5>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-post end -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-post ttm-box-view-top-image">
                        <div class="ttm-post-featured-outer">
                            <div class="ttm-post-thumbnail featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('images/blog/09.jpg') }}" alt="">
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="2019-09-12T07:07:55+00:00">12<span class="entry-month">Sep</span></time>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="featured-content featured-content-post">
                            <div class="post-meta">
                                <span class="ttm-meta-line byline"><i class="fa fa-user"></i>Admin</span>
                                <span class="ttm-meta-line tag-link"><i class="fa fa-tag"></i>Child Education</span>
                            </div>
                            <div class="post-title featured-title">
                                <h5><a href="#">When have a problem with Cracked Pipes</a></h5>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-post end-->
                </div>
                <div class="col-lg-12">
                    <div class="pagination-block res-991-mt-0">
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="page-numbers" href="#">3</a>
                        <a class="next page-numbers" href="#"><i class="ti ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>