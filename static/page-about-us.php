<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colosseum Dental Academy</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i&display=swap&subset=latin-ext" rel="stylesheet">

    <!-- Drupal css -->

    <link rel="stylesheet" href="drupal-css/jquery-ui/core.css">
    <link rel="stylesheet" href="drupal-css/jquery-ui/theme.css">
    <link rel="stylesheet" href="drupal-css/jquery-ui/dialog.css">
    <link rel="stylesheet" href="drupal-css/jquery-ui/button.css">

    <link rel="stylesheet" href="drupal-css/form.css">
    <link rel="stylesheet" href="drupal-css/button.css">
    <link rel="stylesheet" href="drupal-css/details.css">
    <link rel="stylesheet" href="drupal-css/collapse-processed.css">
    <link rel="stylesheet" href="drupal-css/file.css">
    <link rel="stylesheet" href="drupal-css/tabledrag.module.css">
    <link rel="stylesheet" href="drupal-css/messages.css">
    <link rel="stylesheet" href="drupal-css/dialog.css">
    <link rel="stylesheet" href="drupal-css/ajax-progress.module.css">
    <link rel="stylesheet" href="drupal-css/user.css">
    <link rel="stylesheet" href="drupal-css/user.module.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../web/themes/custom/cd_group/css/styles.css?v=<?php echo rand(); ?>">

    <!-- Osano cookie consent css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="../web/themes/custom/cd_group/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../web/themes/custom/cd_group/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../web/themes/custom/cd_group/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="../web/themes/custom/cd_group/img/favicons/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!--  Modernizr  -->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/3.5.0/modernizr.min.js"></script>-->

</head>

<body class="is_admin">

