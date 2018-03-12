@extends('layouts.template')

@section('title', 'Het koor')

@section('body')
@parent

<!-- Page Heading/Breadcrumbs -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Christelijk Jongerenkoor Glory
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li>Home</li>
            <li>Web-info</li>
        </ol>
    </div>
</div>
<!-- /.row -->

<!-- Intro Content -->
<div class="row">
    <div class="col-md-6" style="margin-top:70px">
        <img class="img-responsive" src="../images/laravel.png" alt="">
    </div>
    <div class="col-md-6">
        <h2>@version('small')</h2>
        <p>@version('full')</p>
    </div>
</div>



@endsection