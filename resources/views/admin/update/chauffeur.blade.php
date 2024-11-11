@extends('app')
@section('title', 'Modifier un Chauffeur')
@section('styles')
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"/>
@endsection
@section('content')
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <div class="container-fluid d-flex flex-stack">
            <div class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="text-dark fw-bolder fs-3 my-1">Modifier un Chauffeur</h1>
            </div>
        </div>
    </div>
    <!--end::Toolbar-->

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div class="container-xxl">
            <div class="card card-flush">
                <div class="card-header py-5">
                    <div class="card-toolbar flex-row-fluid justify-content-end">
                        <a href="{{ route('admin.chauffeur') }}" class="btn btn-primary">
                            <i class="bi bi-back"></i> Retour
                        </a>
                    </div>
                </div>

                <div class="card-body pt-0">
                    <form action="{{ route('admin.update.chauffeur', $chauffeur->id) }}" method="post" class="form">
                        @csrf
                        @method('PUT')

                        <!-- Champ pour le nom -->
                        <div class="row mb-7">
                            <div class="col-md-3 text-md-end">
                                <label class="fs-6 fw-bold form-label mt-3">Nom</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="nom" class="form-control form-control-solid" value="{{ $chauffeur->nom }}" required />
                                @error('nom')
                                <div style="color: red; font-size: smaller;">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Champ pour le prénom -->
                        <div class="row mb-7">
                            <div class="col-md-3 text-md-end">
                                <label class="fs-6 fw-bold form-label mt-3">Prénom</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="prenom" class="form-control form-control-solid" value="{{ $chauffeur->prenom }}" required />
                                @error('prenom')
                                <div style="color: red; font-size: smaller;">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Champ pour l'email -->
                        <div class="row mb-7">
                            <div class="col-md-3 text-md-end">
                                <label class="fs-6 fw-bold form-label mt-3">Email</label>
                            </div>
                            <div class="col-md-9">
                                <input type="email" name="email" class="form-control form-control-solid" value="{{ $chauffeur->email }}" required />
                                @error('email')
                                <div style="color: red; font-size: smaller;">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Champ pour le modèle de voiture -->
                        <div class="row mb-7">
                            <div class="col-md-3 text-md-end">
                                <label class="fs-6 fw-bold form-label mt-3">Modèle de voiture</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="voiture" class="form-control form-control-solid" value="{{ $chauffeur->voiture }}" required />
                                @error('voiture')
                                <div style="color: red; font-size: smaller;">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Boutons d'action -->
                        <div class="row">
                            <div class="col-md-9 offset-md-3">
                                <div class="d-flex justify-content-lg-start">
                                    <button type="reset" class="btn btn-light me-3">Annuler</button>
                                    <button type="submit" class="btn btn-primary">Valider</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('secunda/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function () {
            $('#kt_ecommerce_sales_table').DataTable();
        });
    </script>
@endsection
