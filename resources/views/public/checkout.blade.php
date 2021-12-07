@extends('layouts.publicLayout.public-template')
@section('main-content')

<section id="product-process">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-7">
        <div class="checkout-info-wrap">
            <h2>Checkout</h2>
            <p>If you already have an account, Login below to chekout</p>
            <div class="checkout-options">
            <a href="login.html"><button class="btn btn-dark chk-login-btn">Login</button></a>
            <span>OR</span>
            </div>
            <p>Fill the form below to checkout as a guest</p>
            <form>
            <div class="row">
                <div class="form-group col-6">
                <label for="exampleInputEmail1">First name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group col-6">
                <label for="exampleInputPassword1">Last name</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group col-6">
                <label for="exampleInputPassword1">Phone number</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12">
                <label for="exampleFormControlTextarea1">Delivery address</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group form-check col-12">
                <label for="exampleFormControlTextarea1">Billing Address</label>
                <div class="form-check fm-radio">
                    <input class="form-check-input chk-radio" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label radio-label" for="exampleRadios1">
                    Same as shipping address
                    </label>
                </div>
                <div class="form-check fm-radio">
                    <input class="form-check-input chk-radio" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label radio-label" for="exampleRadios2">
                    Use a different address
                    </label>
                </div>
                </div>
            </div>

            <div class="option2 box">
                <div class="row">
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">First name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group col-6">
                    <label for="exampleInputPassword1">Last name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                </div>
                <div class="row">
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group col-6">
                    <label for="exampleInputPassword1">Phone number</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                </div>
                <div class="row">
                <div class="form-group col-12">
                    <label for="exampleFormControlTextarea1">Delivery address</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                </div>
            </div>

            </form>
        </div>
        </div>
        <div class="col-lg-5">
        <div class="cart-summ">
            <h2>Summary <span><img src="img/icons/back-icon.svg"><a href="shop.html">Back to shop</a></span></h2>
            <div class="cart-prdt-sum">

            <div class="cart-s-prdt">
                <div class="media">
                <div class="cart-s-prdt-img mr-3">
                    <img src="img/1.png">
                </div>
                <div class="media-body">
                    <h5 class="mt-0">Gloss Bomb Universal Lip Luminizer <span>₦5,000</span></h5>
                    <p class="cart-prdt-qty">Quantity: 1</p>
                </div>
                </div>
            </div>


            <div class="cart-s-prdt">
                <div class="media">
                <div class="cart-s-prdt-img mr-3">
                    <img src="img/2.png">
                </div>
                <div class="media-body">
                    <h5 class="mt-0">Gloss Bomb Universal Lip Luminizer <span>₦5,000</span></h5>
                    <p class="cart-prdt-qty">Quantity: 1</p>
                </div>
                </div>
            </div>

            <div class="cart-s-prdt">
                <div class="media">
                <div class="cart-s-prdt-img mr-3">
                    <img src="img/3.png">
                </div>
                <div class="media-body">
                    <h5 class="mt-0">Gloss Bomb Universal Lip Luminizer <span>₦5,000</span></h5>
                    <p class="cart-prdt-qty">Quantity: 1</p>
                </div>
                </div>
            </div>

            </div>

            <div class="cart-summ-info">
            <div class="cart-item-wrap">
                <p class="cart-item">Subtotal <span>₦20,000</span></p>
                <p class="cart-item">Shipping <span>₦1,200</span></p>
                <p class="cart-item">Taxes <span>₦1,125</span></p>
            </div>
            <p class="cart-total">Total <span>₦20,000</span></p>
            <a href="checkout-success.html"><button type="button" class="btn btn-danger pay-btn">Pay now</button></a>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>

@endsection