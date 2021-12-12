@extends('layouts.adminLayout.admin-template')

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
                            <h6 class="h2 text-white d-inline-block mb-0">New Product</h6>

                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            {{-- <a href="{{ url('/admin/product/new') }}" class="btn btn-sm btn-neutral"><i class="ni ni-fat-add"></i>
                                New Product</a> --}}
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
                        <div class="card-header border-0 pb-0">
                            <h3 class="mb-0 pb-0">Update Product</h3>
                        </div>
                        <!-- Light table -->

                        <hr class="mb-4" />
                        <div class="row">
                            <div class="col-lg-12">
                                @if (session('success'))
                                    <div class="alert alert-success m-2">
                                        <a href="#" class="close" data-dismiss="alert"
                                            aria-label="close">&times;</a> {{ session('success') }}
                                    </div>
                                @endif
                                <form class="p-4" method="POST" action="{{ url('/admin/update-product') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ $product->name }}" />
                                        @error('name')
                                            <span class="  invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="category">Select Category</label>
                                        <select class="form-control @error('category_id') is-invalid @enderror"
                                            id="category" name="category_id">
                                            <option value="{{ $product->category->id }}">{{ $product->category->name }}
                                            </option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="  invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>



                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="amount">Amount</label>
                                            <input type="number" name="amount" value="{{ $product->amount }}"
                                                class="form-control @error('amount') is-invalid @enderror" />
                                            @error('amount')
                                                <span class="  invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label for="goods_in_stock">Available in Stock</label>
                                            <input type="number" name="goods_in_stock"
                                                value="{{ $product->goods_in_stock }}"
                                                class="form-control @error('amount') is-invalid @enderror" />
                                            @error('goods_in_stock')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-lg-12">
                                            <label for="type">Type</label>
                                            <select class="form-control @error('type') is-invalid @enderror" name="type">
                                                <option value="Men">Men</option>
                                                <option value="Women">Women</option>
                                            </select>
                                            @error('type')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="description" id="description">Description</label>
                                        <textarea id="mytextarea" class="@error('description') is-invalid @enderror"
                                            name="description">{{ $product->description }}</textarea>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <input type="hidden" name="id" value="{{ $product->id }}" />

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" name="Add New" />
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
