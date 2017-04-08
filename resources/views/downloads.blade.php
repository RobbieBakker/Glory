@extends('layouts.template')

@section('title', 'Het koor')

@section('body')
    @parent

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li>Home</li>
                    <li>Ledenportaal</li>
                    <li class="active">Downloads</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row" >
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-users"></i>Statuten</h4>
                    </div>
                    <div class="panel-body" style="text-align:center">
                        <p>Bij de oprichting zijn de statuten vastgesteld. Deze statuten zijn een leidraad voor het handelen van de leden en het bestuur. Naast de statuten is er ook een huishoudelijk reglement. Hierin zijn lopende zaken met betrekking tot repetitieavonden, uitvoeringen, bestuursvergaderingen, jaarvergaderingen en de muziekcommissie beschreven. Beide bestanden zijn hieronder te downloaden.</p>
                        <a class="btn btn-primary" href="/downloadStatuten" style="background-color:#333; border-color:#333">Download</i></a>
                        <a class="btn btn-primary" href="/downloadReglement" style="background-color:#333; border-color:#333">Download</i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-users"></i>Nieuwbrief</h4>
                    </div>
                    <div class="panel-body" style="text-align:center">
                        <p>Download via onderstaande knop de laatste nieuwsbrief.</p>
                        <a class="btn btn-primary" href="" style="background-color:#333; border-color:#333">Download</i></a>
                    </div>
                </div>
            </div>
        </div>

@endsection