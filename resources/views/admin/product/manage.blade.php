@extends('admin.master')
@section('title')
    Product Manage || page
@endsection
@section('content')
    <!-- begin app-main -->
    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <!-- begin row -->
            <div class="row">
                <div class="col-md-12 m-b-30">
                    <!-- begin page title -->
                    <div class="d-block d-sm-flex flex-nowrap align-items-center">
                        <div class="page-title mb-2 mb-sm-0">
                            <h1>Product manage</h1>

                        </div>

                        <div class="ml-auto d-flex align-items-center">
                            <nav>
                                <ol class="breadcrumb p-0 m-b-0">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"><i class="ti ti-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        Tables
                                    </li>
                                    <li class="breadcrumb-item active text-primary" aria-current="page">Data manage</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- end page title -->
                    <h4>
                        <p class="text-success text-center">{{ session('message') }}</p>
                    </h4>
                </div>
            </div>
            <!-- end row -->
            <!-- begin row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <div class="datatable-wrapper table-responsive">
                                <table id="datatable" class="display compact table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Category Name</th>
                                            <th>Sub category Name</th>
                                            <th>Brand Name</th>
                                            <th>Product Name</th>
                                            <th>Reguler Price</th>
                                            <th>Image</th>
                                            <th>Featured Status</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $product->category->name }}</td>
                                                <td>{{ $product->Sub_category->name }}</td>
                                                <td>{{ $product->brand->name }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->regular_price }}</td>

                                                <td><img src="{{ $product->image }}" width="50" height="50"
                                                        alt="Product image"></td>

                                                <td>{{ $product->featured_status == 1 ? 'Hot Deals Products' : 'Trendding Products' }}</td>
                                                <td>{{ $product->status == 1 ? 'Active' : 'inactive' }}</td>
                                                <td class="d-flex">
                                                    <a href="{{route('product.show',$product->id)}}" class="btn btn-primary">
                                                        <i class="ti ti-eye"></i>
                                                    </a>
                                                    &nbsp;
                                                   
                                                    <a href="{{route('product.updateStatus',$product->id)}}"class="btn {{$product->featured_status == 1 ? 'btn-success' : 'btn-warning'}}">
                                                        <i class="ti  ti-reload"></i></a>

                                                    &nbsp;
                                                    <a href="{{ route('product.edit', $product->id) }}"
                                                        class="btn btn-primary"><i class="ti ti-pencil-alt "></i>edit</a>
                                                    &nbsp;
                                                    <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger"><i class="ti ti-pencil-alt "></i>Delete</button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end app-main -->
@endsection
