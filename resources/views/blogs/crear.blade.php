@extends('layouts_user.admin')

@section('contenido')
    <div class="container-fluid">

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <!-- DataTales-->
        <div class="card shadow mb-5">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Crear nueva solicitud
                    <a class="btn btn-warning float-right" href="{{ url('blogs') }}">Atras</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead style="background-color:#6777ef">
                           
                        </thead>
                        <tbody>
                           
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
