<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>SuiSco Transport | Consignation</title>
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
        .item-text {
            font-size: 20px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .subscription-border {
            border: 2px solid #a09d9d;
            border-radius: 2%;
            padding: 10px
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
                            <li class="rd-nav-itssam"><a class="rd-nav-link" href="{{route('bus.index') . '#offers'}}">Offres</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('bus.index') . '#advantages'}}">Avantages</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('bus.index') . '#prices'}}">Tarifs</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('bus.index') . '#testimonials'}}">Témoignages</a>
                            </li>
                         <!--    <li class="rd-nav-item"><a class="rd-nav-link"
                                                       href="{{ \Illuminate\Support\Str::startsWith(request()->getHost(), "dev") ? "http://dev-suisco.net:8000" : "http://suisco.net" }}">SuiSco</a>
                            </li>-->
                            <!-- <li class="rd-nav-item"><a class="rd-nav-link"
                                                       href="{{ \Illuminate\Support\Str::startsWith(request()->getHost(), "dev") ? "http://dev-suisco.net:8000#subscribe" : "http://suisco.net#subscribe"}}">Newsletter</a>
                            </li> -->
                            <li class="rd-nav-item"><a class="rd-nav-link"
                                  href="#">Newsletter</a>
                            </li>
                        </ul>
                    </div>
                    <div class="rd-navbar-dummy"></div>
                </div>
            </nav>
        </div>
    </header>

    <section class="section section-lg page_breadcrumbs ds background_cover {{--section_padding_top_65 section_padding_bottom_65--}}">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 style="color:#fff;"><b>LA CONSIGNATION CHEZ SUISCO Transport</b></h2>
                    @yield('ol')
                </div>
            </div>
        </div>
    </section>

    <!-- Get in Touch-->
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row">
                <div class="col-sm-8" style="margin-bottom: 30px">
                   <ol>
                       <li><b class="item-text">1- Qu’est-ce qu’un CONSIGNATAIRE chez SuiSco transport ? </b>
                           <p>
                               C’est un parent qui a souscrit pour le transport scolaire d’un apprenant au moins et qui
                               souhaite bénéficié d’une réduction spéciale ou annulation des frais d’abonnement par enfant
                               sur une durée d’une année scolaire renouvelable.
                           </p><br>
                       </li>

                       <li><b class="item-text">2- Pourquoi devenir CONSIGNATAIRE ?</b><br>
                           <ul class="list-marked">
                                <li>Disposer d’un droit non négociable de réduction ou d’annulation sur les frais d’abonnement
                                    par siège consigné sur une durée d’une année scolaire renouvelable,</li>
                                <li>Mutualiser les ressources pour un meilleur service de qualité pérenne,</li>

                               <li>Droits de réservation d’un (Chauffeur & véhicule) du parc de SuiSco Transport pour des courses
                                   personnelles à des tarifs forfaitaires durant les heures non ouvrées de transports scolaires.<br><br></li>
                           </ul>
                       </li>

                       <li><b class="item-text">3- Quelle est la procédure pour devenir CONSIGNATAIRE ?</b>
                           <ul class="list-marked">
                               <li>Il faut soumettre la demande en remplissant le formulaire <a href="{{ route('bus.become.owner') . '#' . __('become-owner') }}" class="box-default-text">suivant</a>,
                                   ou en appelant notre service client au  99 99 89 99,<br></li>
                               Une fois la demande validée, il faut procéder :
                               <li>à la dotation d’un bon de carburant de 100 litres/siège à chaque début d’année scolaire,</li>
                               <li>au versement du montant de la consignation relative au nombre de sièges consignés.<br><br></li>
                           </ul>
                       </li>

                       <li><b class="item-text">4- Quel est le montant de consignation du Siège ?</b>{{--<br>--}}
                           <p>Le montant de consignation est <b>1.000.000 FCFA/Siège</b>.</p><br>
                       </li>

                       <li><b class="item-text">5- Quel est la durée de consignation du Siège ?</b>{{--<br>--}}
                           <p>Elle est de 24 mois la durée de consignation.</p><br>
                       </li>

                       <li><b class="item-text">6- Comment le montant consigné est-elle restituée au CONSIGNATAIRE ?</b>{{--<br>--}}
                           <p>Le montant consigné est restitué sur une fréquence trimestrielle à partir la date de versement
                               du montant de la consignation, à hauteur de <b>125.000 Fcfa/Siège</b>.</p><br>
                       </li>

                       <li><b class="item-text">7- Pour un CONSIGNATAIRE, quels sont les taux de réductions sur les frais d’abonnement sur les
                               12 premiers mois par enfant </b> <b>(le maximum d’enfant étant de 4) ?</b> <br><br>
                               <img src="{{ asset('template/bus/images/consignation-graph.png') }}" alt="Taux de réductions">
                       </li>
                   </ol>
                </div>

                <div class="col-sm-4" id="{{__('become-owner')}}">
                    <div class="subscription-border bg-gray-100">

                        <h3 class="text-center">Souscription</h3>
                        <form class="rd-form" method="post" action="{{ route('bus.consignment.store') }}">
                            @csrf
                            <div class="row-20">
                                <div class="form-wrap">
                                    <input class="form-input" id="first_name" type="text" name="first_name" data-constraints="@Required" required>
                                    <label class="form-label" for="first_name">Nom</label>
                                </div>

                                <div class="form-wrap">
                                    <input class="form-input" id="last_name" type="text" name="last_name" data-constraints="@Required" required>
                                    <label class="form-label" for="last_name">Prénom</label>
                                </div>

                                <div class="form-wrap">
                                    <input class="form-input" id="email" type="email" name="email" data-constraints="@Required" required>
                                    <label class="form-label" for="email">Email</label>
                                </div>

                                <div class="form-wrap">
                                    <input class="form-input" id="phone_number" type="text" name="phone_number" data-constraints="@Required" required>
                                    <label class="form-label" for="phone_number">Numéro de Téléphone</label>
                                </div>

                                <div class="form-wrap">
                                    <input class="form-input" id="seats_number" type="number" name="seats_number" data-constraints="@Required" required>
                                    <label class="form-label" for="seats_number">Nombre de Sièges</label>
                                </div>

                                <div class="form-wrap">
                                    <input class="form-input" id="children_number" type="number" name="children_number" data-constraints="@Required" required>
                                    <label class="form-label" for="children_number">Nombre d'enfants</label>
                                </div>

                                <div class="form-wrap">
                                    <label class="form-label" for="details">Vos précisions au besoin</label>
                                    <textarea class="form-input" id="details" name="details"></textarea>
                                </div>

                                <div class="form-wrap form-button">
                                    <button class="button button-block button-primary" type="submit">Souscrire</button>
                                </div>
                            </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--<section class="section section-lg bg-gray-100" id="{{__('become-owner')}}">
        <div class="container">
            <h3 class="text-center">Souscription</h3>
            <div class="row justify-content-center">
                <div class="col-lg-11 col-xl-9">
                    <!-- RD Mailform-->
                    <form class="--}}{{--rd-mailform--}}{{-- rd-form was-validated" method="post" action="{{ route('bus.consignment.store') }}">
                        @csrf
                        <div class="row row-x-16 row-20">
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="first_name" type="text" name="first_name" data-constraints="@Required" required>
                                    <label class="form-label" for="first_name">Nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="last_name" type="text" name="last_name" data-constraints="@Required" required>
                                    <label class="form-label" for="last_name">Prénom</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="email" type="email" name="email" data-constraints="@Required" required>
                                    <label class="form-label" for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="phone_number" type="text" name="phone_number" data-constraints="@Required" required>
                                    <label class="form-label" for="phone_number">Numéro de Téléphone</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="seats_number" type="number" name="seats_number" data-constraints="@Required" required>
                                    <label class="form-label" for="seats_number">Nombre de Sièges</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="children_number" type="number" name="children_number" data-constraints="@Required" required>
                                    <label class="form-label" for="children_number">Nombre d'enfants</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-wrap">
                                    <label class="form-label" for="details">Vos précisions au besoin</label>
                                    <textarea class="form-input" id="details" name="details"></textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-wrap form-button">
                                    <button class="button button-block button-primary" type="submit">Souscrire</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- CTA-->
    <!-- <section class="section parallax-container section-lg bg-gray-4 bg-overlay-1 text-center"
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
    </section> -->
    <section class="section parallax-container section-lg bg-gray-4 bg-overlay-1 text-center"
             data-parallax-img="{{ asset('template/bus/images/b3.jpg') }}">
        <div class="parallax-content">
            <div class="container">
                <div class="row row-50 justify-content-end">
                    <div class="col-md-6 col-lg-5">
                        <h1 class="wow clipInLeft"><span class="font-weight-light">Demi prix</span> au premier mois</h1>
                        <p class="big wow clipInLeft" data-wow-delay=".1s">
                            Pour votre premier mois, profitez de 50% de reduction sour vos tarifs.
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
                    <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                        <a class="brand" href="#">
                            <img class="brand-logo-dark" src="{{ asset('template/bus/images/logo-suiscobus-288X36.png') }}" alt=""
                                 width="144" height="18" srcset="{{ asset('template/bus/images/logo-suiscobus-288X36.png') }} 2x"/>
                        </a>
                        <p><span style="max-width: 250px;">SuiSco assure le transport des élèves du primaire au lycée sur la région du GRAND LOMÉ..</span>
                        </p><a class="button button-sm button-default-outline button-winona" href="#">Reservez Maintenant</a>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                        <div><img src="{{ asset("home_page/images/logos/logo.png")}}" alt="SuiSco Logo" width="60" height="60"></div>
                        <p><span style="max-width: 250px;">
                            SuiSco est une société spécialisée dans la numérisation des services autour de l’éducation et l’enseignement.
                            Créée en 2017 sous la Référence N°RCCM TG-LOM 2017 A 3570.</span>
                        </p>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                        <h5 class="footer-classic-title">Nos Contacts</h5>
                        <ul class="list footer-classic-list">
                            <li><span class="mdi mdi-map-marker"></span> Qt TERRAIN LYCEE AGOE, Lomé</li>
                            <li><span class="mdi mdi-phone"></span> +228 99 99 89 99</li>
                            <li><span class="mdi mdi-pencil"></span> <a href="mailto:info@ops.tg">info@suisco.net</a></li>
                            <li><span class="mdi mdi-clock"></span> Lun-Ven: 8:00-19:00, Sam: 10:00-15:00</li>
                        </ul>
                        <div class="group group-xs">
                            <a class="link link-social-1 mdi mdi-facebook" target="_blank"
                               href="https://www.facebook.com/SuiviScolair/" title="Facebook"></a>

                            <a class="link link-social-1 mdi mdi-twitter" target="_blank"
                               href="https://twitter.com/ScolaireSuivi" title="Twitter"></a>

                            <a class="link link-social-1 mdi mdi-youtube-play" target="_blank"
                               href="https://www.youtube.com/channel/UCfpTZEjAYvzoO4xNaFdeFjQ/" title="Youtube"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-classic-aside">
            <div class="container">
                <p class="rights"><span>&copy;&nbsp</span><span>Copyright 2020 SuiSco Transport | ITPLEX CONSULT.</span></p>
            </div>
        </div>
    </footer>
</div>
<div class="snackbars" id="form-output-global"></div>
<script src="{{ asset('template/bus/js/core.min.js') }}"></script>
<script src="{{ asset('template/bus/js/script.js') }}"></script>
@include('flashy::message')
<!-- coded by Ragnar-->
</body>
</html>
