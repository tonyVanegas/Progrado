@extends('layouts_admin.admin')

@section('contenido')
    <div class="container-fluid">

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <!-- DataTales-->
        <div class="card shadow mb-5">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Roles
                    <a href="{{ url('roles/create') }}" class="btn btn-warning float-right">Nuevo</a>
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
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <a href="{{ url('roles/' . $role->id . '/give-permissions') }}"
                                            class="btn btn-info">
                                            Agregar/Actualizar
                                        </a>
                                        <a href="{{ url('roles/' . $role->id . '/edit') }}"
                                             class="btn btn-success">Editar
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <a href="{{ url('roles/' . $role->id . '/delete') }}"
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
                        {!! $roles->links() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
