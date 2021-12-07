@extends('layouts.publicLayout.public-template')
@section('main-content')

<!-- Hero Section -->

    <section id="hero">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col">
            <div class="hero-info">
              <h1>Confidence Breeds Beauty</h1>
              <p>Find the rigth care for your body</p>
              <button class="btn btn-danger">Shop now</button>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- New-in -->

    <section id="new-in-section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <p>Shop now</p>
            <h2>Find your beauty match</h2>
            <div class="product-wrap">

            @foreach($products as $product)
              <div class="product">
                <a href="{{ url('product-details/'.$product->id) }}">
                <div class="product-img">
                @foreach ($product->product_images as $image)
                  <img src="{{ $image->product_images }}">
                @endforeach
                  <div class="overlay">
                    <div class="p-actn">
                      <button class="btn btn-light">View Product</button>
                    </div>
                  </div>
                </div>
                </a>
                <div class="product-info">
                  <p class="product-cat">{{ $product->category->name }}</p>
                  <p class="product-name"><a href="{{ url('product-details/'.$product->id) }}">{{ Str::limit($product->name, 30) }}</a></p>
                  <p class="product-price">&#8358;{{ number_format($product->amount) }}</p>
                </div>
              </div>
            @endforeach

            </div>
            <button class="btn btn-light"><a href="shop.html">View all products</a></button>
          </div>
        </div>
      </div>
    </section>

    <section id="category-grid">
      <div class="row">

        @foreach ($categories as $category)
        <div class="col-lg-3 no-padding">
          <div class="cat-box">
            <img src="{{ $category->cover_photo }}">
            <div class="overlay">
              <div class="text">
                <h2><a href="#">{{ $category->name }}</a></h2>
                <!-- <p>Beauty, Cosmetics</p> -->
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </section>


    <section id="promotional">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="promo-wrap">
              <div class="row">
                <div class="col-lg-5">
                  <div class="promo-lhs">
                    <a href="#"><img class="img-fluid" src="img/promo/p-1b.png"></a>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="promo-rhs">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="promo-box">
                          <a href="#"></a><img class="" src="img/promo/p-2.png"></a>
                          <!-- <div class="sale-badge">Sale</div> -->
                          <p class="p-price"><span>&#8358; 5,000</span>&#8358; 3,500</p>
                          <a href="#"><img class="fav-icon" src="img/icons/fav-icon.svg"></a>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="promo-box">
                          <img class="" src="img/promo/p-3.png">
                          <p class="p-price"><span>&#8358; 5,000</span>&#8358; 3,500</p>
                          <img class="fav-icon" src="img/icons/fav-icon.svg">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="promo-box">
                          <img class="" src="img/promo/p-4.png">
                          <p class="p-price"><span>&#8358; 5,000</span>&#8358; 3,500</p>
                          <img class="fav-icon" src="img/icons/fav-icon.svg">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="promo-box">
                          <img class="" src="img/promo/p-5.png">
                          <p class="p-price"><span>&#8358; 5,000</span>&#8358; 3,500</p>
                          <img class="fav-icon" src="img/icons/fav-icon.svg">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="sp-category">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <p>Shop male and female fragrance</p>
            <h2>Fragrance</h2>
            <button class="btn btn-danger">Shop now</button>
          </div>
        </div>
      </div>
    </section>


    <section id="testimonials">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <p>What our customers think</p>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">

              @foreach($testimonials as $testimonial)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <h2>{{ $testimonial->testimonial }}</h2>
                    <h3>{{ $testimonial->customer_name }}</h3>
                </div>
              @endforeach

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


@endsection