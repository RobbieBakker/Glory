<!-- app/views/agenda/create.blade.php -->

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
        <a class="navbar-brand" href="{{ URL::to('agenda') }}">Agenda Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('agenda') }}">View All Agenda items</a></li>
        <li><a href="{{ URL::to('agenda/create') }}">Create a Agenda</a>
    </ul>
</nav>

<h1>Create a Agenda</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::open(array('url' => 'agenda')) }}

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
        {{ Form::label('img_url', 'Afbeeldings url') }}
        {{ Form::text('img_url', Input::old('img_url'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('website_url', 'Website url') }}
        {{ Form::text('website_url', Input::old('website_url'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create the Agenda item!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>