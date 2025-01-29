@extends('theme.base')

@section( 'content' )

    <div class="container py-5">
        <h1>Lista de Clientes</h1>
        <a href="{{ route( 'client.create' ) }}" class="btn btn-secondary">Crear Clientes</a>

        <table class="table">
            <thead>
                <th>Nombre</th>
                <th>Saldo</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
@endsection