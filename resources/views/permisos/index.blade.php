@extends('layouts_admin.admin')

@section('contenido')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Permisos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    @if (session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                                <a  href="{{ url('permisos/create') }}" class="btn btn-warning">Nuevo</a>
                   
                            <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">
                                    <th style="color:#fff;">#</th>
                                    <th style="color:#fff;">Nombre</th>
                                    <th style="color:#fff;">Acción</th>
                                </thead>
                                <tbody>
                                    @foreach ( $permissions as  $permission)
                                    <tr>
                                        <td>{{  $permission->id }}</td>
                                        <td>{{  $permission->name }}</td>
                                        <td>
                                         <a class="btn btn-primary" href="{{ url('permisos/'.$permission->id.'/edit') }}">Editar</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['permisos.destroy', $permission->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                            
                                    </td>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
