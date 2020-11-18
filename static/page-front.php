<?php require 'region-header.php'; ?>

    <section class="hero-frontpage">
        <div class="hero-img" style="background-image: url(img/hero-example.jpg);"></div>
        <div class="hero-content align-items-center">
            <div class="container">
                <h1 class="hero-title">Welcome to Colosseum Dental Group</h1>
                <p class="hero-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.</p>
                <button class="btn btn-white btn-play" data-toggle="modal" data-target="#videoModal" data-video="https://www.youtube.com/embed/lQAUq_zs-XU">
                    Video introduction <span class="play-icon"><i class="material-icons">play_arrow</i></span>
                </button>
            </div>
        </div>
    </section>

    <!-- Video Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close text-white" data-dismiss="modal">
                        <i class="material-icons">close</i></button>
                </div>
                <div class="modal-body bg-dark p-0">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="page-section page-section-fp-intro">
        <div class="container-fullwidth">
            <h2 class="h3">
                Colosseum Dental Group is a rapidly-growing company in the European dental services market.
            </h2>
            <ul class="page-list row">
                <li class="col-md-4">
                    <a href="#" class="item">
                        <h3>Medical governance</h3>
                        <img src="img/frontpage-about-2.jpg" alt="img">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        </p>
                        <button class="btn btn-link add-fwd-icon">Read more</button>
                    </a>
                </li>
                <li class="col-md-4">
                    <a href="#" class="item">
                        <h3>Colosseum Academy</h3>
                        <img src="img/frontpage-about-2.jpg" alt="img">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        </p>
                        <button class="btn btn-link add-fwd-icon">Read more</button>
                    </a>
                </li>
                <li class="col-md-4">
                    <a href="#" class="item">
                        <h3>Innovation</h3>
                        <img src="img/frontpage-about-2.jpg" alt="img">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        </p>
                        <button class="btn btn-link add-fwd-icon">Read more</button>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section class="page-section page-section-fp-feature">
        <img src="img/frontpage-team.jpg" alt="img">
        <div class="content-box">
            <h3>Our charitable cause</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam</p>
            <a href="#" class="btn btn-white add-fwd-icon">Read more</a>
        </div>
    </section>

    <section class="page-section page-section-fp-countries">
        <div class="container-fullwidth">
            <ul class="country-logo-list">
                <li>
                    <a href="#">
                        <img src="img/logos/coloseum_dk_ny.png" alt="Colosseum">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/logos/logo_high_odontosalute.png" alt="Colosseum">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/logos/logo_high_colloseum-1.png" alt="Colosseum">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/logos/smile_logo_2018_rgb.jpg" alt="Colosseum">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/logos/logo_high_swiss_smile-1.png" alt="Colosseum">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/logos/Colosseum-Dental-Logo-UK.png" alt="Colosseum">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/logos/oral_logo_RGB-72ppi.jpg" alt="Colosseum">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/logos/smile_de.png" alt="Colosseum">
                    </a>
                </li>
            </ul>
        </div>
    </section>

<?php require 'region-footer.php'; ?>