@extends('app')
@section('title', 'Utilisateurs')
@section('styles')
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
@endsection

@section('content')
    <div class="contents mt-5">
        <div class="container-fluid">
            <div class="form-element">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Ajouter un role</h6>
                            </div>

                            <div class="card-body py-md-25">
                                <form action="{{ route('admin.role.insert') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <!-- Input for Role Name -->
                                        <div class="col-md-6 mb-3">
                                            <label for="roleName" class="form-label">Nom du rôle</label>
                                            <div class="input-group">
                                                <span class="input-group-text la-user lar" id="basic-addon1"></span>
                                                <input type="text" name="name" id="roleName" class="form-control"
                                                    placeholder="Duran Clayton" aria-label="Nom du rôle"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                        </div>

                                        <!-- Permissions Section -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label fw-bold mb-3">Permissions</label>
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Permission</th>
                                                                <th>Options</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($getPermission as $permission)
                                                                <tr>
                                                                    <td>{{ $permission['name'] }}</td>
                                                                    <td>
                                                                        <div class="d-flex flex-wrap gap-3">
                                                                            @foreach ($permission['group'] as $group)
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox"
                                                                                        id="checkbox-{{ $group['id'] }}"
                                                                                        name="permission_id[]"
                                                                                        value="{{ $group['id'] }}">
                                                                                    <label class="form-check-label"
                                                                                        for="checkbox-{{ $group['id'] }}">
                                                                                        {{ $group['name'] }}
                                                                                    </label>
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="col-md-12 d-flex justify-content-end mt-3">
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                        </div>
                                    </div>
                                </form>
                            </div>




                        </div>
                        <!-- ends: .card -->
                    </div>

                    {{-- <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Form Control</h6>
                                    </div>
                                    <div class="card-body pb-md-30">
                                        <form action="#">
                                            <div class="form-group">
                                                <label for="a11" class="il-gray fs-14 fw-500 align-center mb-10">Email
                                                    Address</label>
                                                <input type="text"
                                                    class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                    id="a11" placeholder="username@email.com">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1"
                                                    class="il-gray fs-14 fw-500 align-center mb-10">Example
                                                    Select</label>
                                                <select class="form-control px-15" id="exampleFormControlSelect1">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            <div class="form-group tagSelect-rtl">
                                                <label class="il-gray fs-14 fw-500 align-center mb-10">Example
                                                    multiple select</label>

                                                <div class="dm-select ">

                                                    <select name="select-tag" id="select-tag" class="form-control "
                                                        multiple="multiple">
                                                        <option value="01">Option 1</option>
                                                        <option value="02">Option 2</option>
                                                        <option value="03">Option 3</option>
                                                        <option value="04">Option 4</option>
                                                        <option value="05">Option 5</option>
                                                    </select>

                                                </div>

                                            </div>

                                            <div class="form-group form-element-textarea mb-20">
                                                <label for="exampleFormControlTextarea1"
                                                    class="il-gray fs-14 fw-500 align-center mb-10">Example
                                                    textarea</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card card-horizontal card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>HTML5 Inputs</h6>
                                    </div>
                                    <div class="card-body py-md-30">
                                        <div class="horizontal-form">
                                            <form action="#">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label for="inputName"
                                                            class=" col-form-label color-dark fs-14 fw-500 align-center">Text</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text"
                                                            class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                            id="inputName" placeholder="Duran Clayton">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label for="element-text"
                                                            class=" col-form-label color-dark fs-14 fw-500 align-center">Email
                                                            Address</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="email"
                                                            class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                            id="element-text" placeholder="username@email.com">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label for="element-text2"
                                                            class=" col-form-label color-dark fs-14 fw-500 align-center">URL</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="url"
                                                            class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                            id="element-text2"
                                                            placeholder="https://ninjadash-react-admin-dashboard-template">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label for="element-text3"
                                                            class=" col-form-label color-dark fs-14 fw-500 align-center">Phone</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="number"
                                                            class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                            id="element-text3" placeholder="017123456789">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label for="element-text4"
                                                            class=" col-form-label color-dark fs-14 fw-500 align-center">Password</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="password"
                                                            class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                            id="element-text4">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label for="element-text5"
                                                            class=" col-form-label color-dark fs-14 fw-500 align-center">Number</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="number"
                                                            class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                            id="element-text5" placeholder="123">
                                                    </div>
                                                </div>
                                                <div class="form-group row form-group-calender">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label for="datepicker7"
                                                            class=" col-form-label color-dark fs-14 fw-500 align-center">Datetime</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="position-relative">
                                                            <div
                                                                class="d-flex align-items-center justify-content-start ih-medium ip-light radius-xs b-light px-15 form-control">
                                                                <input type="text"
                                                                    class="ip-light border-0 shadow-none w-100px"
                                                                    id="datepicker7" placeholder="01/10/2021">
                                                                <input type="text"
                                                                    class="ip-light color-lighten border-0 shadow-none"
                                                                    id="time-picker2" placeholder="12:00 AM">
                                                            </div>
                                                            <a href="#"><img class="svg"
                                                                    src="img/svg/calendar.svg" alt="calendar.svg"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row form-group-calender">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label for="datepicker8"
                                                            class=" col-form-label color-dark fs-14 fw-500 align-center">Date</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="position-relative">
                                                            <input type="text"
                                                                class="form-control  ih-medium ip-light radius-xs b-light px-15"
                                                                id="datepicker8" placeholder="01/10/2021">
                                                            <a href="#"><img class="svg"
                                                                    src="img/svg/calendar.svg" alt="calendar"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row form-group-calender">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label for="datepicker"
                                                            class=" col-form-label color-dark fs-14 fw-500 align-center">Month</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="position-relative">
                                                            <input type="text"
                                                                class="form-control  ih-medium ip-light radius-xs b-light px-15"
                                                                id="datepicker" placeholder="January 20, 2018">
                                                            <a href="#"><img class="svg"
                                                                    src="img/svg/calendar.svg" alt="calendar"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row form-group-calender">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label for="datepicker9"
                                                            class=" col-form-label color-dark fs-14 fw-500 align-center">Week</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="position-relative">
                                                            <input type="text"
                                                                class="form-control  ih-medium ip-light radius-xs b-light px-15"
                                                                id="datepicker9" placeholder="Week 2, 2021">
                                                            <a href="#"><img class="svg"
                                                                    src="img/svg/calendar.svg" alt="calendar"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row form-group-calender mb-20">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label
                                                            class=" col-form-label color-dark fs-14 fw-500 align-center">Time</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="time-picker">
                                                            <div class="form-group mb-0">
                                                                <div
                                                                    class="input-container icon-right position-relative w-100 color-light ">
                                                                    <span class="input-icon icon-right">
                                                                        <img class="svg" src="img/svg/clock.svg"
                                                                            alt="clock">
                                                                    </span>
                                                                    <input type="text"
                                                                        class="form-control ih-medium ip-light radius-xs b-light px-15 color-lighten"
                                                                        id="time-picker" placeholder="12:00 AM">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row form-group-calender mb-20">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label
                                                            class=" col-form-label color-dark fs-14 fw-500 align-center">Color</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="color-picker">
                                                            <div class="form-group mb-0">
                                                                <div
                                                                    class="input-container icon-right position-relative w-100 color-light ">
                                                                    <input type="color"
                                                                        class="form-control ih-medium ip-light radius-xs b-light px-15 color-light"
                                                                        id="favcolor" value="#5F63F2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .card -->

                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Sizes</h6>
                                    </div>
                                    <div class="card-body">
                                        <form action="#">
                                            <div class="form-group">
                                                <label for="a12"
                                                    class="il-gray fs-14 fw-500 align-center mb-10">Large
                                                    Input</label>
                                                <input type="text"
                                                    class="form-control ih-large ip-light radius-xs b-light px-15"
                                                    id="a12" placeholder=".form-control.lg">
                                            </div>
                                            <div class="form-group">
                                                <label for="a13"
                                                    class="il-gray fs-14 fw-500 align-center mb-10">Default
                                                    Input</label>
                                                <input type="text"
                                                    class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                    id="a13" placeholder="Default input">
                                            </div>
                                            <div class="form-group">
                                                <label for="a14"
                                                    class="il-gray fs-14 fw-500 align-center mb-10">Small
                                                    Input</label>
                                                <input type="text"
                                                    class="form-control ih-small ip-light radius-xs b-light px-15"
                                                    id="a14" placeholder=".form-control.sm">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Form Control</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group form-element-textarea">
                                            <label for="exampleFormControlTextarea2"
                                                class="il-gray fs-14 fw-500 align-center mb-10">Example
                                                basic</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
                                        </div>
                                        <div class="form-group form-element-textarea">
                                            <label for="exampleFormControlTextarea3"
                                                class="il-gray fs-14 fw-500 align-center mb-10">Unresizable
                                                Textarea</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea3" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Sizes</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group select-px-15">
                                            <label for="countryOption"
                                                class="il-gray fs-14 fw-500 align-center mb-10">Example
                                                Select</label>
                                            <select class="form-control px-15" id="countryOption">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="select-2" class="il-gray fs-14 fw-500 align-center mb-10">Disable
                                                Select</label>
                                            <div class="dm-select disabled ">
                                                <select name="select-2" id="select-2"
                                                    class="form-control  ih-medium ip-light radius-xs b-light px-15"
                                                    disabled="">
                                                    <option value="01">Option 1</option>
                                                    <option value="01">Option 1</option>
                                                    <option value="01">Option 1</option>
                                                    <option value="01">Option 1</option>
                                                    <option value="01">Option 1</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group select-px-15 tagSelect-rtl">
                                            <label class="il-gray fs-14 fw-500 align-center mb-10">Example
                                                multiple select</label>

                                            <div class="dm-select ">

                                                <select name="select-tag2" id="select-tag2" class="form-control "
                                                    multiple="multiple">
                                                    <option value="01">Option 1</option>
                                                    <option value="02">Option 2</option>
                                                    <option value="03">Option 3</option>
                                                    <option value="04">Option 4</option>
                                                    <option value="05">Option 5</option>
                                                </select>

                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="select-3" class="il-gray fs-14 fw-500 align-center mb-10">Disable
                                                multiple select</label>
                                            <div class="dm-select disabled ">
                                                <select name="select-2" id="select-3"
                                                    class="form-control  ih-medium ip-light radius-xs b-light px-15"
                                                    disabled="">
                                                    <option value="01">Option 1</option>
                                                    <option value="01">Option 1</option>
                                                    <option value="01">Option 1</option>
                                                    <option value="01">Option 1</option>
                                                    <option value="01">Option 1</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card  card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>File Browser</h6>
                                    </div>
                                    <div class="card-body pb-md-40 pt-md-30">
                                        <div class="custom-file">

                                            <input class="form-control custom-file-input" type="file" id="customFile">
                                            <label class="custom-file-label ps-15" for="customFile">Browse</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card  card-default card-md mb-4">
                                    <div class="card-header">
                                        <h6>Checkboxes and Radios</h6>
                                    </div>
                                    <div class="card-body form-element-radioChecks">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">


                                                    <div class="checkbox-theme-default custom-checkbox ">
                                                        <input class="checkbox" type="checkbox" id="check-un1">
                                                        <label for="check-un1">
                                                            <span class="checkbox-text">
                                                                Uncheck

                                                            </span>
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="mb-3">


                                                    <div class="checkbox-theme-default custom-checkbox ">
                                                        <input class="checkbox" type="checkbox" id="check-un3" checked>
                                                        <label for="check-un3">
                                                            <span class="checkbox-text">
                                                                Checked

                                                            </span>
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="checkbox-list">
                                                    <div class="checkbox-list__single mb-3">


                                                        <div class="checkbox-theme-default custom-checkbox disabled ">
                                                            <input class="checkbox" type="checkbox" id="check-5">
                                                            <label for="check-5">
                                                                <span class="checkbox-text">
                                                                    Disabled Unchecked

                                                                </span>
                                                            </label>
                                                        </div>


                                                    </div>
                                                    <div class="checkbox-list__single">


                                                        <div class="checkbox-theme-default custom-checkbox disabled ">
                                                            <input class="checkbox" type="checkbox" id="check-4"
                                                                checked>
                                                            <label for="check-4">
                                                                <span class="checkbox-text">
                                                                    Disabled checked

                                                                </span>
                                                            </label>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">


                                                    <div class="radio-theme-default custom-radio ">
                                                        <input class="radio" type="radio" name="radio-default" value=0
                                                            id="radio-un2">
                                                        <label for="radio-un2">
                                                            <span class="radio-text">Uncheck</span>
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="mb-3">


                                                    <div class="radio-theme-default custom-radio ">
                                                        <input class="radio" type="radio" name="radio-default" value=0
                                                            id="radio-un4" checked>
                                                        <label for="radio-un4">
                                                            <span class="radio-text">Checked</span>
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="mb-3">


                                                    <div class="radio-theme-default custom-radio disabled ">
                                                        <input class="radio" type="radio" name="radio-default" value=0
                                                            id="radio-2">
                                                        <label for="radio-2">
                                                            <span class="radio-text">Disabled Unchecked</span>
                                                        </label>
                                                    </div>


                                                </div>
                                                <div>
                                                    <div class="radio-theme-default custom-radio disabled ">
                                                        <input class="radio" type="radio" name="radio-default2"
                                                            value="0" id="radio-3" checked="">
                                                        <label for="radio-3">
                                                            <span class="radio-text">Disabled Checked</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('secunda/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#kt_ecommerce_sales_table').DataTable({
                "order": [
                    [2, 'desc']
                ]
            });
        });
    </script>
@endsection
