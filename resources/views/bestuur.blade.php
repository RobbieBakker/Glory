@extends('layouts.template')

@section('title', 'Bestuur')

@section('body')
    @parent

        <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Bestuur
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>Home</li>
                        <li>Informatie</li>
                        <li class="active">Bestuur</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <!-- Intro Content -->
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('images/Bestuur1.JPG') }}" />
                </div>
                <div class="col-md-6">
                    <h2>Het koorbestuur</h2>
                    <p>Het bestuur bestaat uit vijf leden.</p>
                    <ul>
                        <li>Voorzitter: Anneleen Houtman</li>
                        <li>Penningmeester: Maarten Moerman</li>
                        <li>Secretaris: Mirthe Boerman</li>
                        <li>Algemeen bestuurslid: Christine Kruithof</li>
                        <li>Algemeen bestuurslid: Lenneke Quist</li>
                    </ul>
                    <p>Naast het bestuur zijn er ook leden actief op de achtergrond. Er is een websitebeheerder, een fotograaf van het koor en iemand die de verantwoording draagt voor het openen en sluiten van de zanglocatie. Met elkaar wordt er veel geregeld en achter de schermen gedaan, zodat de repetitieavonden vloeiend verlopen.</p>
                    <p>Ook zijn er een aantal leden actief in de muziekcommissie. Samen met de dirigent en het bestuur stellen zij het repertoire samen. Daarnaast kunnen koorleden bij hen terecht voor suggesties.</p>
                </div>
            </div>
            <!-- /.row -->

            <!-- Intro Content -->
            <!--<div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"></h2>
                </div>
                <div class="col-md-6">
                    <h2>Over CJK Glory</h2>
                    <p>Christelijk jongerenkoor Glory uit Hardinxveld is opgericht in november 2012. Met dit interkerkelijke koor willen de leden zingen tot eer en glorie van God. Het koor bestaat uit ongeveer vijfentwintig leden in de leeftijd van vijftien tot vijfendertig jaar.</p>
                    <p>Het idee van oprichting ontstond toen er een zangavond werd georganiseerd in één van de kerken in Hardinxveld, waarvan de opbrengst naar een goed doel zou gaan. Arjan Duijzer was in die gemeente als organist actief en werd gevraagd om te dirigeren. Na de zangavond besloten Arjan en wat zangers om een koor op te richten.</p>
                    <p>Tot oktober 2015 heeft Arjan de leiding gehad over Glory en werden er ongeveer drie concerten per jaar georganiseerd.</p>
                    <p>In november 2015 werd het stokje overgenomen door Mark Brandwijk. Het kerstconcert van december 2016 was de eerste uitvoering onder Marks leiding.</p>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive" src="../images/sheetmusic.jpg" alt="">
                </div>
            </div>-->
            <!-- /.row -->


@endsection