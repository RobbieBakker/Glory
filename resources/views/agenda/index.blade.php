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

            <!-- Agenda item -->
            <div class="row">
                <div class="col-md-7">
                    <a href="{{ URL::to('agenda/' . $agendaItem->id) }}">
                        <img class="img-responsive img-hover" src="http://placehold.it/700x300" alt="">
                    </a>
                </div>
                <div class="col-md-5">
                    <h2>{{ $agendaItem->title }}</h2>
                    <h2><small>{{ $agendaItem->date }} {{ $agendaItem->start_time }}</small></h2>
                    <p><b>Locatie: </b> {{ $agendaItem->location_name }}: {{ $agendaItem->location_address }}</p>
                    <p><b>Toegangsprijs:</b> @if($agendaItem->price == "0.00") Gratis @else &euro;{{ number_format($agendaItem->price, 2, ',', ' ') }}  @endif</p>
                    <a class="btn btn-primary" href="{{ URL::to('agenda/' . $agendaItem->id) }}">Lees meer</i></a>
                </div>
            </div>
            <!-- /.row -->

            <hr>
        @endforeach


        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Datum</td>
                    <td>Starttijd</td>
                    <td>Eindtijd</td>
                    <td>Titel</td>
                    <td>Beschrijving</td>
                    <td>Naam locatie</td>
                    <td>Adres locatie</td>
                    <td>Afbeelding url</td>
                    <td>Website url</td>
                </tr>
            </thead>
            <tbody>
            @foreach($agendaItems as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->date }}</td>
                    <td>{{ $value->start_time }}</td>
                    <td>{{ $value->end_time }}</td>
                    <td>{{ $value->title }}</td>
                    <td>{{ $value->text }}</td>
                    <td>{{ $value->location_name }}</td>
                    <td>{{ $value->location_address }}</td>
                    <td>{{ $value->img_url }}</td>
                    <td>{{ $value->website_url }}</td>

                    <!-- we will also add show, edit, and delete buttons -->
                    <td>

                        <!-- delete the agenda item (uses the destroy method DESTROY /agenda/{id} -->
                        <!-- we will add this later since its a little more complicated than the other two buttons -->
                        {{ Form::open(array('url' => 'agenda/' . $value->id, 'class' => 'pull-right')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete this agenda item', array('class' => 'btn btn-warning')) }}
                        {{ Form::close() }}

                        <!-- delete the agenda item (uses the destroy method DESTROY /agenda/{id} -->
                        <!-- we will add this later since its a little more complicated than the other two buttons -->

                        <!-- show the agenda item (uses the show method found at GET /agenda/{id} -->
                        <a class="btn btn-small btn-success" href="{{ URL::to('agenda/' . $value->id) }}">Show this agenda item</a>

                        <!-- edit this agenda item (uses the edit method found at GET /agenda/{id}/edit -->
                        <a class="btn btn-small btn-info" href="{{ URL::to('agenda/' . $value->id . '/edit') }}">Edit this agenda item</a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

@endsection

