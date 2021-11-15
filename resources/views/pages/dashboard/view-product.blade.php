@extends('layouts.app')

@section('main-section')
    @include('includes.sidebar')
    <div class="main-content" id="panel">
        <!-- Topnav -->
        @include('includes.topnav')
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0">Product Details</h6>

                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <a href="{{ url('product/new') }}" class="btn btn-sm btn-neutral"><i class="ni ni-fat-add"></i>
                                New Product</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <h3 class="mb-0">{{ $product->name }}</h3>
                        </div>
                        <div class="row p-3">
                            <div class="col-lg-12">
                                <h3><b><u>Product Description</u></b></h3>
                                {!! $product->description !!}
                            </div>
                            @foreach ($product->product_images as $image)
                                <div class="col-lg-3">
                                    <img src="{{ $image->product_images }}" class="img-fluid" />
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        @endsection
