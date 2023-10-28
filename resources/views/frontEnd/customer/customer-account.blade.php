@extends('frontEnd.master')
@section('title')
Customer-Account | | page
@endsection
@section('content')
      <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Customer Account</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Login Content Area -->
            <div class="page-section mb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                            <!-- Login Form s-->
                            <form action="#" >
                                <div class="login-form">
                                    <h4 class="login-title">Hello Riaz...</h4>
                                    
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                            <form action="#">
                                <div class="login-form">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam
                                         incidunt saepe, beatae cupiditate quas labore ipsa ea dolor est culpa?</p>
                                         <div class="default-btn slide-btn">
                                            <a class="links" href="">Logout</a>
                                        </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endsection
           