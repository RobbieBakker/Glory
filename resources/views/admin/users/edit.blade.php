@extends('layouts.adminTemplate')

@section('title', 'Index')

@section('body')
    @parent

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Gebruikers</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

         <!-- will be used to show any messages -->
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif


        {{ Form::open(array('url' => 'admin/users/deleteAvatar/' . $user->id)) }}
        {{ Form::hidden('_method', 'PUT') }}
            <div class="form-group">
                <img src="/uploads/avatars/{{ $user->avatar }}" style="width:80px; height:80px; border-radius:50%; margin:25px 25px 25px 0px">


                <button type="submit" class="btn btn-small btn-warning">Profielfoto verwijderen</button>

            </div>
        {{ Form::close() }}


        {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}

            <div class="form-group">
                {{ Form::label('firstName', 'Voornaam') }}
                {{ Form::text('firstName', Input::old('firstName'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('namePrefix', 'Tussenvoegsel') }}
                {{ Form::text('namePrefix', Input::old('namePrefix'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('lastName', 'Achternaam') }}
                {{ Form::text('lastName', Input::old('lastName'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('email', 'E-mail') }}
                {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('birthday', 'Geboortedatum') }}
                {{ Form::date('birthday', Input::old('birthday'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                <label for="voice" class=" control-label">Zangstem</label>
                <br>
                <select name="voice">
                    <option value="Sopraan" @if( Auth::user()->voice == "Sopraan") selected @endif>Sopraan</option>
                    <option value="Alt" @if( Auth::user()->voice == "Alt") selected @endif>Alt</option>
                    <option value="Tenor" @if( Auth::user()->voice == "Tenor") selected @endif>Tenor</option>
                    <option value="Bas" @if( Auth::user()->voice == "Bas") selected @endif>Bas</option>
                </select>
            </div>

            <div class="form-group">
                <label for="role" class=" control-label">Permissies</label>
                <br>
                <select name="role">
                    <option value="user" @if( Auth::user()->role == "user") selected @endif>User</option>
                    <option value="admin" @if( Auth::user()->role == "admin") selected @endif>Admin</option>
                </select>
            </div>

            {{ Form::submit('Opslaan!', array('class' => 'btn btn-primary')) }}
            <a class="btn btn-small btn-warning" href="{{ URL::to('admin/users') }}" title="Annuleren">Annuleren</a>

        {{ Form::close() }}

@endsection