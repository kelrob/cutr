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
                            <h6 class="h2 text-white d-inline-block mb-0">All Colors</h6>

                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <a href="{{ url('/admin/color/new') }}" class="btn btn-sm btn-neutral"><i
                                    class="ni ni-fat-add"></i>
                                New Color</a>
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
                            <h3 class="mb-0">All Colors</h3>
                        </div>
                        <!-- Light table -->

                        @if (count($colors) == 0)
                            <hr class="m-1" />

                            <h3 class="text-center p-3">No Color Found</h3>
                        @else
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="sort" data-sort="name">SN</th>
                                            <th scope="col" class="sort" data-sort="budget">Color Code</th>
                                            <th scope="col" class="sort" data-sort="budget">Color Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @foreach ($colors as $color)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="media align-items-center">

                                                        <div class=" media-body">
                                                            <span class="name mb-0 text-sm">{{ $color->name }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    {{ $color->color_code }}
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
                                                                href="{{ url('/admin/edit-color/' . base64_encode($color->id)) }}">Edit
                                                                Color</a>
                                                            <a class="dropdown-item" href="#"
                                                                onclick="deleteItem({{ $color->id }})">Delete
                                                                Color</a>
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

            let action = confirm('Are you sure you want to delele this color?');

            if (action) {
                $.ajax({
                    url: `/admin/delete-color/${id}`,
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
