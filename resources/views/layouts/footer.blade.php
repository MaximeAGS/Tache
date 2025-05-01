    <!-- Footer Area -->

    <footer class="footer-area">
        <div class="container">
            <div class="footer-up">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="logo">
                            <a href="{{ route('index') }}">
                                <img src="{{asset('img/vigi.png')}}" alt="ecofix-logo" style="max-width: 150px;">
                            </a>
                        </div>
                        <div class="contact-info">
                            <p><b>Location:</b> Cotonou, Bénin</p>
                            <p><b>Phone:</b> +229 0166539345</p>
                            <p><b>E-mail:</b> info@vigilium.com</p>
                            <p><b>Opening Hour:</b> 08.00H</p>
                        </div>

                    </div>
                    <div class="col-lg-5 col-md-6 com-sm-12">

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <h6>Entreprise</h6>
                                <ul>
                                    <li>
                                        <a href="{{ route('about') }}">A Propos</a>
                                        <a href="{{ route('projet') }}">Nos Projets</a>
                                        <a href="{{ route('contact') }}">Contactez-Nous</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <h6>Services</h6>
                                <ul>
                                    <li>
                                        <a href="{{ route('service1') }}">service 1</a>
                                        <a href="{{ route('service2') }}">service 2</a>
                                        <a href="{{ route('service3') }}">service 3</a>
                                        <a href="{{ route('service4') }}">service 4</a>
                                        <a href="{{ route('service5') }}">service 5</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="subscribe-form">
                            <h6>Newsletter</h6>
                            <form action="https://www.iideainformatics.it/html/devgalaxy/ecofix_v1_1/index.html">
                                <input type="email" placeholder="Your email" >
                                <button type="submit"><i class="las la-envelope"></i></button>
                            </form>
                            <p>Stay tuned for our latest news</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer Bottom Area  -->

    <div class="footer-bottom">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-3 col-12">
                    <div class="copyright-area">
                        <p class="copyright-line">© 2024 Vigilium. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <p class="privacy"><a href="#">Terms &amp; Conditions</a> <a href="#">Privacy Policy</a> <a
                            href="#">Recycling Tips</a> </p>
                </div>
                <div class="col-lg-3 col-12 text-end">
                    <div class="social-area">
                        <a href="#"><i class="lab la-facebook-f"></i></a>
                        <a href="#"><i class="lab la-youtube"></i></a>
                        <a href="#"><i class="lab la-twitter"></i></a>
                        <a href="#"><i class="lab la-instagram"></i></a>
                        <a href="#"><i class="lab la-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Top Area -->
    <a href="#top" class="go-top"><i class="las la-angle-up"></i></a>