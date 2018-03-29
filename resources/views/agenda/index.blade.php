@extends('layouts.template')

@section('title', 'Agenda')

@section('body')
    @parent

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Agenda
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Agenda</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- will be used to show any messages -->
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        @foreach($agendaItems as $key => $agendaItem)
            <hr>
            <!-- Agenda item -->
            <div class="row">
                <div class="col-md-7" style="height:300px; overflow:hidden;">
                    <a href="{{ URL::to('agenda/' . $agendaItem->id) }}">
                        <img class="img-responsive img-hover" src="/uploads/posters/{{ $agendaItem->image }}" alt="" >
                    </a>
                </div>
                <div class="col-md-5">
                    <h2>{{ $agendaItem->title }}</h2>
                    <h2><small>{{ date_format(date_create($agendaItem->date),"d-m-Y") }} {{ $agendaItem->start_time }}</small></h2>
                    <p><b>Locatie: </b> {{ $agendaItem->location_name }}: {{ $agendaItem->location_address }}</p>
                    <p><b>Toegangsprijs:</b> @if($agendaItem->price == "0.00") Gratis @else &euro;{{ number_format($agendaItem->price, 2, ',', ' ') }}  @endif</p>
                    <a class="btn btn-primary" href="{{ URL::to('agenda/' . $agendaItem->id) }}">Lees meer</i></a>
                </div>
            </div>
            <!-- /.row -->
        @endforeach

@endsection

