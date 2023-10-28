@extends('admin.master')
@section('title')
Category || page
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
                            <h1>Category edit </h1>
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
                                    <li class="breadcrumb-item active text-primary" aria-current="page">Category</li>
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
                    <h4 class="card-title">Category</h4>
                    <p class="text-success text-center">{{session('message')}}</p>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('category.update',$category->id)}}" method="POST" class="form-horizontal">
                    @csrf 
                    <div class="form-group">
                        <label class="control-label" for="name">Category name</label>
                        <div class="mb-2">
                            <input type="text" class="form-control" value="{{$category->name}}" name="name"/>
                        </div>
                        <p class="text-danger ">{{$errors->has('name') ? $errors->first('name'): ''}}</p>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="name">Status</label>
                        <div class="mb-2">
                           <select name="status" class="form-control" >
                            <option value="1" {{$category->status == 1 ? 'selected': ''}}>Active</option>
                            <option value="0" {{$category->status == 0 ? 'selected': ''}}>Inactive</option>

                           </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
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
