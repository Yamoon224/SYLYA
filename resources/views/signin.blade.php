<x-guest-layout>
    <x-slot name="title">
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="page-title-heading">
                                <h1 class="title">@lang('locale.sign_in')</h1>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span class="mr-1"><i class="ti ti-home"></i></span>
                                <a title="Homepage" href="{{ route('welcome') }}">@lang('locale.welcome')</a>
                                <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
                                <span class="ttm-textcolor-skincolor">@lang('locale.sign_in')</span>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>                    
        </div>
    </x-slot>

    
    <!--login-section-->
    <section class="login-section bg-img2 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 ml-auto mr-auto">
                    <div class="wrap-login">
                        <form action="#" id="loginForm">
                            <div class="form-group">
                                <i class="fa fa-envelope-o"></i>
                                <input type="text" name='email' placeholder="@lang('locale.email')" required/>     
                            </div>
                            <div class="form-group">
                                <i class="fa fa-lock"></i>
                                <input type="password" name='password' placeholder="@lang('locale.password')" required/>     
                            </div>
                            <div class="form-group">
                                <button id="login-button" class="button action-button expand-center mb-15">
                                    <span class="label">@lang('locale.sign_in')</span>
                                    <span class="spinner"></span>
                                </button>
                            </div>
                            <div class="form-group d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center justify-content-start">
                                    <input type="checkbox"> <span class="ttm-textcolor-darkgrey">@lang('locale.remember_me')</span>
                                </div>
                                <div class="d-flex flex-row align-items-center justify-content-end">
                                    <a href="#" id="forgot-password-link" class="forgot-password-link">@lang('locale.forgot')</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--login-section end-->
</x-guest-layout>