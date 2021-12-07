@extends('layouts.publicLayout.public-template')
@section('main-content')

<section id="single-product">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-lg-7 sp-lhs">
        <div class="thumb-wrap">

          <div id="thmnl" class="thumbnail">
            <div class="p-thumb product-image-thumbnail"><img id="1" class="thumb" src="img/1.png" onclick='preview(this)'></div>
            <div class="p-thumb product-image-thumbnail"><img id="2" class="thumb"  src="img/3.png" onclick='preview(this)'></div>
            <div class="p-thumb product-image-thumbnail"><img id="3" class="thumb"  src="img/4.png" onclick='preview(this)'></div>
          </div>

          <div id="product-image" class="main-img">
            <img id='0' class='image' src="img/1.png">
          </div>
        </div>

      </div>
      <div class="col-lg-5 sp-rhs">

        <div class="sproduct-info">
          <div class="sp-wrap">
            <p class="sp-cat">{{ $product->category->name }}</p>
            <h1 class="sp-name">{{ $product->name }}</h1>
            <div class="sp-rating">
              <div class="starrs">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
              <p class="sp-rating-score">4.5 / 5 <span><a href="#">See all reviews</a></span></p>
            </div>
            <p class="sp-price">&#8358;{{ number_format($product->amount) }}</p>
            <div class="sp-color-wrap">
              <p class="sp-label">AVAILABLE SHADE / COLOUR</p>
              <div class="sp-color">
                <div class="sc1"></div>
                <div class="sc2"></div>
                <div class="sc3"></div>
                <div class="sc4"></div>
                <div class="sc5"></div>
                <div class="sc1"></div>
                <div class="sc2"></div>
                <div class="sc3"></div>
              </div>
              <form class="">
                <div class="form-group">
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>Select Colour</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                  </select>
                </div>
              </form>
            </div>
            <div class="sp-quantity">
              <p class="sp-label">Select quantity</p>
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
            <a href="cart.html"><button class="btn btn-danger sp-add-to-cart-btn">Add to cart</button></a>
            <div class="sp-share-op">
              <p class="sp-label">Share Product</p>
              <a href="#"><img src="{{ url('public/img/icons/facebook.svg') }}"></a>
              <a href="#"><img src="{{ url('public/img/icons/twitter.svg') }}"></a>
              <a href="#"><img src="{{ url('public/img/icons/instagram.svg') }}"></a>
              <a href="#"><img src="{{ url('public/img/icons/link-icon.svg') }}"></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


<section id="product-info">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1>Product Information</h1>
        <p>{{ strip_tags( $product->description ) }}</p>

        <div class="line"></div>

        <div class="row">

          <div class="col-lg-4">
            <h1>Customer Ratings and Reviews</h1>

            <div class="c-rating">
              <h2>Avr. Rating <span>All Time</span></h2>
              <div class="avr-rating-star">
                <h3 class="rating-score">4.0</h3>
                <div class="starrs">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
              </div>
              <div class="clearfix"></div>
              <p class="rating-count">(4298 Reviews)</p>
            </div>
          </div>

          <div class="col-lg-4 mt-2">

            <div>
              <div class="progress-label">5</div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            
            <div>
              <div class="progress-label">4</div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div>
              <div class="progress-label">3</div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div>
              <div class="progress-label">2</div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div>
              <div class="progress-label">1</div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-4 mt-2" align="center">
            <button class="btn btn-danger w-review-btn">Rate this product</button>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>


<section id="rv-products">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">

        <h1>Recently Viewed Products</h1>
        <div class="product-wrap">

          <div class="product">
            <a href="product-details.html">
            <div class="product-img">
              <img src="img/1.png">
              <div class="overlay">
                <div class="p-actn">
                  <button class="btn btn-light">View Product</button>
                </div>
              </div>
            </div>
            </a>
            <div class="product-info">
              <p class="product-cat"><a href="product-details.html">Product Category</a></p>
              <p class="product-name"><a href="product-details.html">Gloss Bomb Lip</a></p>
              <p class="product-price">&#8358; 4,500</p>
            </div>
          </div>

          <div class="product">
            <a href="product-details.html">
            <div class="product-img">
              <img src="img/4.png">
              <div class="overlay">
                <div class="p-actn">
                  <button class="btn btn-light">View Product</button>
                </div>
              </div>
            </div>
            </a>
            <div class="product-info">
              <p class="product-cat"><a href="product-details.html">Product Category</a></p>
              <p class="product-name"><a href="product-details.html">Gloss Bomb Universal Lip</a></p>
              <p class="product-price">&#8358; 7,500</p>
            </div>
          </div>

          <div class="product">
            <a href="product-details.html">
            <div class="product-img">
              <img src="img/3.png">
              <div class="overlay">
                <div class="p-actn">
                  <button class="btn btn-light">View Product</button>
                </div>
              </div>
            </div>
            </a>
            <div class="product-info">
              <p class="product-cat"><a href="product-details.html">Product Category</a></p>
              <p class="product-name"><a href="product-details.html">Gloss Bomb gloss</a></p>
              <p class="product-price">&#8358; 5,000</p>
            </div>
          </div>

          <div class="product">
            <a href="product-details.html">
            <div class="product-img">
              <img src="img/4.png">
              <div class="overlay">
                <div class="p-actn">
                  <button class="btn btn-light">View Product</button>
                </div>
              </div>
            </div>
            </a>
            <div class="product-info">
              <p class="product-cat"><a href="product-details.html">Product Category</a></p>
              <p class="product-name"><a href="product-details.html">Bomb Lip balm</a></p>
              <p class="product-price">&#8358; 10,500</p>
            </div>
          </div>

          <div class="product">
            <a href="product-details.html">
            <div class="product-img">
              <img src="img/4.png">
              <div class="overlay">
                <div class="p-actn">
                  <button class="btn btn-light">View Product</button>
                </div>
              </div>
            </div>
            </a>
            <div class="product-info">
              <p class="product-cat"><a href="product-details.html">Product Category</a></p>
              <p class="product-name"><a href="product-details.html">Gloss Bomb Lip</a></p>
              <p class="product-price">&#8358; 4,500</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>


@endsection