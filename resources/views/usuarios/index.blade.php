@extends('layouts_admin.admin')

@section('contenido')
    <div class="container-fluid">

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        
        <!-- DataTales-->
        <div class="card shadow mb-5">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Usuarios
                <a class="btn btn-warning float-right" href="{{ url('usuarios/create') }}">Nuevo</a>
            </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead style="background-color:#6777ef">
                            <th style="display: none;">ID</th>
                            <th style="color:#fff;">Nombre</th>
                            <th style="color:#fff;">Correo</th>
                            <th style="color:#fff;">Rol</th>
                            <th style="color:#fff;">Acciones</th>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                                <tr>
                                    <td style="display: none;">{{ $usuario->id }}</td>
                                    <td>{{ $usuario->name }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    <td>
                                        @if (!empty($usuario->getRoleNames()))
                                            @foreach ($usuario->getRoleNames() as $rolNombre)
                                                <h5><span class="badge badge-dark">{{ $rolNombre }}</span>
                                                </h5>
                                            @endforeach
                                        @endif
                                    </td>

                                    <td>                                   
                                        <a class="btn btn-success" href="{{ route('usuarios.edit', $usuario->id) }}">Editar
                                            <i class="far fa-edit"></i>
                                        </a>

                                        {!! Form::open([
                                            'method' => 'DELETE',
                                            'route' => ['usuarios.destroy', $usuario->id],
                                            'style' => 'display:inline',
                                            'class' => 'far fa-trash-alt',
                                        ]) !!}
                                        {!! Form::submit ('Borrar', ['class' => 'btn btn-danger far fa-trash-alt' ])
                                         !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Centramos la paginacion a la derecha -->
                    <div class="pagination justify-content-end">
                        {!! $usuarios->links() !!}
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
