@extends('layouts.app')

@section('template_title')
    {{ $articulo->name ?? 'Show Articulo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Articulo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('articulos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Almacen Id:</strong>
                            {{ $articulo->almacen_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $articulo->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $articulo->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $articulo->Codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $articulo->Imagen }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
