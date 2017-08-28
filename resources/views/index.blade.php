@extends('layouts.template')

@section('title', 'Home')

@section('body')
    @parent

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/Koor1.jpg');"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/Dirigent3.jpg');"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/Koor2.jpg');"></div>
                <div class="carousel-caption">
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welkom bij Christelijk Jongerenkoor Glory
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-users"></i>Wie wij zijn</h4>
                    </div>
                    <div class="panel-body" style="text-align:center">
                        <p>Benieuwd naar wie wij zijn? Wat wij doen? En wie bijvoorbeeld onze dirigent is?</p>
                        <a class="btn btn-primary" href="/info" style="background-color:#333; border-color:#333">Lees meer...</i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-book"></i>Agenda</h4>
                    </div>
                    <div class="panel-body" style="text-align:center">
                        <p>Bekijk onze agenda. Hier staan concerten en uitvoeringen gepland en beschreven.</p>
                        <a class="btn btn-primary" href="/agenda" style="background-color:#333; border-color:#333">Agenda</i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-pencil"></i>Contact</h4>
                    </div>
                    <div class="panel-body" style="text-align:center">
                        <p>Heb je een vraag? Neem contact met ons op en wij zullen proberen je vraag te beantwoorden.</p>
                        <a class="btn btn-primary" href="/contact" style="background-color:#333; border-color:#333">Neem contact op</i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Team Members -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Ons team</h2>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <a href="/dirigent"><img class="img-responsive" src="images/Dirigent1.jpg" alt=""></a>
                    <div class="caption">
                        <a href="/dirigent" style="text-decoration:none; color:#333333;">
                            <h3>
                                Mark Brandwijk<br>
                                <small>Dirigent</small>
                            </h3>
                        </a>
                        <p>Mark Brandwijk (1994) kreeg op 6-jarige leeftijd zijn eerste orgellessen in zijn woonplaats Krimpen aan den IJssel van Jaap den Besten. In 2006 vervolgde hij zijn lessen bij Everhard Zwart. In het jaar 2006 begon hij ook met het begeleiden van koren. Behalve orgel speelde hij ...</p>
                        <a class="btn btn-primary" href="/dirigent" style="background-color:#333; border-color:#333">Lees meer...</i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <a href="/bestuur"><img class="img-responsive" src="images/Bestuur1.JPG" alt=""></a>
                    <div class="caption">
                        <a href="/bestuur" style="text-decoration:none; color:#333333;">
                            <h3>
                                Bestuur<br>
                                <small> <br /></small>
                            </h3>
                        </a>
                        <p>Het bestuur bestaat uit vijf leden: Anneleen Houtman, Maarten Moerman, Mirthe Boerman, Christine Kruithof, Lenneke Quist. Naast het bestuur zijn er ook leden actief op de achtergrond. Er is een websitebeheerder, een fotograaf van het koor en iemand die de verantwoording draagt voor ...</p>
                        <a class="btn btn-primary" href="/bestuur" style="background-color:#333; border-color:#333">Lees meer...</i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <a href="/info"><img class="img-responsive" src="images/Koor1.JPG" alt=""></a>
                    <div class="caption">
                        <a href="/info" style="text-decoration:none; color:#333333;">
                            <h3>
                                Koor<br>
                                <small> <br /></small>
                            </h3>
                        </a>
                        <p>Christelijk jongerenkoor Glory uit Hardinxveld is opgericht in november 2012. Met dit interkerkelijke koor willen de leden zingen tot eer en glorie van God. Het koor bestaat uit ongeveer vijfentwintig leden in de leeftijd van vijftien tot vijfendertig jaar. Het idee van oprichting ontstond toen...</p>
                        <a class="btn btn-primary" href="/info" style="background-color:#333; border-color:#333">Lees meer...</i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->



        <!-- Our Sponsors -->
        <!--<div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Onze sponsors</h2>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <a href="" target="_">
                    <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <a href="" target="_">
                    <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <a href="" target="_">
                    <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <a href="" target="_">
                    <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
                </a>
            </div>
        </div>-->
        <!-- /.row -->


@endsection