@extends('layouts.frontend2')
@section('title', 'Vigilium - Contactez-Nous')

@section('content')
<div class="preloader"></div>
<div class="breadcroumb-area contact-bg">
    <div class="overlay-2"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcroumb-title text-center">
                    <h1>Contactez-Nous</h1>
                    <h6><a href="{{ route('index') }}">Accueil</a> / Contactez-Nous</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Contact Page Google Map Start-->
 <div class="contact-page-google-map">
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3359.2156438445377!2d-2.2936754376828103!3d53.4626665378156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bae72e7e47f69%3A0x6c930e96df4455fe!2sOld%20Trafford!5e0!3m2!1sen!2sbd!4v1661768864802!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<!-- Contact Section  -->

<div class="contact-section section-padding">
<div class="container">
    <div class="row">
        <div class="col-xl-4 col-lg-4">
            <div class="contact-wrapper">
                <div class="contact-inner">
                    <div class="contact-headline">
                        <h3>Get Appointment starting a New Project?</h3>
                    </div>
                    <div class="contact-meta-info">
                        <div class="contact-single-info">
                            <i class="las la-map-marker-alt"></i><h6>Adresse</h6>
                            <p>Cotonou, Bénin </p>
                        </div>
                        <div class="contact-single-info">
                            <i class="las la-phone"></i><h6>Téléphone</h6>
                            <p>+229 0166539345 </p>
                        </div>
                        <div class="contact-single-info">
                            <i class="las la-envelope"></i><h6>Adresse E-mail</h6>
                            <p>info@vigilium.com </p>                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8">
            <div class="contact-form-wrap">
                <div class="section-title">
                    <h6>Let's Get In Touch</h6>
                    <h2>Send Us a Message</h2>
                    <p>Please put up a topic below reated to your inquiry. If you dont find what you need fill out our contract form. </p>
                </div>
                <div class="contact_form">
                    <form action="https://www.iideainformatics.it/html/devgalaxy/ecofix_v1_1/assets/inc/sendemail.php" class="comment-one_form contact-form-validated" novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div>
                                    <input type="text" placeholder="Your Name" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div>
                                    <input type="email" placeholder="Email Address" name="email">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div>
                                    <input type="text" placeholder="Phone Number" name="phone">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div>
                                    <input type="email" placeholder="Subject" name="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div>
                                    <textarea name="message" placeholder="Write a Message"></textarea>
                                </div>
                                <button type="submit" class="main-btn">send a message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection