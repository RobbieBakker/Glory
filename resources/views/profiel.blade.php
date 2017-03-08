@extends('layouts.template')

@section('title', 'Profiel')

@section('body')
    @parent

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Profiel
                    <small></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Profielgegevens aanpassen</div>
                    <div class="panel-body">
                        {!! Form::model($user, ['action' => ['ProfileController@update', 'id' => $user->id], 'method' => 'PUT']) !!}

                            <div class="form-group col-md-8 col-md-offset-2">
                                {!! Form::label('firstName', 'Voornaam') !!}
                                {!! Form::text('firstName', $user->firstName, [
                                    'class' => 'form-control'
                                ]) !!}
                            </div>

                            <div class="form-group col-md-8 col-md-offset-2">
                                {!! Form::label('namePrefix', 'Tussenvoegsel') !!}
                                {!! Form::text('namePrefix', $user->namePrefix, [
                                    'class' => 'form-control'
                                ]) !!}
                            </div>

                            <div class="form-group col-md-8 col-md-offset-2">
                                {!! Form::label('lastName', 'Achternaam') !!}
                                {!! Form::text('lastName', $user->lastName, [
                                    'class' => 'form-control'
                                ]) !!}
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}  col-md-8 col-md-offset-2">
                                {!! Form::label('email', 'E-mail') !!}
                                {!! Form::email('email', $user->email, [
                                    'class' => 'form-control'
                                ]) !!}
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-8 col-md-offset-2">
                                {!! Form::label('birthday', 'Geboortedatum') !!}
                                {!! Form::date('birthday', $user->birthday, [
                                    'class' => 'form-control'
                                ]) !!}
                            </div>

                            <div class="form-group col-md-8 col-md-offset-2">
                                <label for="voice" class=" control-label">Zangstem</label>
                                <br>
                                <select name="voice">
                                    <option value="Sopraan" @if( Auth::user()->voice == "Sopraan") selected @endif>Sopraan</option>
                                    <option value="Alt" @if( Auth::user()->voice == "Alt") selected @endif>Alt</option>
                                    <option value="Tenor" @if( Auth::user()->voice == "Tenor") selected @endif>Tenor</option>
                                    <option value="Bas" @if( Auth::user()->voice == "Bas") selected @endif>Bas</option>
                                </select>
                            </div>

                            <p style="text-align:center"><button type="submit" class="btn btn-primary col-md-4 col-md-offset-4">Update Profiel</button></p>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Profielgegevens</div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <label class="col-md-6 control-label">Naam:</label>
                            {{ Auth::user()->firstName }}&nbsp{{ Auth::user()->namePrefix }}&nbsp{{ Auth::user()->lastName }}
                        </div>

                        <div class="col-md-12">
                            <label class="col-md-6 control-label">E-Mail:</label>
                            {{ Auth::user()->email }}
                        </div>

                        <div class="col-md-12">
                            <label class="col-md-6 control-label">Geboortedatum:</label>
                            {{ Auth::user()->birthday }}
                        </div>

                        <div class="col-md-12">
                            <label class="col-md-6 control-label">Zangstem:</label>
                            {{ Auth::user()->voice }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection