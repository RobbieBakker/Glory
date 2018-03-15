@extends('layouts.adminTemplate')

@section('title', 'Index')

@section('body')
    @parent

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nieuwsbrief</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

         <!-- will be used to show any messages -->
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <style>
            .add-table-row td {
                padding-right:10px;
            }
        </style>

        <!-- /.row -->
        <div class="row">
            <div class="col-md-5">
                <div class="panel panel-default">

                    <div class="panel-heading">Nieuwsbrief aanpassen</div>
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

                            <form enctype="multipart/form-data" action="/admin/nieuwsbrief" method="POST">
                                {{ csrf_field() }}
                                <label>Nieuwsbrief uploaden</label>
                                <input type="file" name="newsletter" accept=".pdf, application/pdf" required>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="pull-right btn btn-sm btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>





@endsection