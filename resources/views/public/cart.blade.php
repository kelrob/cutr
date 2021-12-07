@extends('layouts.publicLayout.public-template')
@section('main-content')

<section id="product-process">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7">
                <div class="shopping-cart">
                    <h2>Shopping Cart <span>4 items</span></h2>
                    <table class="table table-borderless">
                    <tbody>

                        <tr>
                        <td>
                            <div class="cart-p-info">
                            <div class="cart-p-img">
                                <img src="img/1.png">
                            </div>
                            <p class="cart-p-name">Gloss Bomb Universal Lip Luminizer</p>
                            <p class="p-info">Size: 10  |  Color: Red</p>
                            </div>
                        </td>
                        <td align="center"><p class="cart-p-price">₦5,000</p></td>
                        <td align="center">
                            <div class="sp-quantity">
                            <div class="input-group">
                                <div class="button minus">
                                <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                    <i class="ti-minus"></i>
                                </button>
                                </div>
                                <input type="text" name="quant[1]" class="input-number" data-min="1" data-max="1000" value="5">
                                <div class="button plus">
                                <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                    <i class="ti-plus"></i>
                                </button>
                                </div>
                            </div>
                            </div>
                        </td>
                        <td><p class="cart-p-price">₦5,000</p></td>
                        <td><img class="c-close-icon" src="img/icons/close-icon.svg"></td>
                        </tr>

                        <tr>
                        <td>
                            <div class="cart-p-info">
                            <div class="cart-p-img">
                                <img src="img/2.png">
                            </div>
                            <p class="cart-p-name">Gloss Bomb Universal Lip Luminizer</p>
                            <p class="p-info">Size: 10  |  Color: Red</p>
                            </div>
                        </td>
                        <td><p class="cart-p-price">₦5,000</p></td>
                        <td align="center">
                            <div class="sp-quantity">
                            <div class="input-group">
                                <div class="button minus">
                                <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                    <i class="ti-minus"></i>
                                </button>
                                </div>
                                <input type="text" name="quant[1]" class="input-number" data-min="1" data-max="1000" value="5">
                                <div class="button plus">
                                <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                    <i class="ti-plus"></i>
                                </button>
                                </div>
                            </div>
                            </div>
                        </td>
                        <td align="center"><p class="cart-p-price">₦5,000</p></td>
                        <td><img class="c-close-icon" src="img/icons/close-icon.svg"></td>
                        </tr>

                        <tr>
                        <td>
                            <div class="cart-p-info">
                            <div class="cart-p-img">
                                <img src="img/3.png">
                            </div>
                            <p class="cart-p-name">Gloss Bomb Universal Lip Luminizer</p>
                            <p class="p-info">Size: 10  |  Color: Red</p>
                            </div>
                        </td>
                        <td align="center"><p class="cart-p-price">₦5,000</p></td>
                        <td align="center">
                            <div class="sp-quantity">
                            <div class="input-group">
                                <div class="button minus">
                                <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                    <i class="ti-minus"></i>
                                </button>
                                </div>
                                <input type="text" name="quant[1]" class="input-number" data-min="1" data-max="1000" value="5">
                                <div class="button plus">
                                <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                    <i class="ti-plus"></i>
                                </button>
                                </div>
                            </div>
                            </div>
                        </td>
                        <td align="center"><p class="cart-p-price">₦5,000</p></td>
                        <td><img class="c-close-icon" src="img/icons/close-icon.svg"></td>
                        </tr>

                        <tr>
                        <td>
                            <div class="cart-p-info">
                            <div class="cart-p-img">
                                <img src="img/4.png">
                            </div>
                            <p class="cart-p-name">Gloss Bomb Universal Lip Luminizer</p>
                            <p class="p-info">Size: 10  |  Color: Red</p>
                            </div>
                        </td>
                        <td align="center"><p class="cart-p-price">₦5,000</p></td>
                        <td align="center">
                            <div class="sp-quantity">
                            <div class="input-group">
                                <div class="button minus">
                                <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                    <i class="ti-minus"></i>
                                </button>
                                </div>
                                <input type="text" name="quant[1]" class="input-number" data-min="1" data-max="1000" value="5">
                                <div class="button plus">
                                <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                    <i class="ti-plus"></i>
                                </button>
                                </div>
                            </div>
                            </div>
                        </td>
                        <td align="center"><p class="cart-p-price">₦5,000</p></td>
                        <td><img class="c-close-icon" src="img/icons/close-icon.svg"></td>
                        </tr>

                    </tbody>
                    </table>
                </div>
                </div>
                <div class="col-lg-5">
                <div class="cart-summ">
                    <h2>Summary <span><img src="img/icons/back-icon.svg"><a href="shop.html">Back to shop</a></span></h2>
                    <div class="cart-summ-info">
                    <p>4 items <span>₦20,000</span></p>
                    <p class="cart-ship-info">Shipping and taxes calculated on checkout page</p>
                    <label for="coupon">Password</label>
                    <form class="form-inline">
                        <div class="form-group mb-2">
                        <input type="text" class="form-control" id="coupon">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Apply</button>
                    </form>
                    <form class="cart-pr-fm">
                        <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input cart-checkbox" id="exampleCheck1">
                        <label class="form-check-label cart-cbox-label" for="exampleCheck1">I agree to <a href="#">Terms & Conditions</a></label>
                        </div>
                        <a href="checkout.html"><button type="button" class="btn btn-danger">Checkout</button></a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection