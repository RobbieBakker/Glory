<!-- app/views/agenda/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('agenda') }}">Agenda Item Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('agenda') }}">View All Agenda items</a></li>
        <li><a href="{{ URL::to('agenda/create') }}">Create a agenda item</a>
    </ul>
</nav>

<h1>Edit {{ $agendaItem->title }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($agendaItem, array('route' => array('agenda.update', $agendaItem->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('date', 'Datum') }}
        {{ Form::text('date', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('start_time', 'Starttijd') }}
        {{ Form::text('start_time', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('end_time', 'Eindtijd') }}
        {{ Form::text('end_time', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('title', 'Titel') }}
        {{ Form::text('title', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('text', 'Tekst') }}
        {{ Form::text('text', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('location_name', 'Locatienaam') }}
        {{ Form::text('location_name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('location_address', 'Locatieadres') }}
        {{ Form::text('location_address', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('img_url', 'Url afbeelding') }}
        {{ Form::text('img_url', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('website_url', 'Url Website') }}
        {{ Form::text('website_url', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the Agenda item!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>