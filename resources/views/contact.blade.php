@extends('layouts.template')

@section('title', 'Contact')

@section('body')
    @parent

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2466.032751295631!2d4.843190015781638!3d51.82383217968835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c683c380ffd211%3A0x6458e0d52013ee77!2sNieuweweg+57%2C+3371+CJ+Hardinxveld-Giessendam!5e0!3m2!1snl!2snl!4v1475342438594" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h2>Repetitielocatie</h2>
                <p>
                    Nieuweweg 57<br>3371 CJ, Hardinxveld-Giessendam<br>
                </p>
                <p style="color:#777; font-size:12px">
                    LET OP! Bovenstaand adres is de repetitielocatie! <i>(Tenzij anders aangegeven)</i>
                </p>
            </div>
            <div class="col-md-4">
                <h2>Contactgegevens</h2>
                <p>
                    Peulenlaan 245<br>3371XL, Hardinxveld-Giessendam<br>
                </p>
                <!--<p>
                    <i class="fa fa-phone"></i>
                    <abbr title="Phone">P</abbr>: 06 23755299
                </p>
                <p>
                    <i class="fa fa-envelope-o"></i>
                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">info@jongerenkoorglory.nl</a>
                </p>-->
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a><i class="fa fa-phone-square fa-2x"></i> 06 23755299</a>
                    </li>
                </ul>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="mailto:name@example.com" target="=_blank"><i class="fa fa-envelope-square fa-2x"></i> info@jongerenkoorglory.nl</a>
                    </li>
                </ul>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.facebook.com/jongerenkoorglory" target="=_blank"><i class="fa fa-facebook-square fa-2x"></i> Christelijk Jongerenkoor Glory</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->



        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <!--<div class="row">
            <div class="col-md-8">
                <h3>Send us a Message</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <!--<button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

        </div>-->
        <!-- /.row -->

@endsection