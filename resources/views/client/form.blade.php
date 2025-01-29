@extends('theme.base')

@section( 'content' )

    <div class="container py-5 text-center">

        @if( isset( $client ) )
            <h1>Editar de Cliente</h1>
        @else

            <h1>Crear de Cliente</h1>
        @endif
        

        <a href="{{ route( 'client.index' ) }}" class="btn btn-secondary">Lista Clientes</a>

        @if( isset( $client ) )

            <form action="{{ route( 'client.update', $client ) }}" method="post">
                @method( 'PUT' )
        @else

            <form action="{{ route( 'client.store' ) }}" method="post">
        @endif
            @csrf

            <div class="mb-3">
                <label class="form-label" for="name">Nombre</label>
                <input class="form-control" type="text" id="name" name="name" placeholder="Nombre" value="{{ old( 'name' ) ?? @$client->name }}">
                <p class="form-text">Escriba el nombre del cliente</p>
                @error( 'name' )
                    <p class="form-text">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="due">Saldo del cliente</label>
                <input class="form-control" type="number" id="due" name="due" placeholder="Saldo del cliente" step="0.01" value="{{ old( 'due' ) ?? @$client->due }}">
                <p class="form-text">Escriba el nombre del cliente</p>
                @error( 'due' )
                    <p class="form-text">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="comments">Comentarios</label>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comentarios">{{ old( 'comments' ) ?? @$client->comments }}</textarea>
                <p class="form-text">Escriba el nombre del cliente</p>
                @error( 'comments' )
                    <p class="form-text">{{ $message }}</p>
                @enderror
            </div>

            @if( isset( $client ) )

                <button class="btn btn-info" type="submit">Editar Cliente</button>
            @else

                <button class="btn btn-info" type="submit">Guardar Cliente</button>
            @endif
            
        </form>
    </div>
@endsection