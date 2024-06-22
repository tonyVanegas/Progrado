@extends('layouts_user.admin')

@section('contenido')
    <div class="container-fluid">

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <!-- DataTales-->
        <div class="card shadow mb-5">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Solicitud
                    <a class="btn btn-warning float-right" href="{{ url('blogs/create') }}">Nuevo</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead style="background-color:#6777ef">
                            <th style="display: none;">id</th>
                            <th style="color:#fff;">Tipo solicitud</th>
                            <th style="color:#fff;">Descripcion de tu solicitud</th>
                            <th style="color:#fff;">abjunto</th>
                            <th style="color:#fff;">status</th>
                            <th style="color:#fff;">Acciones</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td> @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td>{{ $blog->Tipo }}</td>
                                        <td>{{ $blog->Descripcion }}</td>
                                        <td>{{ $blog->Archivo }}</td>
                                        <td>{{ $blog->status }}</td>
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
                               
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Centramos la paginacion a la derecha -->
                    <div class="pagination justify-content-end">
                   
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
