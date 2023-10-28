@extends('admin.master')
@section('title')
    Product Show || page
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
                            <h1>Product Show </h1>
                        </div>
                        <div class="ml-auto d-flex align-items-center">
                            <nav>
                                <ol class="breadcrumb p-0 m-b-0">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"><i class="ti ti-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        Forms
                                    </li>
                                    <li class="breadcrumb-item active text-primary" aria-current="page">Product</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- end page title -->
                </div>
            </div>
            <!-- end row -->
            <!-- start Validation row -->
            <div class="row formavlidation-wrapper">
                <div class="col-xl-6">
                    <div class="card card-statistics">
                        <div class="card-header">
                            <div class="card-heading">
                                <h4 class="card-title">Product</h4>

                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-nowrap border-bottom">
                                <tbody>
                                    <tr>
                                        <th>Product Name</th>
                                        <td>{{$product->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Product Code</th>
                                        <td>{{$product->code}}</td>
                                    </tr>
                                    <tr>
                                        <th>Category Name</th>
                                        <td>{{$product->category->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Sub Category Name</th>
                                        <td>{{$product->sub_category->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Brand Name</th>
                                        <td>{{$product->brand->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Unit</th>
                                        <td>{{$product->unit->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Regular Price</th>
                                        <td>{{$product->regular_price}}</td>
                                    </tr>
                                    <tr>
                                        <th>Selling Price</th>
                                        <td>{{$product->selling_price}}</td>
                                    </tr>
                                    <tr>
                                        <th>Stock Amount</th>
                                        <td>{{$product->stock_amount}}</td>
                                    </tr>
                                    <tr>
                                        <th>Reorder Label</th>
                                        <td>{{$product->reorder_label}}</td>
                                    </tr>
                                    <tr>
                                        <th>Short Description</th>
                                        <td>{{$product->short_description}}</td>
                                    </tr>
                                    <tr>
                                        <th>Long Description</th>
                                        <td>{!! $product->long_description !!}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        <td>
                                            <img src="{{asset($product->image)}}" width="100" height="100"
                                                alt="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Other Images</th>
                                        <td>
                                            @foreach ($product->othersImage as $otherImage)
                                                <img src="{{asset($otherImage->image)}}" width="100" height="100"
                                                    alt="Product Other Image"> &nbsp;
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Feature Status</th>
                                        <td>
                                            {{$product->featured_status == 1 ? 'Hot Deals Products' : 'Trendding Products'}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>
                                            {{$product->status == 1 ? 'Active' : 'Inactive'}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Validation row  -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end app-main -->
@endsection
