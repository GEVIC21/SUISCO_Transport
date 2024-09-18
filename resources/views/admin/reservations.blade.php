@extends('app')
@section('title','Réservations')
@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


    <style>
 /* La Modal (cachée par défaut) */
        .modal {
            display: none; /* Cachée par défaut */
            position: fixed; /* Reste en place lors du défilement */
             z-index: 1000; /* Met la modal au-dessus du contenu */
            left: 0;
            top: 0;
            width: 100%; /* Occupe toute la largeur */
            height: 100%; /* Occupe toute la hauteur */
            overflow: auto; /* Ajoute une barre de défilement si nécessaire */
            background-color: rgb(0,0,0); /* Fond semi-transparent */
            background-color: rgba(0,0,0,0.4); /* Fond semi-transparent */

        }

        /* Contenu de la Modal */
        .modal-content {
            color: #000;
            background-color: #ffffff; /* Fond blanc pour un contraste élégant */
            margin: 8% auto; /* Centre verticalement et horizontalement */
            padding: 20px;
            border-radius: 20px; /* Coins arrondis élégants */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Ombre douce pour un effet de profondeur */
            width: 50%; /* Réduit la largeur pour permettre le déplacement */
            transform: scale(0.9); /* Départ de l'animation */
            animation: scaleUp 0.4s forwards; /* Animation d'agrandissement */
            border: 1px solid #239dd4; /* Bordure colorée pour un effet pop */
            background: linear-gradient(135deg,#7eba42,#ffffff); /* Fond dégradé */


        }
        .modal-content h4 {
            color: #2c343b; /* Titre plus doux et élégant */
            font-size: 26px; /* Taille de police agrandie */
            margin-bottom: 15px; /* Espacement en dessous du titre */
            text-align: center; /* Centre le texte */
        }
        /* Animation d'agrandissement */
        @keyframes scaleUp {
            to {
                transform: scale(1); /* Passe à 100% de la taille */
            }
        }
        .modal-content p {
            color: #000; /* Texte en gris foncé */
            font-size: 18px; /* Taille de police ajustée */
            margin-bottom: 20px; /* Espacement en dessous du texte */
            text-align: center; /* Centre le texte */
        }
            /* Le bouton de fermeture */
     .close {
        position: absolute; /* Positionné dans le coin supérieur droit */
                     right: 10px;
                    top: 20px;
                    color: #000; /* Couleur grise douce */
                    font-size: 28px; /* Taille augmentée */
                    font-weight: bold; /* En gras */
                    cursor: pointer; /* Curseur en pointeur pour indiquer un élément cliquable */
                    transition: color 0.3s; /* Animation douce au survol */
        }


    @media (max-width: 600px) {
    .modal-content {
        width: 90%; /* Occupe presque toute la largeur sur petits écrans */
        padding: 20px; /* Réduit le padding sur mobiles */
        top:2rem;
    }
    #responsive {
        width: 90%;
        height: 36rem;
    }
    
    .close {
        position: absolute; /* Positionné dans le coin supérieur droit */
                     right: 10px;
                    top: 20px;
                    color: #000; /* Couleur grise douce */
                    font-size: 28px; /* Taille augmentée */
                    font-weight: bold; /* En gras */
                    cursor: pointer; /* Curseur en pointeur pour indiquer un élément cliquable */
                    transition: color 0.3s; /* Animation douce au survol */
    }
}

/* Style du bouton Valider - moins large */
.button-validate {
    width: 90px;
    display: inline-block;
    padding: 8px 16px; /* Réduction du padding pour un bouton plus étroit */
    background-color: #239dd4; /* Couleur verte pour valider */
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;

}

/* Effet hover sur le bouton */
.button-validate:hover {
    background-color: #239dd4;
}


    </style>
@endsection

@section('content')
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Réservations</h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>
    <!--begin::Post-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            <!--begin::Products-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-start gap-5">
                        <!--end::Flatpickr-->
                        <!--begin::Add product-->
                       {{-- <a href="../../demo1/dist/apps/ecommerce/catalog/add-product.html" class="btn btn-instagram" >Add
                            Order</a>--}}
                        <!--end::Add product-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0 table-responsive">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_sales_table">
                        <!--begin::Table head-->
                        <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                            <th class="min-w-50px">Numero de Telephone</th>
                            <th class="min-w-50px">Service</th>
                            <th class="min-w-50px">Trajet</th>
{{--                            <th class="min-w-100px">Trajet</th>--}}
                            <th class="min-w-100px">Adresse de la maison</th>
                            <th class="min-w-100px">Adresse de l'école</th>
                            <th class="min-w-50px">Estimation Distance (Maison->Ecole)</th>
                            <th class="min-w-100px">Estimation Prix/ Prix Final</th>
                            <th class="min-w-100px">Statut</th>
                            <th class="min-w-100px">Date et Heure</th>
                            <th class="text-start min-w-50px">Actions</th>
