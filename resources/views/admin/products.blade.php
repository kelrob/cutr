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
                            <h6 class="h2 text-white d-inline-block mb-0">Products</h6>

                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <a href="{{ url('admin/product/new') }}" class="btn btn-sm btn-neutral"><i class="ni ni-fat-add"></i>
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
                            <h3 class="mb-0">All Products</h3>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">Name</th>
                                        <th scope="col" class="sort" data-sort="status">Category</th>
                                        <th scope="col">Available In Stock</th>
                                        <th scope="col" class="sort" data-sort="completion">Amount</th>
                                        <th scope="col">Visibility</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($products as $product)
                                        <tr>
                                            <th scope="row">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-sm"><a
                                                                href="{{ url('/admin/product/view/' . $product->id) }}">{{ Str::limit($product->name, 20) }}</a></span>
                                                    </div>
                                                </div>
                                            </th>

                                            <td>
                                                <span class="badge badge-dot mr-4">
                                                    <span class="status">{{ $product->category->name }}</span>
                                                </span>
                                            </td>
                                            <td>
                                                {{ $product->goods_in_stock }}
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    &#8358;{{ number_format($product->amount) }}

                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge badge-dot mr-4">
                                                    <i class="{{ $product->visible ? 'bg-success' : 'bg-warning' }}"></i>
                                                    <span
                                                        class="status">{{ $product->visible ? 'Visible' : 'Not Visible' }}</span>
                                                </span>

                                            </td>
                                            <td class="">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary" type="button" id="dropdownMenuButton"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ni ni-bullet-list-67"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">View
                                                            Product</a>
                                                        <a class="dropdown-item"
                                                            href="{{ url('/admin/product/edit/' . $product->id) }}">Edit
                                                            Product</a>
                                                        <a class="dropdown-item" href="#"
                                                            onclick="deleteItem({{ $product->id }})">Delete
                                                            Product</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Card footer -->
                        <div class="card-footer py-4">
                            <nav aria-label="...">
                                <ul class="pagination justify-content-end mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">
                                            <i class="fas fa-angle-left"></i>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2 <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <i class="fas fa-angle-right"></i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const deleteItem = (id) => {

            let action = confirm('Are you sure you want to delele this Product?');

            if (action) {
                $.ajax({
                    url: `/admin/delete-product/${id}`,
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
