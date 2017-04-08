@extends('layouts.adminTemplate')

@section('title', 'Details')

@section('body')
    @parent

        <!-- Portfolio Item Row -->
        <div class="row" style="padding-top:20px;padding-bottom:20px;">

            <div class="col-md-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="http://placehold.it/465x657" alt="">
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