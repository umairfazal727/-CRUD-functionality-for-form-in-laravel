@extends('welcome')
@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb">
        <div class="container">
            <ul class="list-unstyled d-flex align-items-center m-0">
                <li><a href="index.html">Home</a></li>
                <li>
                    <svg class="icon icon-breadcrumb" width="64" height="64" viewBox="0 0 64 64" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.4">
                            <path
                                d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z"
                                fill="#000" />
                        </g>
                    </svg>
                </li>
                <li>Cart</li>
                <li>
                    <svg class="icon icon-breadcrumb" width="64" height="64" viewBox="0 0 64 64" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.4">
                            <path
                                d="M25.9375 8.5625L23.0625 11.4375L43.625 32L23.0625 52.5625L25.9375 55.4375L47.9375 33.4375L49.3125 32L47.9375 30.5625L25.9375 8.5625Z"
                                fill="#000" />
                        </g>
                    </svg>
                </li>
                <li>Checkout</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->

    <main id="MainContent" class="content-for-layout">
        <div class="checkout-page mt-100">
            <div class="container">
                <div class="checkout-page-wrapper">
                    <div class="row">
                        <div class="col-xl-9 col-lg-8 col-md-12 col-12">
                            <div class="shipping-address-area">
                                <h2 class="shipping-address-heading pb-1">Shipping address</h2>
                                <div class="shipping-address-form-wrapper">
                                    <form action="{{route('confirm-order')}}" class="shipping-address-form common-form" id="checkout-form" method="POST">
                                        @csrf
                                        <input type="hiddern" name="id" value="{{$order_detail->id}}" required/>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <fieldset>
                                                    <label class="label">First name</label>
                                                    <input type="text" name="first_name" value="" required/>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <fieldset>
                                                    <label class="label">Last name</label>
                                                    <input type="text" name="last_name" value="" required/>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <fieldset>
                                                    <label class="label">Email address</label>
                                                    <input type="email" name="email" value="" required/>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <fieldset>
                                                    <label class="label">Phone number</label>
                                                    <input type="text" name="phone" value="" required/>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <fieldset>
                                                    <label class="label">Country</label>
                                                    <select class="form-select" name="country" required>
                                                        <option selected="ca">Canada</option>
                                                        <option value="us">USA</option>
                                                        <option value="au">Australia</option>
                                                        <option value="me">Mexico</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <fieldset>
                                                    <label class="label">Zip code</label>
                                                    <input type="text" name="post_code" value="" required/>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <fieldset>
                                                    <label class="label">Address 1</label>
                                                    <input type="text" name="address1" value="" required/>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <fieldset>
                                                    <label class="label">Address 2</label>
                                                    <input type="text" name="address2" value=""/>
                                                </fieldset>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>

                            <div class="shipping-address-area billing-area">
                                <h2 class="shipping-address-heading pb-1">Billing address</h2>
                                <div class="form-checkbox d-flex align-items-center mt-4">
                                    <input class="form-check-input mt-0" type="checkbox">
                                    <label class="form-check-label ms-2">
                                        Same as shipping address
                                    </label>
                                </div>
                            </div>
                            <div class="shipping-address-area billing-area">
                                <div class="minicart-btn-area d-flex align-items-center justify-content-between flex-wrap">
                                    <a form="checkout-form" type="submit" class="checkout-page-btn minicart-btn btn-primary bg-primary text-white">PROCEED TO SHIPPING</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-12 col-12">
                            <div class="cart-total-area checkout-summary-area">
                                <h3 class="d-none d-lg-block mb-0 text-center heading_24 mb-4">Order summary</h4>

                                <div class="minicart-item d-flex">
                                    <div class="mini-img-wrapper">
                                        <img class="mini-img" src="{{ URL::asset('/images/shirt0.jpg') }}" alt="img">
                                    </div>
                                    <div class="product-info">
                                        <h2 class="product-title"><a href="#">Eliot Reversible Sectional</a></h2>
                                        <p class="product-vendor">${{$order_detail->amount}} x {{$order_detail->quantity}}</p>
                                    </div>
                                </div>

                                <div class="cart-total-box mt-4 bg-transparent p-0">
                                    <div class="subtotal-item subtotal-box">
                                        <h4 class="subtotal-title">Subtotals:</h4>
                                        <p class="subtotal-value">${{$order_detail->sub_total}}</p>
                                    </div>
                                    <div class="subtotal-item shipping-box">
                                        <h4 class="subtotal-title">Shipping:</h4>
                                        <p class="subtotal-value">$0.00</p>
                                    </div>
                                    <div class="subtotal-item discount-box">
                                        <h4 class="subtotal-title">Discount:</h4>
                                        <p class="subtotal-value">$0.00</p>
                                    </div>
                                    <hr />
                                    <div class="subtotal-item discount-box">
                                        <h4 class="subtotal-title">Total:</h4>
                                        <p class="subtotal-value">${{$order_detail->sub_total}}</p>
                                    </div>


                                    <div class="mt-4 checkout-promo-code">
                                        <input class="input-promo-code" type="text" placeholder="Promo code" />
                                        <a href="checkout.html" class="btn-apply-code position-relative btn-secondary text-uppercase mt-3">
                                            Apply Promo Code
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
    </main>
@endsection