@extends('layouts.adminTemplate')

@section('title', 'Index')

@section('body')
    @parent

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Repetitieschema</h1>
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
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Repetitie toevoegen
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        {{ Form::open(array('url' => 'admin/repetities')) }}
                            <table class="add-table">
                                <thead>
                                    <tr class="add-table-row">
                                        <td>{{ Form::label('date', 'Date') }}</td>
                                        <td>{{ Form::label('start_time', 'Starttijd') }}</td>
                                        <td>{{ Form::label('end_time', 'Eindtijd') }}</td>
                                        <td>{{ Form::label('location_name', 'Locatienaam') }}</td>
                                        <td>{{ Form::label('location_address', 'Locatieadres') }}</td>
                                        <td>{{ Form::label('description', 'Bijzonderheden') }}</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="add-table-row">
                                        <td>{{ Form::date('date', Input::old('date'), array('class' => 'form-control')) }}</td>
                                        <td>{{ Form::time('start_time', Input::old('start_time'), array('class' => 'form-control')) }}</td>
                                        <td>{{ Form::time('end_time', Input::old('end_time'), array('class' => 'form-control')) }}</td>
                                        <td>{{ Form::text('location_name', Input::old('location_name'), array('class' => 'form-control')) }}</td>
                                        <td>{{ Form::text('location_address', Input::old('location_address'), array('class' => 'form-control')) }}</td>
                                        <td>{{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}</td>
                                        <td>{{ Form::submit('Voeg toe', array('class' => 'btn btn-primary')) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            </br>

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>



        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Geplande repetities
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" style="font-size:11px;">
                            <thead>
                                <tr>
                                    <th>Datum</th>
                                    <th>Begintijd</th>
                                    <th>Eindtijd</th>
                                    <th>Locatienaam</th>
                                    <th>Locatie adres</th>
                                    <th>Bijzonderheden</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rehearsals as $key => $value)
                                    <tr>
                                        <td>{{ $value->date }}</td>
                                        <td>{{ $value->start_time }}</td>
                                        <td>{{ $value->end_time }}</td>
                                        <td>{{ $value->location_name }}</td>
                                        <td>{{ $value->location_address }}</td>
                                        <td>{{ $value->description }}</td>
                                        <!-- we will also add show, edit, and delete buttons -->
                                        <td style="font-size:16px;">

                                            <!-- delete the agenda item (uses the destroy method DESTROY /agenda/{id} -->
                                            <!-- we will add this later since its a little more complicated than the other two buttons -->
                                            <div style="display:inline-block;">
                                                {{ Form::open(array('url' => 'admin/repetities/' . $value->id)) }}
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


         <script>
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove();
                });
            }, 5000);
         </script>

@endsection