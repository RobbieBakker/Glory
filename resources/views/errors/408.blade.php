@extends('layouts.errorTemplate')

@section('title', '408 Request timeout')

@section('body')
    @parent

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Contact
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li>Home</li>
                <li class="active">Error</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Page Heading/Breadcrumbs -->
    <div class="row" style="text-align:center">
        <div class="col-lg-12">
            <div class="content">
                <div class="title">Timeout!</div>
                <div class="title" style="font-size:50px">Probeer het nog eens!</div>
            </div>
        </div>
    </div>
    <!-- /.row -->


@endsection
