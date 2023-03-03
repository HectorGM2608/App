@extends('layouts.app')

@section('template_title')
    {{ $solicitude->name ?? 'Show Solicitude' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Solicitude</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('solicitudes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Proveedor Id:</strong>
                            {{ $solicitude->proveedor_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $solicitude->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Motivo:</strong>
                            {{ $solicitude->Motivo }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $solicitude->Direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
