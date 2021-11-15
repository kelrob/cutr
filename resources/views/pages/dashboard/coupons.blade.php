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
                            <h6 class="h2 text-white d-inline-block mb-0">All Coupons</h6>

                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <a href="{{ url('coupon/new') }}" class="btn btn-sm btn-neutral"><i class="ni ni-fat-add"></i>
                                New Coupon</a>
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
                            <h3 class="mb-0">All Coupon</h3>
                        </div>
                        <!-- Light table -->

                        @if (count($coupons) == 0)
                            <hr class="m-1" />

                            <h3 class="text-center p-3">No Coupon Found</h3>
                        @else
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="sort" data-sort="name">SN</th>
                                            <th scope="col" class="sort" data-sort="budget">Coupon Code</th>
                                            <th scope="col" class="sort" data-sort="budget">Percentage Off</th>
                                            <th scope="col" class="sort" data-sort="budget">Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @foreach ($coupons as $coupon)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="media align-items-center">

                                                        <div class=" media-body">
                                                            <span class="name mb-0 text-sm">{{ $coupon->code }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $coupon->percentage_off }}%</td>
                                                <td>
                                                    {{ $coupon->is_active ? 'Active' : 'Not Active' }}
                                                </td>

                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary" type="button"
                                                            id="dropdownMenuButton" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i class="ni ni-bullet-list-67"></i>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item"
                                                                href="{{ url('edit-coupon/' . base64_encode($coupon->id)) }}">Edit
                                                                Coupon</a>
                                                            <a class="dropdown-item" href="#"
                                                                onclick="deleteItem({{ $coupon->id }})">Delete
                                                                Coupon</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const deleteItem = (id) => {

            let action = confirm('Are you sure you want to delele this coupon?');

            if (action) {
                $.ajax({
                    url: `/delete-coupon/${id}`,
                    type: "GET",
                    success: function(response) {
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    },
                });
            }
        }
    </script>

@endsection
