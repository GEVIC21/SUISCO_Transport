@extends('app')
@section('title','Modifier une École')
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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Modifier une Ecole</h1>
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
                                    <!--end::Flatpickr-->
                                    <!--begin::Add product-->
                                    <a href="{{route('admin.ecoles')}}" class="btn btn-primary btn-active-color-success"><i
                                            class="bi bi-back"></i>Retour
                                    </a>
                                    <!--end::Add product-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Form-->
                                <form id="kt_ecommerce_settings_general_form" class="form" action="{{route('admin.do.update.school',$school->id)}}" method="post">
                                    @csrf
                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Accronym</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                   title="le sigle de l'école ex: EPDG"></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="accronym"
                                                   value="{{$school->Acronym}}"/>
                                            <!--end::Input-->
                                            @error('accronym')
                                            <div style="color: red;font-size: smaller;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Nom</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                   title="Le nom complet de l'école"></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" required name="name"
                                                   value="{{$school->name}}"/>
                                            <!--end::Input-->
                                            @error('name')
                                            <div style="color: red;font-size: smaller;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Coordonnée Géographique</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                   title="la longitude et latitude de l'école ex: "></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                   name="location" value="{{$school->location}}" required
                                                   data-kt-ecommerce-settings-type="tagify"/>
                                            <!--end::Input-->
                                            @error('location')
                                            <div style="color: red;font-size: smaller;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Action buttons-->
                                    <div class="row">
                                        <div class="col-md-9 offset-md-3">
                                            <!--begin::Separator-->
                                            <div class="separator mb-6"></div>
                                            <!--end::Separator-->
                                            <div class="d-flex justify-content-lg-start">
                                                <!--begin::Button-->
                                                <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                                        class="btn btn-light me-3">Annuler
                                                </button>
                                                <!--end::Button-->
                                                <!--begin::Button-->
                                                <button type="submit" data-kt-ecommerce-settings-type="submit"
                                                        class="btn btn-primary">
                                                    <span class="indicator-label">Valider</span>
                                                    <span class="indicator-progress">Please wait...
																		<span
                                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                                <!--end::Button-->
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
