@extends('layouts.master')
@section('css')
@endsection
@section('title')
@stop
@section('content')
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Checkout</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Checkout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- WISHLIST AREA START -->
    <div class="ltn__checkout-area mb-105">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__checkout-inner">
                        <div class="ltn__checkout-single-content mt-50">
                            <h4 class="title-2">Billing Details</h4>
                            <div class="ltn__checkout-single-content ltn__coupon-code-wrap">
                                <h5>Email must be valid - <a class="ltn__secondary-color"> After confirming the order, your
                                        account on the site will be sent to your e-mail so that you can follow up on your
                                        orders</a></h5>
                            </div>
                            <div class="ltn__checkout-single-content ltn__coupon-code-wrap">
                                <h5><a class="ltn__secondary-color"> For the next order, you can log in from your account
                                        and order directly without the need to re-fill the form</a></h5>
                            </div>
                            
                            <div class="ltn__checkout-single-content-info">
                                   <form action="{{ route('confirm_checkout') }}" method="post"
                        enctype="multipart/form-data"autocomplete="off">
                        {{ csrf_field() }}
                                    <h6>Personal Information</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <input type="text" name="name" placeholder="First name"required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <input type="text" name="lastname" placeholder="Last name"required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-email ltn__custom-icon">
                                                <input type="email" name="email" placeholder="email address"required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-phone ltn__custom-icon">
                                                <input type="text" name="phone" placeholder="phone number"required>
                                            </div>
                                        </div>
                                    </div>
                                     @if ($errors->any())
                                        <div class="ltn__checkout-single-content ltn__coupon-code-wrap">
                                            @foreach ($errors->all() as $error)
                                                <h5><a class="ltn__first-color" style="color:#ff0000;">
                                                        <li>Error - {{ $error }}</li>
                                                    </a></h5>
                                            @endforeach
                                        </div>
                                    @endif
                                    <h6>Order Notes (optional)</h6>
                                    <div class="input-item input-item-textarea ltn__custom-icon">
                                        <textarea name="note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                     <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Place order</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
