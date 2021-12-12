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
                            <h6 class="h2 text-white d-inline-block mb-0">New Banner</h6>

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
                            <h3 class="mb-0 pb-0">Add New Banner</h3>
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
                                <form class="p-4" method="POST" action="{{ url('/admin/edit-banner') }}">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $banner->id }}" />
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <select name="location"
                                            class="form-control  @error('location') is-invalid @enderror">
                                            <option value="{{ $banner->location }}">
                                                {{ remove_underscores($banner->location) }}
                                            <option>
                                            <option value="hero_banner">Hero Banner</option>
                                            <option value="sale_banner">Sale Banner</option>
                                            <option value="featured_bannner">Featured Banner</option>
                                        </select>
                                        @error('location')
                                            <span class=" invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Banner Heading</label>
                                        <input type="text" name="banner_heading"
                                            class="form-control @error('banner_heading') is-invalid @enderror"
                                            value="{{ $banner->banner_heading }}" />
                                        @error('banner_heading')
                                            <span class=" invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Banner Sub Heading</label>
                                        <input type="text" name="banner_sub_heading"
                                            value="{{ $banner->banner_sub_heading }}"
                                            class="form-control @error('banner_sub_heading') is-invalid @enderror" />
                                        @error('banner_sub_heading')
                                            <span class=" invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>CTA Text</label>
                                        <input type="text" name="cta_btn_text" value="{{ $banner->cta_btn_text }}"
                                            class="form-control @error('cta_btn_text') is-invalid @enderror" />
                                        @error('cta_btn_text')
                                            <span class=" invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>CTA Link</label>
                                        <input type="text" name="cta_btn_link" value="{{ $banner->cta_btn_link }}"
                                            class="form-control @error('cta_btn_link') is-invalid @enderror" />
                                        @error('cta_btn_link')
                                            <span class=" invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Update Banner" name="Add New" />
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
