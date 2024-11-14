@extends('layouts.master')
@section('content')
    @include('layouts.header')



    @include('layouts.sidebar')

    <div class="contents">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-30">
                    <div class="card mb-25">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6>Liste des utilisateurs</h6>
                            <a href="{{ route('user.add') }}" class="btn btn-primary">
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
                                                <th>Nom</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Crée le :</th>
                                                <th class="text-center">Actions</th> <!-- Ajout de text-center -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($getRecord as $user)

                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->role_name }}</td>
                                                    <td>{{ $user->created_at }}</td>
                                                    <td class="text-center"> <!-- Ajout de text-center -->
                                                        <div class="table-actions d-flex gap-2 justify-content-center">
                                                            <a href="{{ route('user.edit', $user->id) }}"
                                                               class="btn btn-sm btn-primary">
                                                                <img class="svg" src="{{ asset('img/svg/edit.svg') }}" alt="edit">
                                                            </a>
                                                            <a href="{{ route('user.delete', $user->id) }}"
                                                               class="btn btn-sm btn-danger">
                                                                <img class="svg" src="{{ asset('img/svg/trash-2.svg') }}" alt="delete">
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


    @include('layouts.footer')

    <div id="overlayer">
        <div class="loader-overlay">
            <div class="dm-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </div>
    </div>


    <div class="overlay-dark-sidebar"></div>
    <style>
        .table-actions {
            min-width: 150px;
            /* Ajustez selon vos besoins */
        }

        .table-actions .btn {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 0.25rem 0.5rem;
        }

        .table-actions .svg {
            width: 16px;
            height: 16px;
            /* Pour les icônes blanches sur fond coloré */
            filter: brightness(0) invert(1);
        }

        /* Si vous voulez que les boutons soient de la même taille */
        .table-actions .btn {
            min-width: 80px;
            /* Ajustez selon vos besoins */
        }

        /* Pour assurer que le contenu de la cellule est centré */
        .table td {
            vertical-align: middle;
        }
    </style>
@endsection
