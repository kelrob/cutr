@extends('layouts.app')

@section('main-section')
    @include('includes.sidebar')
    <div class="main-content" id="panel">
        <!-- Topnav -->
        @include('includes.topnav')
        <!-- Header -->
        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0">Default</h6>

                        </div>
                        <div class="col-lg-6 col-5 text-right">

                        </div>
                    </div>
                    <!-- Card stats -->
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Total Products</h5>
                                            <span
                                                class="h2 font-weight-bold mb-0">{{ number_format($productCount) }}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                                <i class="ni ni-box-2"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-3 text-sm">

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Total Categories</h5>
                                            <span
                                                class="h2 font-weight-bold mb-0">{{ number_format($categoryCount) }}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div
                                                class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                                <i class="ni ni-bullet-list-67"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-sm">

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Total Orders</h5>
                                            <span
                                                class="h2 font-weight-bold mb-0">{{ number_format(count($orders)) }}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                                <i class="ni ni-cart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-sm">

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Total Users</h5>
                                            <span class="h2 font-weight-bold mb-0">{{ count($users) }}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                                <i class="ni ni-satisfied"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-sm">

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0">Recent Orders</h3>
                                </div>
                                <div class="col text-right">
                                    <a href="{{ url('orders') }}" class="btn btn-sm btn-primary">See all</a>
                                </div>
                            </div>
                        </div>
                        @if (count($orders) == 0)
                            <div>
                                <hr class="my-3">
                                <h3 class="text-center p-3">No Recent Orders</h3>
                            </div>
                        @else
                            <div class="table-responsive">
                                <!-- Projects table -->
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Product</th>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Order Date</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <th scope="row">
                                                    /argon/
                                                </th>
                                                <td>
                                                    4,569
                                                </td>
                                                <td>
                                                    340
                                                </td>
                                                <td>
                                                    <i class="fas fa-arrow-up text-success mr-3"></i> 46,53%
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        @endif

                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0">Recent Users</h3>
                                </div>
                                <div class="col text-right">
                                    <a href="#!" class="btn btn-sm btn-primary">See all</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <!-- Projects table -->
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Date Registered</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <th scope="row">
                                                {{ $user->firstname . ' ' . $user->lastname }}
                                            </th>
                                            <td>
                                                {{ $user->created_at->format('D, jS M Y') }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @include('includes.footer')
        </div>
    </div>

@endsection
