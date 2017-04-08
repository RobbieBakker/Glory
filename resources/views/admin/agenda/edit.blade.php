@extends('layouts.adminTemplate')

@section('title', 'Agendapunt aanpassen')

@section('body')
    @parent

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Agenda bewerken
                    <small>{{ $agendaItem->title }}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- if there are creation errors, they will show here -->
        {{ Html::ul($errors->all()) }}

        {{ Form::model($agendaItem, array('route' => array('agenda.update', $agendaItem->id), 'method' => 'PUT')) }}

            <div class="form-group">
                {{ Form::label('date', 'Date') }}
                {{ Form::date('date', Input::old('date'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('start_time', 'Starttijd') }}
                {{ Form::time('start_time', Input::old('start_time'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('end_time', 'Eindtijd') }}
                {{ Form::time('end_time', Input::old('end_time'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('title', 'Titel') }}
                {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('text', 'Tekst') }}
                {{ Form::text('text', Input::old('text'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('location_name', 'Locatienaam') }}
                {{ Form::text('location_name', Input::old('location_name'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('location_address', 'Locatieadres') }}
                {{ Form::text('location_address', Input::old('location_address'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('price', 'Prijs') }}
                {{ Form::number('price', Input::old('price'), array('class' => 'form-control', 'step' => 'any')) }}
            </div>

            <div class="form-group">
                {{ Form::label('img_url', 'Afbeeldings url') }}
                {{ Form::text('img_url', Input::old('img_url'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('website_url', 'Website url') }}
                {{ Form::url('website_url', Input::old('website_url'), array('class' => 'form-control')) }}
            </div>

            {{ Form::submit('Opslaan!', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

@endsection