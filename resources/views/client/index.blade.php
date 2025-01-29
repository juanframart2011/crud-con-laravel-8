@extends('theme.base')

@section( 'content' )

    <div class="container py-5">
        <h1>Lista de Clientes</h1>
        <a href="{{ route( 'client.create' ) }}" class="btn btn-secondary">Crear Clientes</a>

        @if( Session::has( 'mensaje' ) )
            <div class="alert alert-info my-5">{{ Session::get( 'mensaje' ) }}</div>
        @endif

        <table class="table">
            <thead>
                <th>Nombre</th>
                <th>Saldo</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @forelse( $clients as $client )
                    <tr>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->due }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route( 'client.edit', $client ) }}">Editar</a>

                            <form action="{{ route( 'client.destroy', $client ) }}" method="post" class="d-inline">
                                @method( 'DELETE' )
                                @csrf
                                <button class="btn btn-danger" type="submit" onclick="return confirm('estas seguro de eliminar cliente')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No hay registros</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        @if( $clients->count() )

            {{ $clients->links() }}
        @endif
    </div>
@endsection