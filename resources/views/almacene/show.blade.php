@extends('layouts.app')

@section('template_title')
    {{ $almacene->name ?? 'Show Almacene' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Almacene</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('almacenes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $almacene->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $almacene->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $almacene->Direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
