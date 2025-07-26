@extends('layout.app')
@section('content')

<h2>Criar Loja</h2>

<form action="/admin/stores/store" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
    <label for="">Nome da loja</label>
    <input type="text" class="form-control" name="name" id="name" class="form-control" placeholder="Store Name" value="{{ old('name') }}" required>
</div>

<div class="form-group">
    <label for="">Descrição</label>
    <input type="text" class="form-control" name="description" id="name" class="form-control" placeholder="Store Name" value="{{ old('name') }}" required>
</div>

<div class="form-group">
    <label for="">Telefone</label>
    <input type="text" class="form-control" name="phone" id="name" class="form-control" placeholder="Telefone" value="{{ old('name') }}" required>
</div>

<div class="form-group">
    <label for="">Celular/Whatsapp</label>
    <input type="text" class="form-control" name="mobile_phone" id="name" class="form-control" placeholder="Store Name" value="{{ old('name') }}" required>
</div>

<div class="form-group">
    <label for="">Slug</label>
    <input type="text" class="form-control" name="slug" id="name" class="form-control" placeholder="slug" required>
</div>

<div class="form-group">
    <label for="">Usuário</label>
    <select name="user" class="form-control">
        @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-lg btn-success">
        Criar Loja
    </button>
</div>
</form>

@endsection


