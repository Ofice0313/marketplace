@extends('layout.app')
@section('content')

    <a href="{{ route('admin.stores.create')}}" class="btn btn-lg btn-success">Criar loja</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Store Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stores as $store)
                <tr>
                    <td>{{$store->id}}</td>
                    <td>{{$store->name}}</td>
                    <td>
                        <a href="{{ route('admin.stores.edit', ['store' => $store->id])}}" class="btn btn-sm btn-primary">EDITAR</a>
                        <a href="{{ route('admin.stores.destroy', ['store' => $store->id])}}" class="btn btn-sm btn-danger">REMOVER</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{$stores->links()}}

@endsection