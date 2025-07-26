<h2>Criar Loja</h2>

<form action="/admin/stores/store" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div>
    <label for="">Nome da loja</label>
    <input type="text" name="name" id="name" class="form-control" placeholder="Store Name" value="{{ old('name') }}" required>
</div>

<div>
    <label for="">Descrição</label>
    <input type="text" name="description" id="name" class="form-control" placeholder="Store Name" value="{{ old('name') }}" required>
</div>

<div>
    <label for="">Telefone</label>
    <input type="text" name="phone" id="name" class="form-control" placeholder="Telefone" value="{{ old('name') }}" required>
</div>

<div>
    <label for="">Celular/Whatsapp</label>
    <input type="text" name="mobile_phone" id="name" class="form-control" placeholder="Store Name" value="{{ old('name') }}" required>
</div>

<div>
    <label for="">Slug</label>
    <input type="text" name="slug" id="name" class="form-control" placeholder="slug" required>
</div>

<div>
    <label for="">Usuário</label>
    <select name="user">
        @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>
</div>

<div>
    <button type="submit">
        Criar Loja
    </button>
</div>
</form>



