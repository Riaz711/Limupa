@extends('admin.master')
@section('title')
    Product || page
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
                            <h1>Product add </h1>
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
                                <p class="text-success text-center">{{ session('message') }}</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('product.store') }}" method="POST"
                                class="form-horizontal"enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label" for="category_id">Category</label>
                                    <div class="mb-2">
                                        <select name="category_id" class="form-control" id="category_id" onchange="getSubCategoryByCategory(this.value)">
                                            <option value="" disabled selected>Select Category</option>
                                         @foreach ($categories as $category )
                                             <option value="{{$category->id}}">{{$category->name}}</option>
                                         @endforeach
                                        </select>
                                    </div>
                                    <p class="text-danger">{{$errors->has("category_id") ? $errors->first('category_id'): ''}}</p>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="sub_category_id">Sub Category</label>
                                    <div class="mb-2">
                                        <select name="sub_category_id" class="form-control" id="sub_category_id">
                                            <option value="">Select Sub Category</option>
                                            
                                        </select>
                                    </div>
                                    <p class="text-danger">{{$errors->has("sub_category_id") ? $errors->first('sub_category_id'): ''}}</p>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="brand_id">Brand</label>
                                    <div class="mb-2">
                                        <select name="brand_id" class="form-control" id="brand_id">
                                            <option value="" disabled selected>Select Brand</option>
                                            @foreach ($brands as $brand )
                                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <p class="text-danger">{{$errors->has("brand_id") ? $errors->first('brand_id'): ''}}</p>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="nunit_idame">Unit</label>
                                    <div class="mb-2">
                                        <select name="unit_id" class="form-control" id="unit_id">
                                            <option value="" disabled selected>Select Unit</option>
                                        @foreach ($units as $unit )
                                            <option value="{{$unit->id}}">{{$unit->name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <p class="text-danger">{{$errors->has("unit_id") ? $errors->first('unit_id'): ''}}</p>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="name">Product Name</label>
                                    <div class="mb-2">
                                        <input type="text" class="form-control" name="name"  id="name" />
                                    </div>
                                    <p class="text-danger">{{$errors->has("name") ? $errors->first('name'): ''}}</p>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="code">Product Code</label>
                                    <div class="mb-2">
                                        <input type="text"class="form-control" name="code" id="code" />
                                    </div>
                                    <p class="text-danger">{{$errors->has("code") ? $errors->first('code'): ''}}</p>
                                </div>
                              <div class="form-group">
                                    <label class="control-label" for="product_price">Product Price</label>
                                    <div class="mb-2">
                                        <div class="input-group">
                                            <input type="text" id="product_price" name="regular_price" placeholder="Reguler Price"
                                                class="form-control">
                                               
                                            <input type="text" id="product_price" name="selling_price" placeholder="Selling Price"
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
                                            <input type="text" id="stock_stutas" name="stock_amount" placeholder="Stock  Amount"
                                                class="form-control">
                                            <input type="text" id="stock_stutas" name="reorder_label" placeholder="Reorder Label"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="image">image</label>
                                    <div class="mb-2">
                                        <input type="file"  accept="image/*" class="form-control" name="image" id="image"  >
                                    </div>
                                    <p class="text-danger">{{$errors->has("image") ? $errors->first('image'): ''}}</p>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="othrs_image">Others image</label>
                                    <div class="mb-2">
                                       <input type="file" accept="image/*" id="others_image" name="others_image[]"  class="form-control" multiple >
                                    </div>
                                    <p class="text-danger">{{$errors->has("others_image") ? $errors->first('others_image'): ''}}</p>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="editor">Short Description</label>
                                    <div class="mb-2 quill-editor">
                                        <textarea name="short_description" class="form-control" id="editor" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="summernote">long Description</label>
                                    <div class="mb-2 summernote">
                                        <textarea name="long_description" class="form-control" id="summernote" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" value="Sign up">Submit</button>
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
