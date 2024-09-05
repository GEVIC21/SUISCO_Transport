<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>

    <title>SuiSco Transport</title>
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('home_page/images/logos/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700">
    <link rel="stylesheet" href="{{ asset('template/bus/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('template/bus/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('template/bus/css/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>

    <link rel="stylesheet" href="{{asset("template/css/icon_flashy.css")}}">
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

        <!--
        Ajoutez ces styles à votre fichier CSS ou dans une balise

        <
        style >

        -->

        .tabs-custom {
            display: flex;
            flex-direction: column;
        }

        .nav-tabs {
            display: flex;
            flex-wrap: nowrap;
        }

        .nav-item {
            margin-right: 1rem;
        }

        .nav-link {
            white-space: nowrap;
        }

        /* Assurez-vous que les onglets sont affichés en ligne */
        .nav-tabs {
            display: flex;
            flex-wrap: nowrap;
        }

        .nav-item {
            margin-right: 1rem; /* Espacement entre les onglets */
        }

        /* Si nécessaire, ajustez la largeur des onglets */
        .nav-link {
            white-space: nowrap; /* Empêche le texte de se plier sur plusieurs lignes */
        }


        /* styles.css */

        /* La Modal (cachée par défaut) */
        .modal {
            display: none; /* Cachée par défaut */
            position: fixed; /* Reste en place lors du défilement */
            z-index: 1; /* Au-dessus du contenu */
            left: 0;
            top: 0;
            width: 100%; /* Occupe toute la largeur */
            height: 100%; /* Occupe toute la hauteur */
            overflow: auto; /* Ajoute une barre de défilement si nécessaire */
            background-color: rgb(0, 0, 0); /* Fond semi-transparent */
            background-color: rgba(0, 0, 0, 0.4); /* Fond semi-transparent */
        }

        /* Contenu de la Modal */
        .modal-content {
            color: #000;
            background-color: #fefefe;
            margin: 15% auto; /* Centre verticalement et horizontalement */
            padding: 20px;
            border: 1px solid #888;
            width: 40%; /* Réduit la largeur pour permettre le déplacement */
            margin-left: 10%; /* Ajuste la marge à gauche pour déplacer le contenu vers la gauche */
        }

        .modal-content h4 {
            color: #000;

        }

        /* Le bouton de fermeture */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
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
    <header class="section page-header page-header-1 gradient-1" id="acceuil">
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
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span>
                        </button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand">
                            <a class="brand" href="{{ route('bus.index') }}">
                                <img class="brand-logo-dark"
                                     src="{{ asset('template/bus/images/logo-suiscobus-288X36.png') }}"
                                     alt="" width="144" height="18"
                                     srcset="{{ asset('template/bus/images/logo-suiscobus-288X36.png') }} 2x"/>
                            </a>
                        </div>
                    </div>
                    <div class="rd-navbar-nav-wrap">
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li class="rd-nav-item"><a class="rd-nav-link" href="#acceuil">Acceuil</a>
                            </li>
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
                            <!-- <li class="rd-nav-item"><a class="rd-nav-link"
                               href="{{ \Illuminate\Support\Str::startsWith(request()->getHost(), "dev") ? "http://dev-suisco.net:8000#subscribe" : "https://suisco.net#subscribe"}}">Newsletter</a>
                            </li> -->
                            <li class="rd-nav-item"><a class="rd-nav-link"
                                                       href="{{ route('bus.become.owner') }}">Newsletter</a>
                            </li>
                        </ul>
                    </div>
                    <div class="rd-navbar-element bg-gray-4">
                        <a class="button button-sm button-default-outline button-winona"
                           href="{{ route('bus.become.owner') }}">
                            Simulation Tarifs</a>
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
                            Transport Scolaire dans GRAND LOMÉ.
                        </p>
                        <h4 class="wow fadeIn">Réservez dès maintenant !</h4>
                        <div class="contacts-default">
                            <div class="unit align-items-center">
                                <div class="unit-left">
                                    <div class="contacts-default-icon mdi mdi-phone-incoming"></div>
                                </div>
                                <div class="unit-body">
                                    <a class="contacts-default-link" href="tel:#">+228  99 99 89 99</a>
                                </div>
                            </div>
                        </div>
                        <br>

                        <section class="section " id="advantages">
                            <div class="container">
                                <div
                                    class="row row-50 justify-content-center align-items-center align-items-lg-stretch flex-md-row-reverse">
                                    <div class="col-md-12 col-lg-12 wow fadeInRightSmall">
                                        <!-- <h3>Avantages</h3> -->
                                        <!-- Bootstrap tabs -->
                                        <div class="tabs-custom tabs-horizontal tabs-line tabs-line_1 block-8"
                                             id="tabs-1">
                                            <!-- Nav tabs-->
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" href="#tabs-1-1" data-toggle="tab"><span>Reserver</span></a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" href="#tabs-1-2"
                                                       data-toggle="tab"><span>Evaluer</span></a>
                                                </li>
                                            </ul>
                                            <!-- Tab panes-->
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="tabs-1-1">
                                                    <!-- <p>Download our app and enjoy the best service from TAXPRO. All you have to do to begin
                                                        using it is to enter your name and mobile phone number. You’ll access:</p> -->
                                                    <!-- <p>Service de transport dédié aux élèves, enseignants et parents d’élèves.</p>
                                                <ul class="list-marked list-marked_secondary">
                                                    <li>Véhicules neuves</li>
                                                    <li>Assurance tous risques</li>
                                                    <li>Chauffeurs experimentés </li>
                                                    <li>Services personnalisés </li>
                                                </ul> -->

                                                    <form class="rd-form {{--rd-mailform--}} form-style-1" method="post"
                                                          action="{{ route('bus.subscription.store') }}">
                                                        @csrf
                                                        <div class="form-wrap">
                                                            <!-- Select 2-->
                                                            <select class="form-input select button-shadow"
                                                                    name="service" data-constraints="@Required"
                                                                    required>
                                                                <option value="" selected
                                                                        style="display: none !important;">Choisir un
                                                                    Service
                                                                </option>
                                                                <option value="Standard">Standard</option>
                                                                <option value="Premium">Premium</option>
                                                            </select>
                                                            @error('service')
                                                            <div
                                                                style="color: red;font-size: smaller;">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <div class="form-wrap">
                                                            <!-- Select 2-->
                                                            <select class="form-input select" id="school_address"
                                                                    name="school_address" data-constraints="@Required"
                                                                    required>
                                                                <option value="" selected style="display: none">Choisir
                                                                    votre école
                                                                </option>
                                                                @foreach($schools as $school)
                                                                    <option
                                                                        value="{{$school->name}}">{{$school->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('school_address')
                                                            <div style="color: red;">{{ $message }}</div>
                                                            @enderror
                                                        </div>


                                                        <!-- Bouton pour afficher la div -->
                                                        <div class="form-wrap-2">
                                                            <div class="form-wrap">
                                                                <input class="form-input" id="home_address" type="text"
                                                                       name="home_address" data-constraints="@Required"
                                                                       style="pointer-events: none;"
                                                                       placeholder="Prendre mes coordonnées">
                                                                <label class="form-label"
                                                                       for="form-location"></label><span
                                                                    class="form-icon mdi mdi-map-marker"></span>
                                                            </div>
                                                            <div class="form-button">
                                                                <button id="toggleMapBtn"
                                                                        class="button button-block button-primary button-winona"
                                                                        type="button">
                                                                    Masquer
                                                                </button>
                                                            </div>
                                                            @error('home_address')
                                                            <div style="color: red;">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <div id="mapContainer" class="form-wrap" style="display: ">
                                                            <br>
                                                            <!--  <input class="form-input" id="home_address" type="text" name="home_address" data-constraints="@Required" style="pointer-events: none;" placeholder="Choisissez l'adresse de votre maison">
                              --> <label class="form-label" for="form-location"></label><span
                                                                class="form-icon mdi mdi-map-marker"></span>
                                                            <div class="form-wrap" id="map"
                                                                 style="height: 350px;"></div>
                                                            <div class="form-wrap">
                                                                <!-- <button type="button" id="locate-me" class="button button-block button-primary">
                                                                Aller à ma position
                                                                </button> -->
                                                            </div>


                                                            <!--  <script>
                                                                document.addEventListener('DOMContentLoaded', function () {
                                                                    var map = L.map('map').setView([51.505, -0.09], 13);

                                                                    // Charger les tuiles de la carte
                                                                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                                                        attribution: '© OpenStreetMap contributors'
                                                                    }).addTo(map);

                                                                    // Fonction pour obtenir la position actuelle de l'utilisateur
                                                                    function locateUser() {
                                                                        if (navigator.geolocation) {
                                                                            navigator.geolocation.getCurrentPosition(function(position) {
                                                                                var lat = position.coords.latitude;
                                                                                var lon = position.coords.longitude;

                                                                                // Centrer la carte sur la position actuelle
                                                                                map.setView([lat, lon], 13);

                                                                                // Ajouter un marqueur à la position actuelle
                                                                                L.marker([lat, lon]).addTo(map)
                                                                                    .bindPopup('Vous êtes ici')
                                                                                    .openPopup();
                                                                            }, function() {
                                                                                alert("Erreur de géolocalisation.");
                                                                            });
                                                                        } else {
                                                                            alert("Géolocalisation non supportée.");
                                                                        }
                                                                    }

                                                                    // Fonction de géocodage inverse pour obtenir le nom géographique
                                                                    function reverseGeocode(lat, lon, callback) {
                                                                        var url = `https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lon}&addressdetails=1`;
                                                                        fetch(url)
                                                                            .then(response => response.json())
                                                                            .then(data => {
                                                                                var address = data.address;
                                                                                var name = address ? [
                                                                                    address.road || '',
                                                                                    address.suburb || '',
                                                                                    address.city || '',
                                                                                    address.state || '',
                                                                                    address.country || ''
                                                                                ].filter(part => part).join(', ') : 'N/A';
                                                                                callback(name);
                                                                            })
                                                                            .catch(() => {
                                                                                callback('N/A');
                                                                            });
                                                                    }

                                                                    // Variables pour stocker les points cliqués
                                                                    var firstPoint = null;
                                                                    var secondPoint = null;
                                                                    var line = null;

                                                                    // Appeler la fonction pour localiser l'utilisateur
                                                                    locateUser();

                                                                    // Ajouter un marqueur et une ligne lorsqu'on clique sur la carte
                                                                    map.on('click', function(e) {

                                                                        var lat = e.latlng.lat;
                                                                        var lon = e.latlng.lng;

                                                                        reverseGeocode(lat, lon, function(name) {
                                                                            if (!firstPoint) {
                                                                                // Premier clic
                                                                                firstPoint = { lat: lat, lon: lon, name: name };
                                                                                L.marker([lat, lon]).addTo(map)
                                                                                    .bindPopup('Premier point cliqué: ' + name)
                                                                                    .openPopup();
                                                                            } else if (!secondPoint) {
                                                                                // Deuxième clic
                                                                                secondPoint = { lat: lat, lon: lon, name: name };
                                                                                L.marker([lat, lon]).addTo(map)
                                                                                    .bindPopup('Deuxième point cliqué: ' + name)
                                                                                    .openPopup();

                                                                                // Calculer la distance entre les deux points
                                                                                var distance = map.distance([firstPoint.lat, firstPoint.lon], [secondPoint.lat, secondPoint.lon]);
                                                                                alert('Distance: ' + (distance / 1000).toFixed(2) + ' km');

                                                                                // Tracer une ligne entre les deux points
                                                                                if (line) {
                                                                                    map.removeLayer(line);
                                                                                }
                                                                                line = L.polyline([[firstPoint.lat, firstPoint.lon], [secondPoint.lat, secondPoint.lon]], {color: 'blue'}).addTo(map);

                                                                                // Réinitialiser les points pour permettre de sélectionner de nouveaux points
                                                                                firstPoint = null;
                                                                                secondPoint = null;
                                                                            }
                                                                        });
                                                                    });
                                                                });
                                                            </script> -->

                                                            <!-- Script Masquer Reserver carte  -->

                                                            <script>
                                                                var myMapvar;
                                                                document.getElementById('toggleMapBtn').addEventListener('click', function () {
                                                                    var mapContainer = document.getElementById('mapContainer');

                                                                    if (mapContainer.style.display === 'none' || mapContainer.style.display === '') {
                                                                        mapContainer.style.display = 'block';
                                                                        myMapvar = 1;
                                                                        console.log("myMapvar dans Afficher");

                                                                        console.log(myMapvar);

                                                                        this.textContent = 'Masquer'; // Changer le texte du bouton
                                                                    } else {
                                                                        mapContainer.style.display = 'none';
                                                                        this.textContent = 'Afficher'; // Changer le texte du bouton
                                                                        myMapvar = 0;
                                                                        console.log("myMapvar dans Masquer");

                                                                        console.log(myMapvar);
                                                                    }
                                                                });
                                                            </script>

                                                        </div>


                                                        <div class="form-wrap">
                                                            <!-- Select 2-->
                                                            <select class="form-input select button-shadow "
                                                                    name="trajectory" data-constraints="@Required"
                                                                    required>
                                                                <option value="" selected style="display: none">Votre
                                                                    trajet
                                                                </option>
                                                                <option value="Aller Simple">Aller Simple</option>
                                                                <option value="Retour Simple">Retour Simple</option>
                                                                <option value="Aller-Retour">Aller-Retour</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-wrap-2">
                                                            <div class="form-wrap">
                                                                <input class="form-input" id="form-phone" type="text"
                                                                       name="phone_number"
                                                                       data-constraints="@Required{{-- @PhoneNumber--}}"
                                                                       required placeholder="Votre téléphone mobile">
                                                                <label class="form-label" for="form-phone"></label><span
                                                                    class="form-icon mdi mdi-cellphone"></span>
                                                            </div>
                                                            <div class="form-button">
                                                                <button
                                                                    class="button button-block button-primary button-winona"
                                                                    type="submit">
                                                                    Réserver
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>

                                                <div class="tab-pane fade" id="tabs-1-2">
                                                    <!-- <p>TAXPRO App allows you to book a taxi without having to call our dispatcher as well as
                                                        set your route in advance or pick a driver, a preferred car, and more:</p>
                                                    <ul class="list-marked list-marked_secondary">
                                                        <li>Manage your taxi spendings;</li>
                                                        <li>Pay for taxi without a credit card;</li>
                                                        <li>Great discounts for regular clients.</li>
                                                    </ul> -->
                                                    <form class="rd-form {{--rd-mailform--}} form-style-1" method="get"
                                                          action="#">
                                                        @csrf
                                                        <div class="form-wrap">
                                                            <!-- Select 4-->
                                                            <select class="form-input select button-shadow"
                                                                    name="service_evaluation" id="service_evaluation"
                                                                    data-constraints="@Required" required>
                                                                <option value="" selected
                                                                        style="display: none !important;">Choisir un
                                                                    Service
                                                                </option>
                                                                <option value="Standard">Standard</option>
                                                                <option value="Premium">Premium</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-wrap">
                                                            <!-- Select 2-->
                                                            <select class="form-input select"
                                                                    id="school_address_evaluation"
                                                                    name="school_address_evaluation"
                                                                    data-constraints="@Required" required>
                                                                <option value="" selected style="display: none">Choisir
                                                                    votre école
                                                                </option>
                                                                @foreach($schools as $school)
                                                                    <option
                                                                        value="{{$school->location}}">{{$school->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>


                                                        <div class="form-wrap">
                                                            <input hidden class="form-input"
                                                                   id="departure_address_evaluation" type="text"
                                                                   name="departure_address_evaluation"
                                                                   data-constraints="@Required"
                                                                   style="pointer-events: none;">

                                                        </div>

                                                        <div class="form-wrap">
                                                            <input hidden class="form-input"
                                                                   id="arrive_address_evaluation" type="text"
                                                                   name="arrive_address_evaluation"
                                                                   data-constraints="@Required"
                                                                   style="pointer-events: none;">

                                                        </div>

                                                        <div class="form-wrap">
                                                            <input hidden class="form-input"
                                                                   id="distance_address_evaluation" type="text"
                                                                   name="distance_address_evaluation"
                                                                   data-constraints="@Required"
                                                                   style="pointer-events: none;">

                                                        </div>
                                                        <!-- Bouton pour afficher la div -->
                                                        <div class="form-wrap-2">

                                                            <div class="form-wrap">
                                                                <input class="form-input" id="home_address_evaluation"
                                                                       type="text" name="home_address_evaluation"
                                                                       data-constraints="@Required"
                                                                       style="pointer-events: none;"
                                                                       placeholder="Prendre mes coordonnées">
                                                                <label class="form-label"
                                                                       for="form-location"></label><span
                                                                    class="form-icon mdi mdi-map-marker"></span>
                                                            </div>
                                                            <div class="form-button">
                                                                <button id="toggleMapBtn2"
                                                                        class="button button-block button-primary button-winona"
                                                                        type="button">
                                                                    Masquer
                                                                </button>

                                                            </div>
                                                        </div>

                                                        <div id="mapContainer2" class="form-wrap" style="display: ">
                                                            <br>
                                                            <!--   <input class="form-input" id="" type="text" name="" data-constraints="@Required" style="pointer-events: none;" placeholder="Choisissez votre adresse" >
                            --> <label class="form-label" for="form-location"></label><span
                                                                class="form-icon mdi mdi-map-marker"></span>
                                                            <div class="form-wrap" id="map2"
                                                                 style="height: 350px;"></div>
                                                            <div class="form-wrap">
                                                                <!-- <button type="button" id="locate-me2" class="button button-block button-primary">
                                                                Aller à ma position
                                                             </button> -->
                                                            </div>


                                                        </div>


                                                        <div class="form-wrap">
                                                            <!-- Select 2-->
                                                            <select class="form-input select button-shadow "
                                                                    name="trajectory" data-constraints="@Required"
                                                                    required>
                                                                <option value="" selected style="display: none">Votre
                                                                    trajet
                                                                </option>
                                                                <option value="Aller Simple">Aller Simple</option>
                                                                <option value="Retour Simple">Retour Simple</option>
                                                                <option value="Aller-Retour">Aller-Retour</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-wrap">
                                                            <!-- <div class="form-wrap">
                                    <input class="form-input" id="form-phone" type="text" name="phone_number"
                                           data-constraints="@Required{{-- @PhoneNumber--}}" required placeholder="Votre téléphone mobile">
                                    <label class="form-label" for="form-phone"></label><span
                                        class="form-icon mdi mdi-cellphone"></span>
                                </div> -->
                                                            <div class="form-button">
                                                                <button id="openModal"
                                                                        class="button button-block button-primary button-winona"
                                                                        type="button">
                                                                    Essayer
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <!-- La Modal -->
                                                        <div id="myModal" class="modal">
                                                            <div class="modal-content">
                                                                <span class="close">&times;</span>
                                                                <h4>Résultats de la simulation</h4>
                                                                <!--   <p id="modalDeparture"></p>
                                                                  <p id="modalArrival"></p> -->
                                                                <p id="modalDistance"></p>
                                                                <p id="modalPrice"></p>
                                                            </div>
                                                        </div>

                                                        <!--fin Button trigger modal -->

                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Button trigger modal -->


                        <!-- RD Mailform-->

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
                                <li>Destination : Ecole</li>
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
                                <li>Retard Chauffeur : Aucune tolérance</li>
                                <li>Retard Client : Non applicable</li>
                                <li>Jours de Service : Lundi à Vendredi</li>
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
                        <img class="phone-frame-2-outer" src="{{ asset('template/bus/images/frame-1-533x868.png') }}"
                             alt="" width="533" height="868"/>
                    </div>
                </div>
                <div class="col-md-7 col-lg-6 wow fadeInRightSmall">
                    <h3>Avantages</h3>
                    <!-- Bootstrap tabs -->
                    <div class="tabs-custom tabs-horizontal tabs-line tabs-line_1 block-8" id="tabs-1">
                        <!-- Nav tabs-->
                        <ul class="nav nav-tabs">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" href="#tabs-1-1"
                                   data-toggle="tab"><span>SuiSco Transport</span></a></li>
                            <!-- <li class="nav-item" role="presentation">
                               <a class="nav-link" href="#tabs-1-2" data-toggle="tab"><span>Consignation</span></a>
                           </li>  -->
                        </ul>
                        <!-- Tab panes-->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-1-1">
                                <!-- <p>Download our app and enjoy the best service from TAXPRO. All you have to do to begin
                                    using it is to enter your name and mobile phone number. You’ll access:</p> -->
                                <p>Service de transport dédié aux élèves, enseignants et parents d’élèves.</p>
                                <ul class="list-marked list-marked_secondary">
                                    <li>Véhicules neuves</li>
                                    <li>Assurance tous risques</li>
                                    <li>Chauffeurs experimentés</li>
                                    <li>Services personnalisés</li>
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
                                         src="{{ asset('template/bus/images/dr.jpg')  }}" alt="" width="74"
                                         height="74"/>
                                    <div class="quote-modern-info-main">
                                        <cite class="quote-modern-cite"> Dr Tsolenyanu</cite>
                                        <p class="quote-modern-position">Diplomate</p>
                                    </div>
                                </div>
                            </div>
                            <div class="quote-modern-main">
                                <div class="quote-modern-text">
                                    <p>Votre service de transport a rendu le deplacement plus agréable à mes enfants.
                                        Le chauffeur connaissait parfaitement les raccourcis pour eviter le trafic.
                                    </p>
                                </div>
                                <div class="quote-modern-meta">
                                    <a class="quote-modern-link icon mdi mdi-facebook" href="#"></a>
                                    <time class="quote-modern-time" datetime="2019">Mar 24, 2024</time>
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
                                         src="{{ asset('template/bus/images/Nathalie Yao-Amuama.jpeg')  }}" alt=""
                                         width="74" height="74"/>
                                    <div class="quote-modern-info-main">
                                        <cite class="quote-modern-cite">Yao-Amuama</cite>
                                        <p class="quote-modern-position">Miss Togo</p>
                                    </div>
                                </div>
                            </div>
                            <div class="quote-modern-main">
                                <div class="quote-modern-text">
                                    <p> Ma nièce utilise regulierement ce service de transport et elle est impressionnée
                                        par sa fiabilité.
                                        les vehicules sont propres,et les horaires sont respectés.
                                    </p>
                                </div>
                                <div class="quote-modern-meta">
                                    <a class="quote-modern-link icon mdi mdi-facebook" href="#"></a>
                                    <time class="quote-modern-time" datetime="2019">Mar 24, 2024</time>
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
                                         src="{{ asset('template/bus/images/kako Nubukpo.jpg') }}" alt="" width="74"
                                         height="74"/>
                                    <div class="quote-modern-info-main">
                                        <cite class="quote-modern-cite">kako Nubukpo </cite>
                                        <p class="quote-modern-position">Economiste</p>
                                    </div>
                                </div>
                            </div>
                            <div class="quote-modern-main">
                                <div class="quote-modern-text">
                                    <p>Le chauffeur etait ponctuel, respectieux et avait dela conversation.
                                        Je recommande le service pour des deplacements en toute confiance de mes
                                        enfants!
                                    </p>
                                </div>
                                <div class="quote-modern-meta">
                                    <a class="quote-modern-link icon mdi mdi-facebook" href="#"></a>
                                    <time class="quote-modern-time" datetime="2019">Mar 24, 2024</time>
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
             style="background-image: url('{{ asset('template/bus/images/b3.jpg') }}'); background-size: cover; background-position: center;">
        <div class="parallax-content">
            <div class="container">
                <div class="row row-50 justify-content-end">
                    <div class="col-md-6 col-lg-5">
                        <h1 class="wow clipInLeft"><span class="font-weight-light">-50%</span> on first order</h1>
                        <p class="big wow clipInLeft" data-wow-delay=".1s">
                            Our first-time customers get a great discount
                            on their order.
                        </p>
                        <a class="button button-primary button-winona wow clipInLeft" href="#" data-wow-delay=".1s">Reservez
                            Maintenant</a>
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
                            <img class="brand-logo-dark"
                                 src="{{ asset('template/bus/images/logo-suiscobus-288X36.png') }}" alt=""
                                 width="144" height="18"
                                 srcset="{{ asset('template/bus/images/logo-suiscobus-288X36.png') }} 2x"/>
                        </a>
                        <p><span style="max-width: 250px;">SuiSco assure le transport des élèves du primaire au lycée sur la région du GRAND LOMÉ..</span>
                        </p><a class="button button-sm button-default-outline button-winona" href="#">Reservez
                            Maintenant</a>
                    </div>

                    <div class="{{--col-sm-6 col-lg-3 col-xl-3--}} col-md-4 col-sm-6 col-xs-12 text-center">
                        <div><img src="{{asset("home_page/images/logos/logo.png")}}" alt="SuiSco Logo" width="60"
                                  height="60"></div>
                        <p><span style="max-width: 250px;">
                            SuiSco est une société spécialisée dans la numérisation des services autour de l’éducation et l’enseignement.
                            Créée en 2017 sous la Référence N°RCCM TG-LOM 2017 A 3570.</span>
                        </p>
                    </div>

                    <div class="{{--col-sm-5 col-lg-9 col-xl-2--}} col-md-4 col-sm-6 col-xs-12 text-center">
                        <h5 class="footer-classic-title">Nos Contacts</h5>
                        {{--<div class="row row-20 row-sm-35 text-center">--}}
                        <ul class="list footer-classic-list">
                            <li><span class="mdi mdi-map-marker"></span> Qt TERRAIN LYCEE AGOE, Lomé</li>
                            <li><span class="mdi mdi-phone"></span> +228  99 99 89 99</li>
                            <li><span class="mdi mdi-pencil"></span> <a href="mailto:info@ops.tg">info@suisco.net</a>
                            </li>
                            <li><span class="mdi mdi-clock"></span> Lun-Ven: 8:00-19:00, Sam: 10:00-15:00</li>
                        </ul>
                        <div class="group group-xs">
                            <a class="link link-social-1 mdi mdi-facebook" target="_blank"
                               href="https://www.facebook.com/SuiviScolair/" title="Facebook">
                            </a>

                            <a class="link link-social-1 mdi mdi-twitter" target="_blank"
                               href="https://twitter.com/ScolaireSuivi" title="Twitter" style="pointer-events: none;">
                            </a>

                            {{--<a class="link link-social-1 mdi mdi-instagram" href="#"></a>--}}

                            <a class="link link-social-1 mdi mdi-youtube-play" target="_blank"
                               href="https://www.youtube.com/channel/UCfpTZEjAYvzoO4xNaFdeFjQ/" title="Youtube"
                               style="pointer-events: none;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-classic-aside">
            <div class="container">
                <p class="rights">
                    <span>&copy;&nbsp; </span><span>Copyright 2020 SuiSco Transport | ITPLEX CONSULT.</span></p>
            </div>
        </div>
    </footer>
</div>
<div class="snackbars" id="form-output-global"></div>

<script src="{{ asset('template/bus/js/core.min.js') }}"></script>
<script src="{{ asset('template/bus/js/script.js') }}"></script>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>


<!-- Script Reserver carte -->
<script>

    console.log("myMapvar dans le map");

    console.log(myMapvar);

    document.addEventListener('DOMContentLoaded', function () {
        var map = L.map('map').setView([6.1356, 1.2226], 15);

        // Charger les tuiles de la carte
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors',
            maxZoom: 20
        }).addTo(map);

        // Fonction pour obtenir la position actuelle de l'utilisateur
        function locateUser() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                        var lat = position.coords.latitude;
                        var lon = position.coords.longitude;

                        // Centrer la carte sur la position actuelle
                        map.setView([lat, lon], 17);

                        // Ajouter un marqueur à la position actuelle
                        if (currentMarker) {
                            map.removeLayer(currentMarker);
                        }
                        /*  currentMarker = L.marker([lat, lon]).addTo(map)
                                .bindPopup('Vous êtes ici')
                                .openPopup(); */

                        // Mettre à jour le champ caché avec les coordonnées du point actuel
                        document.getElementById('home_address').value = `${lat},${lon}`;
                    },
                    function () {
                        alert("Erreur de géolocalisation. Veuillez autoriser l'accès à votre position.");
                    }, {
                        enableHighAccuracy: true
                    });
            } else {
                alert("Géolocalisation non supportée.");
            }
        }

        // Marqueur actuel
        var currentMarker = null;

        // Ajouter un marqueur lorsqu'on clique sur la carte
        map.on('click', function (e) {
            var lat = e.latlng.lat;
            var lon = e.latlng.lng;

            // Appeler reverseGeocode pour obtenir le nom du lieu
            reverseGeocode(lat, lon, function (name) {
                // Supprimer le marqueur précédent s'il existe
                if (currentMarker) {
                    map.removeLayer(currentMarker);
                }

                // Ajouter un nouveau marqueur au point cliqué
                currentMarker = L.marker([lat, lon]).addTo(map)
                    .bindPopup('Point cliqué: ' + name)
                    .openPopup();

                // Mettre à jour le champ caché avec les coordonnées du point cliqué
                document.getElementById('home_address').value = `${lat},${lon}`;
            });
        });

        // Fonction de géocodage inverse pour obtenir le nom géographique
        function reverseGeocode(lat, lon, callback) {
            var url = `https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lon}&addressdetails=1`;
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    var address = data.address;
                    var name = address ? [
                        address.road || '',
                        address.suburb || '',
                        address.city || '',
                        address.state || '',
                        address.country || ''
                    ].filter(part => part).join(', ') : 'N/A';
                    callback(name);
                })
                .catch(() => {
                    callback('N/A');
                });
        }

        // Appel automatique pour localiser l'utilisateur lorsque la page est chargée
        locateUser();

        // Ajouter un écouteur d'événement au bouton pour localiser l'utilisateur
        document.getElementById('locate-me').addEventListener('click', function () {
            locateUser();
        });
    });

