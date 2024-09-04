@extends('app')
@section('title','Ecoles')
@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"/>
@endsection

@section('content')
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Ecoles</h1>
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
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Products-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <!--end::Flatpickr-->
                        <!--begin::Add product-->
                        <a href="{{route('admin.add.ecole')}}" class="btn btn-instagram" ><i class="bi bi-plus-circle-fill"></i>Ajouter
                            École</a>
                        <!--end::Add product-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_sales_table">
                        <!--begin::Table head-->
                        <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                            <th class="min-w-100px">Accronyms</th>
                            <th class="min-w-100px">Nom</th>
                            <th class="min-w-100px">Adresses Géographique</th>
                            <th class="min-w-100px">Date et Heure</th>
{{--                            <th class="min-w-100px">Trajet</th>--}}
                            <th class="text-end min-w-100px">Actions</th>
                        </tr>
                        <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                        <!--begin::Table row-->
                        @foreach($schools as $school)
                            <tr>
                                <!--begin::Order ID=-->
                                <td data-kt-ecommerce-order-filter="order_id">
                                    <span
                                       class="text-gray-800 text-hover-primary fw-bolder">{{$school->Acronym}}
                                    </span>
                                </td>
                                <!--end::Order ID=-->
                                <!--begin::Customer=-->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Title-->
                                        <span class="text-gray-800 text-hover-primary fs-5 fw-bolder">{{$school->name}}</span>
                                        <!--end::Title-->
                                    </div>
                                </td>
                                <!--begin::Customer=-->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Title-->
                                        <span class="text-gray-800">{{$school->location}}</span>
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
                                <!--begin::Date Modified=-->
                                <td class="pe-0" >
                                    <span class="fw-bolder">{{$school->created_at}}</span>
                                </td>
                                <!--end::Date Modified=-->
                                <!--begin::Action=-->
                                <td class="text-end">
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
                                            <span class="menu-link px-3">View</span>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <span class="menu-link px-3">Edit</span>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                        <span class="menu-link px-3"
                                              data-kt-ecommerce-order-filter="delete_row">Delete</span>
                                        </div>
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
