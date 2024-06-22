@extends('layouts_admin.admin')

@section('contenido')
    <div class="container-fluid">

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <!-- DataTales-->
        <div class="card shadow mb-5">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> Crear Permiso
                    <a href="{{ url('permissions') }}" class="btn btn-warning float-right">Atrás</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{ url('permissions') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="">Nombre del permiso:</label>
                            <input type="text" name="name" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
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
