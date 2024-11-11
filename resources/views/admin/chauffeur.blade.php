@extends('app')
@section('title','Chauffeurs')
@section('styles')

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"/>
@endsection

@section('content')
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Chauffeurs</h1>
            </div>
        </div>
    </div>
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-fluid">
            <div class="card card-flush">
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <a href="{{route('admin.create.chauffeur')}}" class="btn btn-primary btn-active-color-success">
                            <i class="bi bi-plus-circle-fill"></i>Ajouter Chauffeur
                        </a>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_sales_table">
                        <thead>
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                            <th class="min-w-100px">E-mail</th>
                            <th class="min-w-100px">Nom</th>
                            <th class="min-w-100px">Fonctionalités</th>
                            <th class="min-w-100px">Role</th>
                            <th class="min-w-100px">Status</th>
                            <th class="min-w-100px">Date de Création</th>
                            <th class="text-end min-w-100px">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="fw-bold text-gray-600">
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->email}}</td>
                                <td>{{$user->name}} {{$user->prenom}}</td>
                                <td>test</td>

                                <td class="pe-0">
                                    @php
                                        // Définir la classe CSS en fonction du rôle
                                        $roleClass = '';
                                        switch ($user->role) {
                                            case 'admin':
                                                $roleClass = 'badge bg-primary';
                                                break;
                                            case 'parent':
                                                $roleClass = 'badge bg-danger';
                                                break;
                                            case 'driver':
                                                $roleClass = 'badge bg-success';
                                                break;
                                            default:
                                                $roleClass = 'badge bg-light'; // Classe par défaut si nécessaire
                                                break;
                                        }
                                    @endphp

                                    <span class="fw-bolder {{ $roleClass }}">
                                        {{ ucfirst($user->role) }}
                                    </span>
                                </td>
                                <td class="pe-0">
                                    @php
                                        // Définir la classe CSS en fonction du rôle
                                        $status = '';
                                        switch ('inactif') {
                                            case 'actif':
                                                $status = 'badge bg-primary';
                                                break;
                                            case 'inactif':
                                                $status = 'badge bg-danger';
                                                break;
                                            case 'attente':
                                                $status = 'badge bg-success';
                                                break;
                                            default:
                                                $status = 'badge bg-light'; // Classe par défaut si nécessaire
                                                break;
                                        }
                                    @endphp

                                    <span class="fw-bolder {{ $status }}">
                                        inactif
                                    </span>
                                </td>
                                <td>{{$user->created_at}}</td>
                                <td class="text-end">
                                    <a href="{{ route('admin.edit.chauffeur', $user->id) }}" class="btn btn-sm btn-light-primary">Editer</a>
                                    <form action="{{ route('admin.delete.chauffeur', $user->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-light-danger" onclick="return confirm('Voulez-vous supprimer ce chauffeur ?');">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function () {
            $('#kt_ecommerce_sales_table').DataTable({
                "order": [[3, 'desc']]
            });
        });
    </script>
@endsection
