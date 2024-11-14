@extends('app')
@section('title', 'Utilisateurs')
@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
@endsection

@section('content')
    <div class="contents">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-30">
                    <div class="card mb-25">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6>Liste des roles</h6>

                                <a href="{{ route('admin.role.add') }}" class="btn btn-primary">
                                    <i class="uil uil-plus"></i> <!-- Si vous utilisez Unicons -->
                                    Ajouter
                                </a>

                        </div>

                        @include('_message')
                        <div class="card-body pt-0 pb-0">
                            <div class="drag-drop-wrap">
                                <div class="drag-drop table-responsive-lg w-100 mb-30">
                                    <table class="table mb-0 table-basic">
                                        <thead>
                                            <tr>
                                                <th>#ID</th>
                                                <th>Role Utilisateur</th>
                                                <th>Crée le :</th>

                                                    <th class="text-center">Actions</th> <!-- Ajout de text-center -->

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($getRecord as $role)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $role->name }}</td>
                                                    <td>{{ $role->created_at }}</td>
                                                    <td class="text-center"> <!-- Ajout de text-center -->
                                                        <div class="table-actions d-flex gap-2 justify-content-center">

                                                                <a href="{{ route('admin.role.edit', $role->id) }}"
                                                                    class="btn btn-sm btn-primary">
                                                                    <img class="svg"
                                                                        src="{{ asset('img/svg/edit.svg') }}"
                                                                        alt="edit">
                                                                </a>


                                                                <a href="{{ route('admin.role.delete', $role->id) }}"
                                                                    class="btn btn-sm btn-danger">
                                                                    <img class="svg"
                                                                        src="{{ asset('img/svg/trash-2.svg') }}"
                                                                        alt="delete">
                                                                </a>

                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ends: card -->

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
