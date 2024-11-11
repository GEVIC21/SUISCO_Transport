@extends('app')
@section('title', 'Ajouter un Chauffeur')
@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"/>
@endsection

@section('content')
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                 data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                 class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Ajouter un Chauffeur</h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Content-->
            <div class="flex-lg-row-fluid ms-lg-15">
                <!--begin:::Tab content-->
                <div class="tab-content" id="myTabContent">
                    <!--begin:::Tab pane-->
                    <div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">
                        <!--begin::Products-->
                        <div class="card card-flush">
                            <!--begin::Card header-->
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                    <!--begin::Back button-->
                                    <a href="{{route('admin.chauffeur')}}" class="btn btn-primary btn-active-color-success">
                                        <i class="bi bi-back"></i>Retour
                                    </a>
                                    <!--end::Back button-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Form-->
                                <form id="kt_ecommerce_settings_general_form" class="form" action="{{route('admin.store.chauffeur')}}" method="post">
                                    @csrf
                                    <!--begin::Input group: Nom-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Nom</span>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control form-control-solid" required name="nom" />
                                            @error('nom')
                                            <div style="color: red; font-size: smaller;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end::Input group: Nom-->

                                    <!--begin::Input group: Prénom-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Prénom</span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control form-control-solid" required name="prenom" />
                                            @error('prenom')
                                            <div style="color: red; font-size: smaller;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end::Input group: Prénom-->

                                    <!--begin::Input group: Email-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Email</span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="email" class="form-control form-control-solid" required name="email" />
                                            @error('email')
                                            <div style="color: red; font-size: smaller;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end::Input group: Email-->

                                    <!--begin::Input group: Mot de passe-->

                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Mot de passe</span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control form-control-solid" required name="password" />
                                            @error('password')
                                            <div style="color: red; font-size: smaller;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Champ pour la confirmation du mot de passe -->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Confirmer le mot de passe</span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control form-control-solid" required name="password_confirmation" />
                                        </div>
                                    </div>
                                    <!--end::Input group: Mot de passe-->

                                    <!--begin::Input group: Voiture-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Voiture</span>
                                            </label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control form-control-solid" required name="voiture" />
                                            @error('voiture')
                                            <div style="color: red; font-size: smaller;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end::Input group: Voiture-->

                                    <!--begin::Action buttons-->
                                    <div class="row">
                                        <div class="col-md-9 offset-md-3">
                                            <div class="separator mb-6"></div>
                                            <div class="d-flex justify-content-lg-start">
                                                <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Annuler</button>
                                                <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                                                    <span class="indicator-label">Valider</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Action buttons-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Products-->
                    </div>
                    <!--end:::Tab pane-->
                </div>
                <!--end:::Tab content-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
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

