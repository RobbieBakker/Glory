@extends('layouts.template')

@section('title', $agendaItem->title)

@section('body')
    @parent

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ $agendaItem->title }}
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">{{ $agendaItem->title }}</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="/uploads/posters/{{ $agendaItem->image }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <h3>{{ $agendaItem->title }}</h3>
                <p>{{ $agendaItem->text }}</p>
                <h3>Details</h3>
                <p><b>Locatie:</b> {{ $agendaItem->location_name }}</p>
                <p><b>Adres:</b> {{ $agendaItem->location_address }}</p>
                <p><b>Datum:</b> {{ $agendaItem->date }}</p>
                <p><b>Tijden:</b> {{ $agendaItem->start_time }}-{{ $agendaItem->end_time }}</p>
                <p><b>Toegangsprijs:</b> @if($agendaItem->price == "0.00") Gratis @else &euro;{{ number_format($agendaItem->price, 2, ',', ' ') }}  @endif</p>
                @if ($agendaItem->img_url != "")
                    <p><b>Website:</b> {{ $agendaItem->img_url }}</p>
                @endif
                <p><b>Facebook:</b> <a href="{{ $agendaItem->website_url }}" target="_blank">{{ $agendaItem->website_url }}</a></p>

            </div>

        </div>
        <!-- /.row -->

@endsection