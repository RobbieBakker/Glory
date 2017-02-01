@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                            <label for="firstName" class="col-md-4 control-label">Voornaam</label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                @if ($errors->has('firstName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
                            <label for="lastName" class="col-md-4 control-label">Achternaam</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control" name="lastName" value="{{ old('lastName') }}" required autofocus>

                                @if ($errors->has('lastName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                            <label for="birthday" class="col-md-4 control-label">Geboortedatum</label>

                            <div class="col-md-6">
                                <input id="birthday" type="date" class="form-control" name="birthday" value="{{ old('birthday') }}" required autofocus>

                                @if ($errors->has('birthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!--<div class="form-group{{ $errors->has('voice') ? ' has-error' : '' }}">
                            <label for="voice" class="col-md-4 control-label">Stemgroep</label>

                            <div class="col-md-6">
                                <input id="voice" type="text" class="form-control" name="voice" value="{{ old('voice') }}" required autofocus>

                                @if ($errors->has('voice'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('voice') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>-->

                        <div class="form-group{{ $errors->has('voice') ? ' has-error' : '' }}">
                            <label for="voice" class="col-md-4 control-label">Stemgroep</label>

                            <div class="col-md-6">
                                <select name="voice">
                                    <option value="Sopraan">Sopraan</option>
                                    <option value="Alt">Alt</option>
                                    <option value="Tenor">Tenor</option>
                                    <option value="Bas">Bas</option>
                                </select>

                                @if ($errors->has('voice'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('voice') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('admin') ? ' has-error' : '' }}">
                            <label for="admin" class="col-md-4 control-label">Rechten</label>

                            <div class="col-md-6">
                                <input id="admin" type="radio" name="admin" value="false" autofocus>Gebruiker<br>
                                <input id="admin" type="radio" name="admin" value="true" autofocus>Admin

                                @if ($errors->has('admin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('admin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Wachtwoord</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Wachtwoord bevestigen</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
