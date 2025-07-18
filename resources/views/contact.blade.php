<x-guest-layout>
    <x-slot name="title">
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="page-title-heading">
                                <h1 class="title">@lang('locale.contact_us')</h1>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span class="mr-1"><i class="ti ti-home"></i></span>
                                <a title="Homepage" href="{{ route('welcome') }}">@lang('locale.welcome')</a>
                                <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
                                <span class="ttm-textcolor-skincolor">@lang('locale.contact_us')</span>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>                    
        </div>
    </x-slot>

    <!--google_map-->
    <div id="google_map" class="google_map">
        <div class="map_container">
            <div id="map"></div>
        </div>
    </div>
    
    <!-- google_map end -->
    <section class="contact-section bg-layer bg-layer-equal-height clearfix">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-8 col-md-7">
                    <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-grey spacing-2">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                            <!-- section title -->
                            <div class="section-title style2">
                                <div class="title-header">
                                    <h5>GET IN TOUCH</h5>
                                    <h2 class="title">Contact Form</h2>
                                </div>
                            </div><!-- section title end -->
                            <form id="ttm-contactform" class="ttm-contactform wrap-form clearfix" method="post" action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input"><i class="ttm-textcolor-darkgrey ti-user"></i><input name="your-name" type="text" value="" placeholder="Your Name" required="required"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input"><i class="ttm-textcolor-darkgrey ti-mobile"></i><input name="your-phone" type="text" value="" placeholder="Cell Phone" required="required"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input"><i class="ttm-textcolor-darkgrey ti-email"></i><input name="email" type="email" value="" placeholder="Email" required="required"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input"><i class="ttm-textcolor-darkgrey ti-location-pin"></i><input name="venue" type="text" value="" placeholder="Venue" required="required"></span>
                                        </label>
                                    </div>
                                </div>
                                <label>
                                    <span class="text-input"><i class="ttm-textcolor-darkgrey ti-comment"></i><textarea name="message" rows="3" cols="40" placeholder="Message" required="required"></textarea></span>
                                </label>
                                <input name="submit" type="submit" id="submit" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" value="Make a Reservation">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-skincolor spacing-3">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                            <div class="box-header">
                                <div class="box-icon">
                                    <i class="fa fa-paper-plane"></i>
                                </div>
                            </div>
                            <h4>Contact Information</h4>
                            <ul class="ttm_contact_widget_wrapper">
                                <li><i class="ttm-textcolor-highlight ti ti-location-pin"></i>1212 Paint Valley Road East Rutherford, New York</li>
                                <li><i class="ttm-textcolor-highlight ti ti-headphone"></i>123-456-7890</li>
                                <li><i class="ttm-textcolor-highlight ti ti-files"></i>123-46789-1234</li>
                                <li><i class="ttm-textcolor-highlight ti ti-email"></i><a href="http://www.example.com">http://www.example.com</a></li>
                            </ul>
                            <div class="social-icons circle social-hover">
                                <ul class="list-inline">
                                    <li class="social-facebook"><a class="tooltip-top ttm-textcolor-skincolor" href="https://www.facebook.com/preyantechnosys19" data-tooltip="Facebook" target="_blank"><i class="ti ti-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social-linkedin"><a class="tooltip-top ttm-textcolor-skincolor" href="https://www.linkedin.com/in/preyan-technosys-pvt-ltd/" data-tooltip="Facebook" target="_blank"><i class="ti ti-linkedin" aria-hidden="true"></i></a></li>
                                    <li class="social-instagram"><a class="tooltip-top ttm-textcolor-skincolor" href="https://www.instagram.com/preyan_technosys/" data-tooltip="Instagram" target="_blank"><i class="ti ti-instagram" aria-hidden="true"></i></a></li>
                                    <li class="social-twitter"><a class="tooltip-top ttm-textcolor-skincolor" href="https://twitter.com/PreyanTechnosys" data-tooltip="Twitter" target="_blank"><i class="ti ti-twitter-alt" aria-hidden="true"></i></a></li>
                                    <li class="social-dribbble"><a class="tooltip-top ttm-textcolor-skincolor" href="https://dribbble.com/PreyanTechnosys" data-tooltip="Dribbble" target="_blank"><i class="ti ti-dribbble" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
</x-guest-layout>