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
                @forelse( $clients as $client )
                    <tr>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->due }}</td>
                        <td>{{ $client->name }}</td>
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