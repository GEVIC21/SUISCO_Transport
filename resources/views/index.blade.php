<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>Transport</title>
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('home_page/images/logos/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700">
    <link rel="stylesheet" href="{{ asset('template/bus/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('template/bus/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('template/bus/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset("template/css/icon_flashy.css") }}">
    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }
        html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {
            display: block;
        }
    </style>
</head>
<body>
<div class="ie-panel">
    <a href="http://windows.microsoft.com/en-US/internet-explorer/">
        <img src="{{ asset('template/bus/images/ie8-panel/warning_bar_0000_us.jpg') }}" height="42" width="820"
            alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.">
    </a>
</div>
<div class="preloader" id="loading">
    <div class="preloader-body">
        <div id="loading-center-object">
            <div class="object" id="object_four"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_one"></div>
        </div>
    </div>
</div>
<div class="page">
    <!-- Page Header-->
    <header class="section page-header page-header-1 gradient-1">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                 data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                 data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed"
                 data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
                 data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static"
                 data-lg-stick-up-offset="10px" data-xl-stick-up-offset="10px" data-xxl-stick-up-offset="10px"
                 data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-main">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand">
                            <a class="brand" href="{{ route('bus.index') }}">
                                <img class="brand-logo-dark" src="{{ asset('template/bus/images/logo-suiscobus-288X36.png') }}"
                                    alt="" width="144" height="18" srcset="{{ asset('template/bus/images/logo-suiscobus-288X36.png') }} 2x"/>
                            </a>
                        </div>
                    </div>
                    <div class="rd-navbar-nav-wrap">
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li class="rd-nav-item"><a class="rd-nav-link" href="#offers">Offres</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="#advantages">Avantages</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="#prices">Tarifs</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="#testimonials">Témoignages</a>
                            </li>
                            <!-- <li class="rd-nav-item"><a class="rd-nav-link"
                               href="{{ \Illuminate\Support\Str::startsWith(request()->getHost(), "dev") ? "http://dev-suisco.net:8000" : "https://suisco.net" }}">SuiSco</a>
                            </li> -->
                            <li class="rd-nav-item"><a class="rd-nav-link"
                               href="{{ \Illuminate\Support\Str::startsWith(request()->getHost(), "dev") ? "http://dev-suisco.net:8000#subscribe" : "https://suisco.net#subscribe"}}">Newsletter</a>
                            </li>
                        </ul>
                    </div>
                    <div class="rd-navbar-element bg-gray-4">
                        <a class="button button-sm button-default-outline button-winona" href="{{ route('bus.become.owner') }}">
                            Devenir Propriétaire</a>
                    </div>
                    <div class="rd-navbar-dummy"></div>
                </div>
            </nav>
        </div>
        <!-- FScreen-->
        <div class="layout-4">
            <div class="layout-4-item-right">
                <div class="box-custom-2 bg-accent">
                    <div class="box-custom-2-bg">
                        <div class="box-custom-2-bg-inner">
                            <div class="box-custom-2-bg-image"
                                 style="background-image: url('{{ asset('template/bus/images/index-2-1397x1397.png') }}');">
                            </div>
                        </div>
                    </div>
                    <div class="box-custom-2-inner">
                        <p class="{{--big --}}wow fadeIn" data-wow-delay=".2s">
                            Transport Scolaire.
                        </p>
                        <h4 class="wow fadeIn">Réservez dès maintenant !</h4>
                        <div class="contacts-default">
                            <div class="unit align-items-center">
                                <div class="unit-left">
                                    <div class="contacts-default-icon mdi mdi-phone-incoming"></div>
                                </div>
                                <div class="unit-body">
                                    <a class="contacts-default-link" href="tel:#">+228 90 97 67 67</a>
                                </div>
                            </div>
                        </div>
                        <!-- RD Mailform-->
                        <form class="rd-form {{--rd-mailform--}} form-style-1" method="post" action="{{ route('bus.subscription.store') }}">
                            @csrf
                            <div class="form-wrap">
                                <!-- Select 2-->
                                <select class="form-input select button-shadow" name="service" data-constraints="@Required" required>
                                    <option value="" selected style="display: none !important;">Choisir un Service</option>
                                    <option value="Standard">Standard</option>
                                    <option value="Premium">Premium</option>
                                </select>
                            </div>
                            <div class="form-wrap">
                                <input class="form-input" id="form-location" type="text" name="home_address" data-constraints="@Required" required>
                                <label class="form-label" for="form-location">Adresse de la Maison</label><span class="form-icon mdi mdi-map-marker"></span>
                            </div>
                            <div class="form-wrap">
                                <input class="form-input" id="form-location-2" type="text" name="school_address" data-constraints="@Required" required>
                                <label class="form-label" for="form-location-2">Adresse de l'école</label><span class="form-icon mdi mdi-map-marker"></span>
                            </div>
                            <div class="form-wrap">
                                <!-- Select 2-->
                                <select class="form-input select button-shadow" name="trajectory" data-constraints="@Required" required>
                                    <option value="" selected style="display: none">Choisir le Trajet</option>
                                    <option value="Aller Simple">Aller Simple</option>
                                    <option value="Retour Simple">Retour Simple</option>
                                    <option value="Aller-Retour">Aller-Retour</option>
                                </select>
                            </div>
                            <div class="form-wrap-2">
                                <div class="form-wrap">
                                    <input class="form-input" id="form-phone" type="text" name="phone_number"
                                           data-constraints="@Required{{-- @PhoneNumber--}}" required>
                                    <label class="form-label" for="form-phone">Votre téléphone mobile</label><span
                                        class="form-icon mdi mdi-cellphone"></span>
                                </div>
                                <div class="form-button">
                                    <button class="button button-block button-primary button-winona" type="submit">
                                        Réserver
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="layout-4-item-left">
                <img src="{{ asset('template/bus/images/index-1-700x587.png') }}" alt="" width="700" height="587"/>
            </div>
        </div>
    </header>
    <!-- Messenger of The Next Generation-->
    <section class="section section-md bg-gray-100 text-center" id="offers">
        <div class="container">
            <h3 class="wow fadeIn" data-wow-delay=".1s">Nos Offres</h3>
            <div class="row row-30 row-md-50 row-xl-60">
                <div class="col-sm-6 col-lg-4 wow fadeIn">

                    <!-- Box Modern-->
                    <article class="box-modern box-modern_alternate" data-anime="circles-2">
                        <div class="box-modern-media">
                            <div class="box-modern-icon mdi mdi-bus"></div>
                            <div class="box-modern-circle box-modern-circle-1"></div>
                            <div class="box-modern-circle box-modern-circle-2"></div>
                        </div>
                        <p class="box-modern-title">Mutuel</p>
                        <div class="box-modern-text">
                            <ul class="list-marked list-marked_secondary">
                                <li>Objet : Siège réservé d'un Mini-bus au client</li>
                                <li>Retard Chauffeur : 5 min de tolérance</li>
                                <li>Retard Client : 5 min de tolérance</li>
                                <li>Jours de Service : Lundi à Vendredi</li>
                                <li>Heures de Service : 06h00-08h00 & 13h30-15h30</li>
                                <li>Départ : Fixé par SuiSco selon le circuit</li>
                                <li>Destination : Ecole</li>
                                <li>Escales : 3 Arrêts de 5 min pour SuiSco</li>
                                <li>Engagment : Trimestriel</li>
                                <li>Consignation : Optionnelle & Conditionnée</li>
                            </ul>
                        </div>
                    </article>
                </div>
                <!-- Box Modern-->
                <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".1s">
                    <article class="box-modern" data-anime="circles-1">
                        <div class="box-modern-media">
                            <div class="box-modern-icon mdi mdi-car"></div>
                            <div class="box-modern-circle box-modern-circle-1"></div>
                            <div class="box-modern-circle box-modern-circle-2"></div>
                        </div>
                        <p class="box-modern-title">Standard</p>
                        <div class="box-modern-text">
                            {{--<p>--}}
                            <ul class="list-marked list-marked_secondary">
                                <li>Objet : Siège réservé d'une Berling au client</li>
                                <li>Retard Chauffeur : 5 min de Tolérance</li>
                                <li>Retard Client : 5 min de Tolérance</li>
                                <li>Jours de Service : Lundi à Vendredi</li>
                                <li>Heures de Service : 06h00-08h00 & 13h30-15h30</li>
                                <li>Départ : Préfixé par SuiSco (Maison du client)</li>
                                <li>Destination : Ecole </li>
                                <li>Escales : 3 arrêts de 5 min pour SuiSco</li>
                                <li>Engagement : Trimestriel</li>
                                <li>Consignation : Optionnelle & Conditionnée</li>
                            </ul>
                            {{--</p>--}}
                        </div>
                    </article>
                </div>

                <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".2s">
                    <!-- Box Modern-->
                    <article class="box-modern" data-anime="circles-1">
                        <div class="box-modern-media">
                            <div class="box-modern-icon mdi mdi-car"></div>
                            <div class="box-modern-circle box-modern-circle-1"></div>
                            <div class="box-modern-circle box-modern-circle-2"></div>
                        </div>
                        <p class="box-modern-title">Premium</p>
                        <div class="box-modern-text">
                            <ul class="list-marked list-marked_secondary">
                                <li>Objet : Voiture Berling dédiée au client</li>
                                <li>Retard Chauffeur :  Aucune tolérance</li>
                                <li>Retard Client : Non applicable</li>
                                <li>Jours de Service :  Lundi à Vendredi</li>
                                <li>Heures de Service : 06h00-08h00 & 13h30-15h30</li>
                                <li>Départ : Fixé à volonté par le client</li>
                                <li>Destination : Ecole</li>
                                <li>Escales : Aucun arrêt autorisé pour SuiSco</li>
                                <li>Engagement : Trimestriel</li>
                                <li>Consignation : Optionnelle & Conditionnée</li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg bg-gray-4 oh" id="advantages">
        <div class="container">
            <div
                class="row row-50 justify-content-center align-items-center align-items-lg-stretch flex-md-row-reverse">
                <div class="col-sm-5 col-md-5 col-lg-6 wow fadeInLeftSmall">
                    <div class="phone-frame-2 text-right">
                        <img class="phone-frame-2-outer" src="{{ asset('template/bus/images/frame-1-533x868.png') }}" alt="" width="533" height="868"/>
                    </div>
                </div>
                <div class="col-md-7 col-lg-6 wow fadeInRightSmall">
                    <h3>Avantages</h3>
                    <!-- Bootstrap tabs -->
                    <div class="tabs-custom tabs-horizontal tabs-line tabs-line_1 block-8" id="tabs-1">
                        <!-- Nav tabs-->
                        <ul class="nav nav-tabs">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" href="#tabs-1-1" data-toggle="tab"><span>Transport</span></a></li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="#tabs-1-2" data-toggle="tab"><span>Consignation</span></a></li>
                        </ul>
                        <!-- Tab panes-->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-1-1">
                                <p>Download our app and enjoy the best service from TAXPRO. All you have to do to begin
                                    using it is to enter your name and mobile phone number. You’ll access:</p>
                                <ul class="list-marked list-marked_secondary">
                                    <li>Special offers</li>
                                    <li>TAXPRO loyalty program</li>
                                    <li>More pricing plans</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-2">
                                <p>TAXPRO App allows you to book a taxi without having to call our dispatcher as well as
                                    set your route in advance or pick a driver, a preferred car, and more:</p>
                                <ul class="list-marked list-marked_secondary">
                                    <li>Manage your taxi spendings;</li>
                                    <li>Pay for taxi without a credit card;</li>
                                    <li>Great discounts for regular clients.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="group">
                        <a href="#"><img src="{{ asset('template/bus/images/button-2-170x53.png') }}"
                                 alt="" width="170" height="53"/></a>

                        <a><img src="{{ asset('template/bus/images/logo-suiscobus-288X36.png') }}"
                                 alt="" width="170" height="53"/></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Stickers-->
    <section class="section section-1 text-center" id="prices">
        <div class="container">
            <h3 class="wow fadeIn" data-wow-delay=".1s">Nos Tarifs</h3>
            <div class="row justify-content-center align-items-center bordered-1">
                <div class="col-sm-4">
                    <div class="box-default">
                        <p class="box-default-title">Mutuel</p>
                        <span>À partir de</span>
                        <p class="box-default-text">{{ $mutual_price }}</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box-default">
                        <p class="box-default-title">Standard</p>
                        <span>À partir de</span>
                        <p class="box-default-text">{{ $standard_price }}</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box-default">
                        <p class="box-default-title">Premium</p>
                        <span>À partir de</span>
                        <p class="box-default-text">{{ $premium_price }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials-->
    <section class="section section-lg bg-gray-100 text-center" id="testimonials">
        <div class="container">
            <h3>TÉMOIGNAGES</h3>
            <!-- Isotope-->
            <div class="isotope-outer">
                <div class="row row-20 row-md-30 row-xl-40 isotope" data-isotope-layout="masonry">
                    <div class="col-md-6 col-lg-4 isotope-item wow fadeInUpSmall">
                        <!-- Quote Modern-->
                        <blockquote class="quote-modern">
                            <div class="quote-modern-header">
                                <div class="quote-modern-info">
                                    <img class="quote-modern-avatar"
                                        src="{{ asset('template/bus/images/1.jpg') }}" alt="" width="74" height="74"/>
                                    <div class="quote-modern-info-main">
                                        <cite class="quote-modern-cite">Jane Williams</cite>
                                        <p class="quote-modern-position">Cadre d'une banque</p>
                                    </div>
                                </div>
                            </div>
                            <div class="quote-modern-main">
                                <div class="quote-modern-text">
                                    <p>J'ai trouvé que votre service est une expérience 5 étoiles.
                                        Le chauffeur agréable et nous attendait dans le hall des arrivées.
                                        {{--Toutes les personnes avec qui nous avons communiqué étaient agréables et gaies.--}}</p>
                                </div>
                                <div class="quote-modern-meta">
                                    <a class="quote-modern-link icon mdi mdi-facebook" href="#"></a>
                                    <time class="quote-modern-time" datetime="2019">Mar 24, 2019</time>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <div class="col-md-6 col-lg-4 isotope-item wow fadeInUpSmall" data-wow-delay=".1s">
                        <!-- Quote Modern-->
                        <blockquote class="quote-modern">
                            <div class="quote-modern-header">
                                <div class="quote-modern-info">
                                    <img class="quote-modern-avatar"
                                         src="{{ asset('template/bus/images/testimonials-2-74x74.jpg') }}" alt="" width="74" height="74"/>
                                    <div class="quote-modern-info-main">
                                        <cite class="quote-modern-cite">John Doe</cite>
                                        <p class="quote-modern-position">Administrateur Public</p>
                                    </div>
                                </div>
                            </div>
                            <div class="quote-modern-main">
                                <div class="quote-modern-text">
                                    <p>Tout s'est parfaitement déroulé ! Des chauffeurs incroyablement ponctuels et sympathiques et le meilleur service !</p>
                                </div>
                                <div class="quote-modern-meta">
                                    <a class="quote-modern-link icon mdi mdi-facebook" href="#"></a>
                                    <time class="quote-modern-time" datetime="2019">Mar 24, 2019</time>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <div class="col-md-6 col-lg-4 isotope-item wow fadeInUpSmall" data-wow-delay=".3s">
                        <!-- Quote Modern-->
                        <blockquote class="quote-modern">
                            <div class="quote-modern-header">
                                <div class="quote-modern-info">
                                    <img class="quote-modern-avatar"
                                         src="{{ asset('template/bus/images/2.jpg') }}" alt="" width="74" height="74"/>
                                    <div class="quote-modern-info-main">
                                        <cite class="quote-modern-cite">Kate Peterson</cite>
                                        <p class="quote-modern-position">Chef d'entreprise</p>
                                    </div>
                                </div>
                            </div>
                            <div class="quote-modern-main">
                                <div class="quote-modern-text">
                                    <p>Le service était excellent, merci. Mon chauffeur m'attendait aux arrivées avec un signe clair.
                                        Il s'est présenté, était très poli et amical.</p>
                                </div>
                                <div class="quote-modern-meta">
                                    <a class="quote-modern-link icon mdi mdi-facebook" href="#"></a>
                                    <time class="quote-modern-time" datetime="2019">Mar 24, 2019</time>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA-->
    <section class="section parallax-container section-lg bg-gray-4 bg-overlay-1 text-center"
             data-parallax-img="{{ asset('template/bus/images/bg-image-5.jpg') }}">
        <div class="parallax-content">
            <div class="container">
                <div class="row row-50 justify-content-end">
                    <div class="col-md-6 col-lg-5">
                        <h1 class="wow clipInLeft"><span class="font-weight-light">-50%</span> on first order</h1>
                        <p class="big wow clipInLeft" data-wow-delay=".1s">
                            Our first-time customers get a great discount
                            on their order.
                        </p>
                        <a class="button button-primary button-winona wow clipInLeft" href="#" data-wow-delay=".1s">Reservez Maintenant</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Footer-->
    <footer class="section footer-classic">
        <div class="footer-classic-main">
            <div class="container">
                <div class="row row-50 justify-content-lg-between">
                    <div class="{{--col-sm-6 col-lg-3 col-xl-3--}} col-md-4 col-sm-6 col-xs-12 text-center">
                        <a class="brand" href="#">
                            <img class="brand-logo-dark" src="{{ asset('template/bus/images/logo-suiscobus-288X36.png') }}" alt=""
                                width="144" height="18" srcset="{{ asset('template/bus/images/logo-suiscobus-288X36.png') }} 2x"/>
                        </a>
                        <p><span style="max-width: 250px;">SuiSco assure le transport des élèves du primaire au lycée sur la région du GRAND LOMÉ..</span>
                        </p><a class="button button-sm button-default-outline button-winona" href="#">Reservez Maintenant</a>
                    </div>

                    <div class="{{--col-sm-6 col-lg-3 col-xl-3--}} col-md-4 col-sm-6 col-xs-12 text-center">
                        <div><img src="{{ asset("home_page/images/logos/logo.png")}}" alt="SuiSco Logo" width="60" height="60"></div>
                        <p><span style="max-width: 250px;">
                            SuiSco est une société spécialisée dans la numérisation des services autour de l’éducation et l’enseignement.
                            Créée en 2017 sous la Référence N°RCCM TG-LOM 2017 A 3570 - NIF 1000739551 - CNSS 68279.</span>
                        </p>
                    </div>

                    <div class="{{--col-sm-5 col-lg-9 col-xl-2--}} col-md-4 col-sm-6 col-xs-12 text-center">
                        <h5 class="footer-classic-title">Nos Contacts</h5>
                        {{--<div class="row row-20 row-sm-35 text-center">--}}
                        <ul class="list footer-classic-list">
                            <li><span class="mdi mdi-map-marker"></span> Qt TERRAIN LYCEE AGOE, Lomé</li>
                            <li><span class="mdi mdi-phone"></span> +228 90 97 67 67</li>
                            <li><span class="mdi mdi-pencil"></span> <a href="mailto:info@ops.tg">info@suisco.net</a></li>
                            <li><span class="mdi mdi-clock"></span> Lun-Ven: 8:00-19:00, Sam: 10:00-15:00</li>
                        </ul>
                        <div class="group group-xs">
                            <a class="link link-social-1 mdi mdi-facebook" target="_blank"
                               href="https://www.facebook.com/SuiviScolair/" title="Facebook"></a>

                            <a class="link link-social-1 mdi mdi-twitter" target="_blank"
                               href="https://twitter.com/ScolaireSuivi" title="Twitter"></a>

                            {{--<a class="link link-social-1 mdi mdi-instagram" href="#"></a>--}}
                            <a class="link link-social-1 mdi mdi-youtube-play" target="_blank"
                               href="https://www.youtube.com/channel/UCfpTZEjAYvzoO4xNaFdeFjQ/" title="Youtube"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-classic-aside">
            <div class="container">
                <p class="rights"><span>&copy;&nbsp; </span><span>Copyright 2020 Transport | ITPLEX CONSULT.</span></p>
            </div>
        </div>
    </footer>
</div>
<div class="snackbars" id="form-output-global"></div>

<script src="{{ asset('template/bus/js/core.min.js') }}"></script>
<script src="{{ asset('template/bus/js/script.js') }}"></script>
{{--<script src="{{ asset('template/js/jquery-3.3.1.min.js') }}"></script>--}}
@include('flashy::message')
<!-- coded by Ragnar-->
</body>
</html>
