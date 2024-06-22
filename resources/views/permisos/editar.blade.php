@extends('layouts_admin.admin')

@section('contenido')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Permiso</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <a class="btn btn-warning float-end" href="{{ url('permisos') }}">Atras</a>
                            <form action="{{ url('permisos/' . $permission->id) }}" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Nombre del Permiso:</label>
                                            <input type="text" name="name" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">actualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
