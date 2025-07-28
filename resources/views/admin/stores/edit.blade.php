@extends('layout.app')
@section('content')

<h2>Criar Loja</h2>

<form action="{{ route('admin.stores.update', ['store' => $store->id]) }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
    <label for="">Nome da loja</label>
    <input type="text" class="form-control" name="name" id="name" class="form-control" placeholder="Store Name" value="{{ $store->name }}" required>
</div>

<div class="form-group">
    <label for="">Descrição</label>
    <input type="text" class="form-control" name="description" id="name" class="form-control" placeholder="Store Name" value="{{ $store->description }}" required>
</div>

<div class="form-group">
    <label for="">Telefone</label>
    <input type="text" class="form-control" name="phone" id="name" class="form-control" placeholder="Telefone" value="{{ $store->phone }}" required>
</div>

<div class="form-group">
    <label for="">Celular/Whatsapp</label>
    <input type="text" class="form-control" name="mobile_phone" id="name" class="form-control" placeholder="Store Name" value="{{ $store->mobile_phone }}" required>
</div>

<div class="form-group">
    <label for="">Slug</label>
    <input type="text" class="form-control" name="slug" id="name" class="form-control" value="{{ $store->slug}}" placeholder="slug" required>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-lg btn-success">
        Actualizar loja
    </button>
</div>
</form>

@endsection


