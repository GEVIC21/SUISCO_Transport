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
                            <h6>Modifier un role</h6>
                        </div>
                        <div class="card-body py-md-25">

                            <form action="{{ route('admin.role.update', $getRecord->id) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="roleName" class="form-label">Nom du rôle</label>
                                        <div class="input-group">
                                            <span class="input-group-text la-user lar" id="basic-addon1"></span>
                                            <input type="text" value="{{ $getRecord->name }}" name="name"
                                                id="roleName" class="form-control" placeholder="Duran Clayton"
                                                aria-label="Nom du rôle" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

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
                                                                                    value="{{ $group['id'] }}"
                                                                                    {{ in_array($group['id'], $getRolePermission) ? 'checked' : '' }}>
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

                                    <div class="col-md-12 d-flex justify-content-end mt-3">
                                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                                    </div>
                                </div>
                            </form>




                        </div>
                    </div>
                    <!-- ends: .card -->
                </div>



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
