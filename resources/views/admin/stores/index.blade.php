@extends('layout.app')
@section('content')
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
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{$stores->links()}}

@endsection