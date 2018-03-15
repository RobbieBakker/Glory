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

        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Gebruikers

                        <!-- show the agenda item (uses the show method found at GET /agenda/{id} -->
                        <a class="btn btn-small btn-success fa fa-plus-circle" href="{{ URL::to('admin/users/create') }}" title="Nieuwe gebruiker toevoegen"></a>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body" style="overflow-x:auto; white-space:nowrap">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" style="font-size:11px;">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Naam</th>
                                    <th>E-mail</th>
                                    <th>Geboortedatum</th>
                                    <th>Stemgroep</th>
                                    <th>Bevoegdheid</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key => $value)
                                    <tr>

                                        <td style="width:68px; min-width:68px"><img class="img-responsive" src="/uploads/avatars/{{ $value->avatar }}" style="margin:0 auto; width:40px; height:40px; border-radius:50%;"></td>
                                        <td>{{ $value->firstName }}&nbsp;{{ $value->namePrefix }}&nbsp;{{ $value->lastName }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>{{ date_format(date_create($value->birthday), "d-m-Y") }}</td>
                                        <td>{{ $value->voice }}</td>
                                        <td>{{ $value->role }}</td>
                                        <!-- we will also add show, edit, and delete buttons -->
                                        <td style="font-size:16px;">

                                            <!-- edit this agenda item (uses the edit method found at GET /admin/agenda/{id}/edit -->
                                            <a style="display:inline-block" class="btn btn-small btn-info fa fa-edit" href="{{ URL::to('admin/users/' . $value->id . '/edit') }}"></a>

                                            <!-- delete the agenda item (uses the destroy method DESTROY /agenda/{id} -->
                                            <!-- we will add this later since its a little more complicated than the other two buttons -->
                                            <div style="display:inline-block;">
                                                {{ Form::open(array('url' => 'admin/users/' . $value->id)) }}
                                                    {{ Form::hidden('_method', 'DELETE') }}
                                                    <button type="submit" class="btn btn-small btn-warning fa fa-trash"></button>
                                                {{ Form::close() }}
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

@endsection