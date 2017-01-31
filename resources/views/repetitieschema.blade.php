@extends('layouts.app')

@section('title', 'Repetitieschema')

@section('body')
    @parent

        <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Repetitieschema
                        <small>Locatie &amp; Tijden</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li class="active">Repetitieschema</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->



            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Repetitieschema 2016-2017</div>

                <!-- Table -->
                <table class="table">
                    <tr><th>#</th><th>Datum</th><th>Locatie</th><th>Tijd</th></tr>
                    <tr><th>4</th><td>08-02-2017</td><td>Nieuwe Kerk: Nieuweweg 57, Hardinxveld-Giessendam</td><td>19:30-21:00</td></tr>
                    <tr><th>5</th><td>22-02-2017</td><td>Nieuwe Kerk: Nieuweweg 57, Hardinxveld-Giessendam</td><td>19:30-21:00</td></tr>
                    <tr><th>6</th><td>01-03-2017</td><td>Nieuwe Kerk: Nieuweweg 57, Hardinxveld-Giessendam</td><td>19:30-21:00</td></tr>
                    <tr><th>7</th><td>15-03-2017</td><td>Nieuwe Kerk: Nieuweweg 57, Hardinxveld-Giessendam</td><td>19:30-21:00</td></tr>
                    <tr><th>8</th><td>29-03-2017</td><td>Nieuwe Kerk: Nieuweweg 57, Hardinxveld-Giessendam</td><td>19:30-21:00</td></tr>
                    <tr><th>9</th><td>05-04-2017</td><td>Nieuwe Kerk: Nieuweweg 57, Hardinxveld-Giessendam</td><td>19:30-21:00</td></tr>
                    <tr><th>10</th><td>19-04-2017</td><td>Zorgcentrum Pedaja: Claversweer 1, Hardinxveld-Giessendam</td><td>19:30-21:00</td></tr>
                    <tr><th>11</th><td>10-05-2017</td><td>Nieuwe Kerk: Nieuweweg 57, Hardinxveld-Giessendam</td><td>19:30-21:00</td></tr>
                    <tr><th>12</th><td>24-05-2017</td><td>Nieuwe Kerk: Nieuweweg 57, Hardinxveld-Giessendam</td><td>19:30-21:00</td></tr>
                    <tr><th>13</th><td>07-06-2017</td><td>Nieuwe Kerk: Nieuweweg 57, Hardinxveld-Giessendam</td><td>19:30-21:00</td></tr>
                    <tr><th>14</th><td>21-06-2017</td><td>Nieuwe Kerk: Nieuweweg 57, Hardinxveld-Giessendam</td><td>19:30-21:00</td></tr>
                    <tr><th>15</th><td>05-07-2017</td><td>Nieuwe Kerk: Nieuweweg 57, Hardinxveld-Giessendam (Generale repetitie)</td><td>19:30-21:00</td></tr>
                </table>
            </div>

@endsection