<?php require 'partial-main-nav.php'; ?>

    <!--<div data-drupal-messages="">
        <div role="contentinfo" aria-label="Status message" class="messages messages--status">
            <h2 class="visually-hidden">Status message</h2>
            About us <em class="placeholder"><a href="/about-us" hreflang="en">About us</a></em> has been updated.
        </div>
    </div>-->

    <section class="hero hero-basic">
        <div class="hero-content align-items-center">
            <div class="container">
                <h1 class="hero-title">About Colosseum Academy</h1>
            </div>
        </div>
    </section>

    <!-- Video Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close text-white" data-dismiss="modal"><i class="material-icons">close</i></button>
                </div>
                <div class="modal-body bg-dark p-0">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="page-section-about-us-img">
        <div class="section-img">
            <img src="img/about-us-header.jpg" alt="Course image">
            <button
                class="btn btn-white btn-play"
                data-toggle="modal"
                data-target="#videoModal"
                data-video="https://player.vimeo.com/video/259411563"
            >
                Video introduction <span class="play-icon"><i class="material-icons">play_arrow</i></span>
            </button>
        </div>
    </section>

    <section class="page-section page-section-about-us-main">
        <div class="container-fullwidth article-content">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="section-title">
                        The objective of our Colosseum Academy is to provide continuous education to our staff to ensure outstanding care for our patients.
                    </h2>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-lg-9">
                    <div class="columns-2">
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
                        </p>
                        <p>
                            Fconsectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                        </p>
                        <p>
                            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                        </p>
                    </div>
                    <div class="section-cta">
                        <a href="page-courses.php" class="btn btn-link add-fwd-icon">Master Curriculum Program courses</a>
                        <a href="page-courses.php" class="btn btn-link add-fwd-icon">Focus Training courses</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section page-section-about-us-team">
        <div class="container-fullwidth">
            <div class="row justify-content-between">
                <div class="col-md-5">
                    <h2 class="section-title">We are a Team of Experts</h2>
                </div>
                <div class="col-md-6 section-intro">
                    <p>
                        Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                    </p>
                    <p>
                        Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.
                    </p>
                </div>
            </div>

            <h3 class="team-grid-title">
                Academy team
            </h3>

            <div class="row team-grid">
                <div class="col-sm-6 col-lg-4">
                    <div class="person-card">
                        <div class="img-wrapper">
                            <img src="https://col-aca.sangre.dev/sites/default/files/styles/team_member_image/public/2020-10/Gilberto%20Debalian.jpg?itok=ZsiiPLSX" alt="Gio">
                        </div>
                        <h5 class="person-name">Dr. Bessie Cooper</h5>
                        <p class="person-title">
                            DMD, PhD and specialist in endodontics
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="person-card">
                        <div class="img-wrapper">
                            <img src="https://col-aca.sangre.dev/sites/default/files/styles/team_member_image/public/2020-10/Petter%20O.%20Lind.jpg?itok=UKIqUmcx" alt="Petter">
                        </div>
                        <h5 class="person-name">Dr. Bessie Cooper</h5>
                        <p class="person-title">
                            DMD, PhD and specialist in endodontics
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="person-card">
                        <div class="img-wrapper">
                            <img src="https://col-aca.sangre.dev/sites/default/files/styles/team_member_image/public/2020-10/Antero_Salo-002%5B2%5D.jpg?itok=Vq1yL4gA" alt="Antero">
                        </div>
                        <h5 class="person-name">Dr. Bessie Cooper</h5>
                        <p class="person-title">
                            DMD, PhD and specialist in endodontics
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="person-card">
                        <div class="img-wrapper">
                            <img src="https://col-aca.sangre.dev/sites/default/files/styles/team_member_image/public/2020-10/elias-messo%20bw.jpg?itok=BZAQ-sJQ" alt="Elias">
                        </div>
                        <h5 class="person-name">Dr. Bessie Cooper</h5>
                        <p class="person-title">
                            DMD, PhD and specialist in endodontics
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="person-card">
                        <div class="img-wrapper">
                            <img src="https://col-aca.sangre.dev/sites/default/files/styles/team_member_image/public/2020-10/andrew%20matta%20headshot.jpg?itok=HrvpysvQ" alt="Andrew">
                        </div>
                        <h5 class="person-name">Dr. Bessie Cooper</h5>
                        <p class="person-title">
                            DMD, PhD and specialist in endodontics
                        </p>
                    </div>
                </div>
            </div>

            <h3 class="team-grid-title">
                Academy team
            </h3>

            <div class="row team-grid">
                <div class="col-sm-6 col-lg-4">
                    <div class="person-card">
                        <div class="img-wrapper">
                            <img src="https://col-aca.sangre.dev/sites/default/files/styles/team_member_image/public/2020-10/Ragnhild%20E.%20H.%20Waters.jpg?itok=Cj61_-9o" alt="Ragnhild">
                        </div>
                        <h5 class="person-name">Dr. Bessie Cooper</h5>
                        <p class="person-title">
                            DMD, PhD and specialist in endodontics
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="person-card">
                        <div class="img-wrapper">
                            <img src="https://col-aca.sangre.dev/sites/default/files/styles/team_member_image/public/2020-09/Minna%20portrett.png?itok=yNJaeGwL" alt="Minna">
                        </div>
                        <h5 class="person-name">Dr. Bessie Cooper</h5>
                        <p class="person-title">
                            DMD, PhD and specialist in endodontics
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="person-card">
                        <div class="img-wrapper">
                            <img src="https://col-aca.sangre.dev/sites/default/files/styles/team_member_image/public/2020-09/Patrick%20Landeau%20portrett.png?itok=IAoTtimq" alt="Patrick">
                        </div>
                        <h5 class="person-name">Dr. Bessie Cooper</h5>
                        <p class="person-title">
                            DMD, PhD and specialist in endodontics
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="person-card">
                        <div class="img-wrapper">
                            <img src="https://col-aca.sangre.dev/sites/default/files/styles/team_member_image/public/2020-09/Amalie-kopi.jpg?itok=UxDgBTgt" alt="Amalie ny">
                        </div>
                        <h5 class="person-name">Dr. Bessie Cooper</h5>
                        <p class="person-title">
                            DMD, PhD and specialist in endodontics
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="person-card">
                        <div class="img-wrapper">
                            <img src="https://col-aca.sangre.dev/sites/default/files/styles/team_member_image/public/2020-10/FOTOCOTO_Fabian_Bew_0114__8.JPG?itok=SjJMtfm1" alt="Fabian">
                        </div>
                        <h5 class="person-name">Dr. Bessie Cooper</h5>
                        <p class="person-title">
                            DMD, PhD and specialist in endodontics
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require 'region-footer.php'; ?>


