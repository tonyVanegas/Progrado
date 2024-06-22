@extends('layouts_admin.admin')

@section('contenido')
    <div class="container-fluid">

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <!-- DataTales-->
        <div class="card shadow mb-5">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Permisos
                <a href="{{ url('permissions/create') }}" class="btn btn-warning float-right">Nuevo</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead style="background-color:#6777ef">
                            <th style="color:#fff;">Id</th>
                            <th style="color:#fff;">Nombre</th>
                            <th style="color:#fff;">Acciones</th>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $permission)
                                <tr>
                                    <td>{{ $permission->id }}</td>
                                    <td>{{ $permission->name }}</td>
                                    <td>
                                        <a href="{{ url('permissions/' . $permission->id . '/edit') }}"
                                            class="btn btn-success">Editar
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <a href="{{ url('permissions/' . $permission->id . '/delete') }}"
                                            class="btn btn-danger mx-2">Borar
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Centramos la paginacion a la derecha -->
                    <div class="pagination justify-content-end">
                        {!! $permissions->links() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('libs/datatables/dataTables.bootstrap4.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>
@endpush