-
                        </tr>
                        <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                        <!--begin::Table row-->
                        @foreach($reservations as $reservation)
                            <tr>
                                <!--begin::Order ID=-->
                                <td>
                                    <span
                                       class="text-gray-800 fw-bolder">{{$reservation->phone_numbre}}
                                    </span>
                                </td>
                                <!--end::Order ID=-->
                                <!--begin::Customer=-->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Title-->
                                        <span class="fw-bolder">{{$reservation->service}}</span>
                                        <!--end::Title-->
                                    </div>
                                </td>
                                <!--begin::Customer=-->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Title-->
                                        <span class="fw-bolder">{{$reservation->route}}</span>
                                        <!--end::Title-->
                                    </div>
                                </td>
                                <!--end::Customer=-->
                                <!--begin::Status=-->
                                {{--<td class="text-end pe-0 d-flex align-items-center" data-order="Completed">
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">{{$reservation->route}}</div>
                                    <!--end::Badges-->
                                </td>--}}
                                <!--end::Status=-->
                                <!--begin::Total=-->
                                <td class="pe-0" id="openModal">
                                    <span class="fw-bolder text-hover-primary">{{$reservation->house_location}}</span>
                                </td>

                                <!--end::Total=-->
                                <!--begin::Date Added=-->
                                <td class="pe-0" data-order="2022-02-07">
                                    <span class="fw-bolder">{{$reservation->school_location}}</span>
                                </td>
                                <!--end::Date Added=-->
                                <!--begin::Date Added=-->
                                <td class="pe-0" data-order="2022-02-07">
                                    <span class="fw-bolder align-center">
                                        @if($reservation->distance)
                                            {{$reservation->distance}} Km
                                        @else
                                            <div class="badge badge-light-info">Pas disponible</div>
                                        @endif
                                        </span>
                                </td>
                                <!--end::Date Added=-->
                                <!--begin::Date Added=-->
                                <td class="pe-0" data-order="2022-02-07">
                                    <span class="fw-bolder">
                                        @if($reservation->price)
                                            {{$reservation->price}} FCFA
                                        @else
                                            <div class="badge badge-light-info">Non disponible</div>
                                        @endif
                                    </span>
                                </td>
                                <!--end::Date Added=-->

                                <td class="pe-0  align-items-center">
                                    <!--begin::Badges-->
                                    <div class="badge @if($reservation->status == "Traitée")badge-light-primary @elseif($reservation->status == "Traitée et Conclue")badge-light-success @else badge-light-danger @endif">{{$reservation->status}}</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Date Modified=-->
                                <!--begin::Date Modified=-->
                                <td class="pe-0" >
                                    <span class="fw-bolder">{{$reservation->created_at}}</span>
                                </td>
                                <!--begin::Action=-->
                                <td class="text-start">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-5 m-0">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
																<path
                                                                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                    fill="black"/>
															</svg>
														</span>
                                        <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a class="menu-link px-3" href="{{route('admin.update.reservation',$reservation->id)}}">Traiter</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        {{--<div class="menu-item px-3">
                                            <span class="menu-link px-3">Edit</span>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                        <span class="menu-link px-3"
                                              data-kt-ecommerce-order-filter="delete_row">Delete</span>
                                        </div>--}}
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <!--end::Table row-->
                        @endforeach

                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Products-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->


                        <!-- La Modal -->
                <div id="myModal" class="modal" style="display: none;"> <!-- S'assurer que le modal est masqué par défaut -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h4>Sélectionnez votre maison</h4>
                        
                        <!-- Le contenu de la modal -->
                         <!-- Carte et contenu de la modal -->
                         <div id="mapContainer" class="form-wrap">
                                <br>
                                <label class="form-label" for="form-location"></label>
                                <span class="form-icon mdi mdi-map-marker"></span>
                                <div class="form-wrap" id="map" style="height: 350px;"></div>
                                <div class="form-wrap">
                                    <!-- Espace pour bouton ou autre contenu -->
                                </div>
                            </div> <br>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <button class="button-validate" id="validateBtn1">OK</button>
                        </div>
                    </div>
                </div>

@endsection
@section('scripts')
    <script src="{{asset('secunda/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/@turf/turf"></script>
    <script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>



    <script>

        var myMapvar;
        document.getElementById('toggleMapBtn').addEventListener('click', function() {
            var mapContainer = document.getElementById('mapContainer');

            if (mapContainer.style.display === 'none' || mapContainer.style.display === '') {
                mapContainer.style.display = 'block';
                myMapvar= 1;
                console.log("myMapvar dans Afficher");

                console.log(myMapvar);

                this.textContent = 'Masquer';
            } else {
                mapContainer.style.display = 'none';
                this.textContent = 'Afficher';
                myMapvar= 0;
                console.log("myMapvar dans Masquer");

                console.log(myMapvar);
            }
        });

</script>

                                                            
    <script>
        $(document).ready(function () {
            $('#kt_ecommerce_sales_table').DataTable(
                {
                    "order": [[7, 'desc'],[8,'desc']]
                }
            );
        });
    </script>



<!-- Script Ouvrir Modal Evaluer Résultats  -->

<script>
    // Récupérer les éléments
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("openModal"); // Correctement lié au TD
    var span = document.getElementsByClassName("close")[0];
    
    var map; // Déclaration de la variable map2 pour une portée globale
    var routingControl = null; // Variable pour stocker le contrôle de routage


    // Ouvrir le modal lorsque l'utilisateur clique sur le bouton (le TD ici)
    btn.onclick = function() {
        modal.style.display = "block";

        // Initialiser la carte seulement lorsque la modal est ouverte
        if (!map) {
            map = L.map('map').setView([6.1356, 1.2226], 15);

            // Charger les tuiles de la carte
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors',
                maxZoom: 20
            }).addTo(map);
 
        } else {
            // La carte est déjà initialisée, donc nous devons seulement redimensionner
            map.invalidateSize();
        }
    }

    // Lorsque l'utilisateur clique sur (x), fermer la modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // Fermer le modal si l'utilisateur clique en dehors du modal
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>



@endsection