</script>

<!-- Script Evaluer carte  -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var map2 = L.map('map2').setView([6.1356, 1.2226], 15);

        // Charger les tuiles de la carte
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors',
            maxZoom: 20
        }).addTo(map2);

        // Marqueurs pour les points de départ et d'arrivée
        var startMarker2 = null;
        var endMarker2 = null;

        // Variables pour stocker les coordonnées des points
        var startLatLng2 = null;
        var endLatLng2 = null;

        // Fonction pour obtenir la position actuelle de l'utilisateur
        function locateUser2() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                        var lat2 = position.coords.latitude;
                        var lon2 = position.coords.longitude;

                        // Centrer la carte sur la position actuelle
                        map2.setView([lat2, lon2], 17);

                        // Ajouter un marqueur à la position actuelle
                        if (startMarker2) {
                            map2.removeLayer(startMarker2);
                        }
                        startLatLng2 = L.latLng(lat2, lon2);
                        /* startMarker2 = L.marker([lat2, lon2]).addTo(map2)
                            .bindPopup('Point actuel')
                            .openPopup();
     */
                        // Mettre à jour le champ de formulaire pour le départ
                        document.getElementById('departure_address_evaluation').value = `Lat: ${startLatLng2.lat}, Lng: ${startLatLng2.lng}`;

                    },
                    function () {
                        alert("Erreur de géolocalisation. Veuillez autoriser l'accès à votre position.");
                    }, {
                        enableHighAccuracy: true
                    });
            } else {
                alert("Géolocalisation non supportée.");
            }
        }

        // Fonction pour gérer les clics sur la carte
        function handleMapClick(e) {
            var lat2 = e.latlng.lat;
            var lon2 = e.latlng.lng;

            // Mettre à jour le point de départ avec la position cliquée
            if (startMarker2) {
                map2.removeLayer(startMarker2);
            }
            startLatLng2 = e.latlng; // Définir le point de départ
            startMarker2 = L.marker([lat2, lon2]).addTo(map2)
                .bindPopup('Point choisi')
                .openPopup();

            // Récupérer les coordonnées de l'école à partir du champ
            var schoolCoords = document.getElementById('school_address_evaluation').value;
            var schoolLatLng = schoolCoords.split(',').map(Number); // Convertir en tableau de nombres

            if (schoolLatLng.length === 2) {
                // Créer un latlng pour le point de l'école
                endLatLng2 = L.latLng(schoolLatLng[0], schoolLatLng[1]);

                // Supprimer le marqueur d'arrivée précédent s'il existe
                if (endMarker2) {
                    map2.removeLayer(endMarker2);
                }
                endMarker2 = L.marker(endLatLng2).addTo(map2)
                    .bindPopup('École')
                    .openPopup();

                // Calculer la distance entre les points
                var distance2 = startLatLng2.distanceTo(endLatLng2);

                // Mettre à jour les champs de formulaire avec les coordonnées et la distance
                document.getElementById('departure_address_evaluation').value = `Lat: ${startLatLng2.lat}, Lng: ${startLatLng2.lng}`;
                document.getElementById('arrive_address_evaluation').value = `Lat: ${endLatLng2.lat}, Lng: ${endLatLng2.lng}`;
                document.getElementById('distance_address_evaluation').value = `${(distance2 / 1000).toFixed(2)} km`; // Convertir la distance en kilomètres

                // Afficher les valeurs dans la console
                console.log(document.getElementById('departure_address_evaluation').value);
                console.log(document.getElementById('arrive_address_evaluation').value);
                console.log(document.getElementById('distance_address_evaluation').value);

                // Mise à jour des valeurs dans le popup
                document.getElementById('modalDistance').textContent = 'Distance estimée: ' + document.getElementById('distance_address_evaluation').value;
                document.getElementById('modalPrice').textContent = 'Prix: ' + price;
            } else {
                alert("Choissisz votre école et réessayez.");
            }
        }

        // Ajouter un écouteur d'événement pour cliquer sur la carte
        map2.on('click', handleMapClick);

        // Appel automatique pour localiser l'utilisateur lorsque la page est chargée
        locateUser2();

        // Ajouter un écouteur d'événement au bouton pour localiser l'utilisateur
        document.getElementById('locate-me2').addEventListener('click', function () {
            locateUser2();
        });
    });
