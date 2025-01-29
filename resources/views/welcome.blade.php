@extends('theme.base')

@section( 'content' )

    <div class="container py-5">
        <h1>Welcome, my CRUD</h1>
        <a href="{{ route( 'client.index' ) }}" class="btn btn-secondary">Clientes</a>
    </div>
@endsection