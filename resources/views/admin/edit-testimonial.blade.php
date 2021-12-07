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
                            <h6 class="h2 text-white d-inline-block mb-0">New Testimonial</h6>

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
                            <h3 class="mb-0 pb-0">Add New Testimonial</h3>
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
                                <form class="p-4" method="POST" action="{{ url('/admin/update-testimonial') }}">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $testimonial->id }}" />

                                    <div class="form-group">
                                        <label>Customer Name</label>
                                        <input type="text" name="customer_name"
                                            class="form-control @error('customer_name') is-invalid @enderror"
                                            value="{{ $testimonial->customer_name }}" />
                                        @error('customer_name')
                                            <span class=" invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Testimonial</label>
                                        <textarea rows="4" class="form-control @error('testimonial') is-invalid @enderror"
                                            name="testimonial">{{ $testimonial->testimonial }}</textarea>

                                        @error('testimonial')
                                            <span class=" invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Update" />
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
