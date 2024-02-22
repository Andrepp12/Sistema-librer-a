@extends('layouts.master')
@section('content') 
{{-- message --}}
{!! Toastr::message() !!}



<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Welcome {{ Session::get('name') }}!</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">{{ Session::get('name') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
              
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
               
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-6">

               
            </div>
            <div class="col-md-12 col-lg-6">


            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 d-flex">

               

            </div>
            <div class="col-xl-6 d-flex">


            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
               
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
             
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
            
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                
            </div>
        </div>
    </div>
</div>


@endsection
