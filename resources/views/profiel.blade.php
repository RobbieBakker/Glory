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
            <div class="col-md-7">
                <div class="panel panel-default">

                    <div class="panel-heading">Profielfoto aanpassen</div>
                    <div class="panel-body">
                        @if (session('avatarError'))
                            <div class="alert alert-danger">
                                {{ session('avatarError') }}
                            </div>
                        @endif
                        @if (session('avatarSuccess'))
                            <div class="alert alert-success">
                                {{ session('avatarSuccess') }}
                            </div>
                        @endif
                        <div class="col-md-10 col-md-offset-1">
                            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin:25px 25px 25px 0px;">
                            <br><br><br>
                            <form enctype="multipart/form-data" action="/avatar" method="POST">
                                {{ csrf_field() }}
                                <label>Profielfoto aanpassen</label>
                                <input type="file" name="avatar" required>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="pull-right btn btn-sm btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="panel panel-default">
                    <div class="panel-heading">Overzicht profielgegevens</div>
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
                            <label class="col-md-6 control-label">Gebruiker:</label>
                            {{ Auth::user()->role }}
                        </div>

                        <div class="col-md-12">
                            <label class="col-md-6 control-label">Zangstem:</label>
                            {{ Auth::user()->voice }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-7">
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

            <div class="col-md-5">
                <div class="panel panel-default">
                    <div class="panel-heading">Wachtwoord aanpassen</div>
                    <div class="panel-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                <label for="new-password" class="col-md-4 control-label">Current Password</label>

                                <div class="col-md-6">
                                    <input id="current-password" type="password" class="form-control" name="current-password" required>

                                    @if ($errors->has('current-password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('current-password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                <label for="new-password" class="col-md-4 control-label">New Password</label>

                                <div class="col-md-6">
                                    <input id="new-password" type="password" class="form-control" name="new-password" required>

                                    @if ($errors->has('new-password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('new-password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>

                                <div class="col-md-6">
                                    <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Change Password
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>




@endsection