@extends('layouts.adminTemplate')

@section('title', 'Agenda')

@section('body')
    @parent

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Agenda</h1>
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
                        Geplande concerten

                        <!-- show the agenda item (uses the show method found at GET /agenda/{id} -->
                        <a class="btn btn-small btn-success fa fa-plus-circle" href="{{ URL::to('admin/agenda/create') }}" title="Nieuw concert toevoegen"></a>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" style="font-size:11px;">
                            <thead>
                                <tr>
                                    <th>Datum</th>
                                    <th>Titel</th>
                                    <th>Begintijd</th>
                                    <th>Eindtijd</th>
                                    <th>Locatienaam</th>
                                    <th>Locatie adres</th>
                                    <th>Prijs</th>
                                    <th>Website url</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($agendaItems as $key => $value)
                                    <tr>
                                        <td>{{ date_format(date_create($value->date),"d-m-Y") }}</td>
                                        <td>{{ $value->title }}</td>
                                        <td>{{ $value->start_time }}</td>
                                        <td>{{ $value->end_time }}</td>
                                        <td>{{ $value->location_name }}</td>
                                        <td>{{ $value->location_address }}</td>
                                        <td>{{ $value->price }}</td>
                                        <td style="word-wrap:break-word;"><a href="{{ $value->website_url }}" target="_blank">Klik hier</a></td>
                                        <!-- we will also add show, edit, and delete buttons -->
                                        <td style="font-size:16px;">

                                            <!-- show the agenda item (uses the show method found at GET /agenda/{id} -->
                                            <a style="display:inline-block" class="btn btn-small btn-success fa fa-info-circle" href="{{ URL::to('admin/agenda/' . $value->id) }}"></a>

                                            <!-- edit this agenda item (uses the edit method found at GET /admin/agenda/{id}/edit -->
                                            <a style="display:inline-block" class="btn btn-small btn-info fa fa-edit" href="{{ URL::to('admin/agenda/' . $value->id . '/edit') }}"></a>

                                            <!-- delete the agenda item (uses the destroy method DESTROY /agenda/{id} -->
                                            <!-- we will add this later since its a little more complicated than the other two buttons -->
                                            <div style="display:inline-block;">
                                                {{ Form::open(array('url' => 'admin/agenda/' . $value->id)) }}
                                                    {{ Form::hidden('_method', 'DELETE') }}
                                                    <button type="submit" class="btn btn-small btn-warning fa fa-trash"></button>
                                                {{ Form::close() }}
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                                <!-- <tr class="odd gradeX">
                                    <td>Trident</td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>Win 95+</td>
                                    <td class="center">4</td>
                                    <td class="center">X</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr class="even gradeC">
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.0</td>
                                    <td>Win 95+</td>
                                    <td class="center">5</td>
                                    <td class="center">C</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr> -->
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

