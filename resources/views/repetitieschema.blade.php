@extends('layouts.template')

@section('title', 'Repetitieschema')

@section('body')
    @parent

        <!-- <div class="alert alert-success alert-dismissible fade in" role="alert"  style="z-index:1;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            De repetitie is succesvol verwijderd!
        </div> -->

        <!-- @if (session('status')) -->
            <script>alert('De repetitie is succesvol verwijderd!')</script>
        <!-- @endif -->

        <!-- Page Heading/Breadcrumbs -->

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">
                    Repetitieschema
                    <small>Locatie &amp; Tijden</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="active">Repetitieschema</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->




        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Repetitieschema</div>

            <!-- Table -->
            <table class="table">
                <tr><th>#</th><th>Datum</th><th>Tijd</th><th>Locatie</th><th>Adres</th><th>Bijzonderheden</th></tr>
                <!-- {{$id = 1}} -->
                @foreach($rehearsals as $rehearsal)
                    <tr><th>{{$id}}</th><td>{{ date_format(date_create($rehearsal->date), "d-m-Y") }}</td><td>{{$rehearsal->time}}</td><td>{{$rehearsal->location_name}}</td><td>{{$rehearsal->location_address}}</td><td>{{$rehearsal->description}}</td></tr>
                    <!-- {{$id = $id + 1}} -->
                @endforeach
            </table>
        </div>

        <script>
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove();
                });
            }, 5000);
        </script>

@endsection