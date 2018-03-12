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
        <h2>Glory (@version('small'))</h2>
        <p>We draaien momenteel op @version.</p>
        <p>Deze web applicatie is gemaakt door en de copyrights bevinden zich bij Robin Bakker. De applicatie is gemaakt als vrijwilligerswerk voor de organisatie van Christelijk Jongerenkoor Glory.</p>
    </div>
</div>



@endsection