</script>


<!-- Script Masquer Evaluer carte  -->

<script>
    var myMapvar2 = 0;
    document.getElementById('toggleMapBtn2').addEventListener('click', function () {
        var mapContainer = document.getElementById('mapContainer2');

        if (mapContainer.style.display === 'none' || mapContainer.style.display === '') {
            mapContainer.style.display = 'block';
            myMapvar2 = 1;
            console.log("myMapvar dans Afficher");

            console.log(myMapvar2);

            this.textContent = 'Masquer'; // Changer le texte du bouton
        } else {
            mapContainer.style.display = 'none';
            this.textContent = 'Afficher'; // Changer le texte du bouton
            myMapvar2 = 0;
            console.log("myMapvar dans Masquer");

            console.log(myMapvar2);
        }
    });
</script>

<!-- Script Ouvrir Modal  -->

<script>
    // script.js

    // Récupérer les éléments
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("openModal");
    var span = document.getElementsByClassName("close")[0];

    // Mettre à jour les champs de formulaire avec les coordonnées et la distance
    var departure = document.getElementById('departure_address_evaluation').value;
    console.log("depart");
    console.log(departure);

    var arrive = document.getElementById('arrive_address_evaluation').value;
    var distance = document.getElementById('distance_address_evaluation').value;
    var price = "20.000 FCFA";


    // Mettre à jour le contenu de la modal

    // Afficher les valeurs dans la console
    console.log("depart2");
    console.log(document.getElementById('departure_address_evaluation').value);
    console.log(document.getElementById('arrive_address_evaluation').value);
    console.log(document.getElementById('distance_address_evaluation').value);


    // Lorsque l'utilisateur clique sur le bouton, ouvrir la modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // Lorsque l'utilisateur clique sur (x), fermer la modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // Lorsque l'utilisateur clique en dehors de la modal, fermer la modal
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

</script>

{{--<script src="{{ asset('template/js/jquery-3.3.1.min.js') }}"></script>--}}
@include('flashy::message')
<!-- coded by Ragnar-->
</body>
</html>
