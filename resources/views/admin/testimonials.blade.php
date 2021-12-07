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
                            <h6 class="h2 text-white d-inline-block mb-0">All Testimonials</h6>

                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <a href="{{ url('/admin/testimonial/new') }}" class="btn btn-sm btn-neutral"><i
                                    class="ni ni-fat-add"></i>
                                New Testimonials</a>
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
                            <h3 class="mb-0">All Testimonials</h3>
                        </div>
                        <!-- Light table -->

                        @if (count($testimonials) == 0)
                            <hr class="m-1" />

                            <h3 class="text-center p-3">No Testimonial Found</h3>
                        @else
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="sort" data-sort="name">SN</th>
                                            <th scope="col" class="sort" data-sort="budget">Customer Name</th>
                                            <th scope="col" class="sort" data-sort="budget">Testimonial
                                            </th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @foreach ($testimonials as $testimonial)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $testimonial->customer_name }}
                                                </td>
                                                <td>{{ $testimonial->testimonial }}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary" type="button"
                                                            id="dropdownMenuButton" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i class="ni ni-bullet-list-67"></i>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item"
                                                                href="{{ url('/admin/edit-testimonial/' . base64_encode($testimonial->id)) }}">Edit
                                                                Testimonial</a>
                                                            <a class="dropdown-item" href="#"
                                                                onclick="deleteItem({{ $testimonial->id }})">Delete
                                                                Testimonial</a>
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

            let action = confirm('Are you sure you want to delele this testimonial?');

            if (action) {
                $.ajax({
                    url: `/admin/delete-testimonial/${id}`,
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
