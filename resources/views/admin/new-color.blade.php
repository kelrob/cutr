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
                            <h6 class="h2 text-white d-inline-block mb-0">New Color</h6>

                        </div>
                        {{-- <div class="col-lg-6 col-5 text-right">
                            <a href="{{ url('/admin/category/new') }}" class="btn btn-sm btn-neutral"><i class="ni ni-fat-add"></i>
                                New Product</a>
                        </div> --}}
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
                            <h3 class="mb-0 pb-0">Add New Color</h3>
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
                                <form class="p-4" method="POST" action="{{ url('/admin/add-color') }}"
                                    enctype="multipart/form-data">
                                    @csrf


                                    <div class="form-group">
                                        <label>Color Name</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror" />
                                        @error('name')
                                            <span class=" invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="banner">Select Color Code</label>
                                        <input type="color" name="color_code"
                                            class="form-control @error('color_code') is-invalid @enderror" />
                                        @error('color_code')
                                            <span class=" invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>


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
