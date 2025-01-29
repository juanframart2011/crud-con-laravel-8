@extends('theme.base')

@section( 'content' )

    <div class="container py-5 text-center">
        <h1>Crear de Cliente</h1>
        <a href="{{ route( 'client.index' ) }}" class="btn btn-secondary">Lista Clientes</a>

        <form action="{{ route( 'client.store' ) }}" method="post">
            @csrf

            <div class="mb-3">
                <label class="form-label" for="name">Nombre</label>
                <input class="form-control" type="text" id="name" name="name" placeholder="Nombre">
                <p class="form-text">Escriba el nombre del cliente</p>
                @error( 'name' )
                    <p class="form-text">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="due">Saldo del cliente</label>
                <input class="form-control" type="number" id="due" name="due" placeholder="Saldo del cliente" step="0.01">
                <p class="form-text">Escriba el nombre del cliente</p>
                @error( 'due' )
                    <p class="form-text">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="comments">Comentarios</label>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comentarios"></textarea>
                <p class="form-text">Escriba el nombre del cliente</p>
                @error( 'comments' )
                    <p class="form-text">{{ $message }}</p>
                @enderror
            </div>

            <button class="btn btn-info" type="submit">Guardar Cliente</button>
        </form>
    </div>
@endsection