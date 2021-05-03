@extends('layout')

@section('content')

<br>
<br>
<br>
<br>
<br>
<br>


<form action="/create" method="post">
<p>Create User</p>
<br>
<br>
    <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" />
    </div>

    <div>
    <br>
    <br>
    <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"/>
    </div>

    <div>
    <br>
    <br>
    <br>
        <label for="email">email:</label>
        <input type="email" id="email" name="email"/>
    </div>
    <div>
    <br>
    <br>
    <br>

    {!! csrf_field() !!}
        <button type="submit"> Cadastrar </button>
    </div>
</form>
<br>

<form action="/readRole" method="post">
<p>Read User Roles</p>
<br>
<br>
<div>

        <label for="email">e - mail:</label>
        <input type="email" id="email" name="email"/>
</div>
<div>
    <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"/>
    </div>


<div>
    <br>
    <br>
    <br>

    {!! csrf_field() !!}
        <button type="submit"> Cadastrar </button>
    </div>
</form>

<br>

<form action="/addRole" method="post">
<p>Create Role</p>
<br>
    <div>
        <label for="email">e - mail:</label>
        <input type="email" id="email" name="email"/>
    </div>

    <div>
    <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"/>
    </div>

    <div class="button">
    <br>
    <br>
    <p>Cadastro de função</p>
    <br>
   
        <input type="radio" id="admin" name="role" value=admin>
        <label for="admin"> Admin</label><br>
        <br>
        <input type="radio" id="moderator" name="role" value=moderator>
        <label for="mod"> Moderator</label><br>
        <br>
        <input type="radio" id="guest" name="role" value=guest>
        <label for="guest"> Guest</label><br>

    <br>
    <br>
    <br>


    {!! csrf_field() !!}
        <button type="submit"> Cadastrar </button>
    </div>
</form>
<br>
<form action="/deleteRole" method="post">
<p>Delete Role</p>
<br>
    <div>
        <label for="email">e - mail:</label>
        <input type="email" id="email" name="email"/>
    </div>

    <div>
    <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"/>
    </div>

    <div class="button">
    <br>
    <br>
    <p>Deletar função</p>
    <br>
   
  
        <input type="radio" id="admin" name="role" value=admin>
        <label for="admin"> Admin</label><br>
        <br>
        <input type="radio" id="moderator" name="role" value=moderator>
        <label for="mod"> Moderator</label><br>
        <br>
        <input type="radio" id="guest" name="role" value=guest>
        <label for="guest"> Guest</label><br>

    <br>
    <br>
    <br>


    {!! csrf_field() !!}
        <button type="submit"> Cadastrar </button>
    </div>
</form>



@endsection