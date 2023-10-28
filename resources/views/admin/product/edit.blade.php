@extends('admin.master')
@section('title')
Product edit|| page
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
                            <h1>Product edit </h1>
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
                                <p class="text-success text-center">{{session('message') }}</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('product.update',$product->id)}}" method="POST"
                                class="form-horizontal"enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label class="control-label" for="category_id">Category</label>
                                    <div class="mb-2">
                                        <select name="category_id" class="form-control" id="category_id">
                                            <option value="" disabled selected>Select Category</option>
                                         @foreach ($categories as $category )
                                             <option value="{{$category->id}}" @selected($category->id == $product->category_id)>{{$category->name}}</option>
                                         @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="sub_category_id">Sub Category</label>
                                    <div class="mb-2">
                                        <select name="sub_category_id" class="form-control" id="sub_category_id">
                                            <option value=""  disabled selected>Select Sub Category</option>
                                            @foreach ($sub_categories as $sub_category )
                                            <option value="{{$sub_category->id}}"@selected($sub_category->id == $product->sub_category_id)>{{$sub_category->name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="brand_id">Brand</label>
                                    <div class="mb-2">
                                        <select name="brand_id" class="form-control" id="brand_id">
                                            <option value=""  disabled selected>Select Brand</option>
                                            @foreach ($brands as $brand )
                                                <option value="{{$brand->id}}"@selected($brand->id == $product->brand_id)>{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="nunit_idame">Unit</label>
                                    <div class="mb-2">
                                        <select name="unit_id" class="form-control" id="unit_id">
                                            <option value="" disabled selected>Select Unit</option>
                                        @foreach ($units as $unit )
                                            <option value="{{$unit->id}}" @selected($unit->id == $product->unit_id)>{{$unit->name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="name">Product Name</label>
                                    <div class="mb-2">
                                        <input type="text" class="form-control" name="name" value="{{$product->name}}"  id="name" />
                                    </div>
                                    <p class="text-danger">{{$errors->has("name") ? $errors->first('name'): ''}}</p>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="code">Product Code</label>
                                    <div class="mb-2">
                                        <input type="text"class="form-control" name="code" value="{{$product->code}}" id="code" />
                                    </div>
                                    <p class="text-danger">{{$errors->has("code") ? $errors->first('code'): ''}}</p>
                                </div>
                              <div class="form-group">
                                    <label class="control-label" for="product_price">Product Price</label>
                                    <div class="mb-2">
                                        <div class="input-group">
                                            <input type="text" id="product_price" name="regular_price" value="{{$product->regular_price}}" placeholder="Reguler Price"
                                                class="form-control">
                                            <input type="text" id="product_price" name="selling_price" value="{{$product->selling_price}} " placeholder="Selling Price"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <p class="text-danger">{{$errors->has("regular_price") ? $errors->first('regular_price'): ''}}</p>
                                     <p class="text-danger">{{$errors->has("selling_price") ? $errors->first('selling_price'): ''}}</p>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="stock_stutas">Stock Status</label>
                                    <div class="mb-2">
                                        <div class="input-group">
                                            <input type="text" id="stock_stutas" name="stock_amount" value="{{$product->stock_amount}}"  placeholder="Stock  Amount"
                                                class="form-control">
                                            <input type="text" id="stock_stutas" name="reorder_label" value="{{$product->reorder_label}}" placeholder="Reorder Label"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="image">image</label>
                                    <div class="mb-2">
                                        <input type="file"  accept="image/*" class="form-control" name="image" id="image">
                                        <img src="{{asset($product->image)}}" width="50" height="50" alt="Product Image">
                                    </div>
                                    <p class="text-danger">{{$errors->has("image") ? $errors->first('image'): ''}}</p>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="othrs_image">Others image</label>
                                    <div class="mb-2">
                                        <input type="file" accept="image/*" id="others_image" class="form-control" name="others_image[]" multiple >
                                        <br>
                                        @foreach($product->othersImage as $otherImage)
                                            <img src="{{asset($otherImage->image)}}" width="50" height="50" alt="Product Other Image" > &nbsp;
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="editor">Short Description</label>
                                    <div class="mb-2 quill-editor">
                                        <textarea name="short_description" class="form-control" id="editor"  placeholder="Product sort description" cols="30"
                                            rows="5">{{$product->short_description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="summernote">long Description</label>
                                    <div class="mb-2 summernote">
                                        <textarea name="long_description" class="form-control" id="summernote"  placeholder="Product long description"
                                            cols="30" rows="10">{{$product->long_description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>

                            </form>
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
