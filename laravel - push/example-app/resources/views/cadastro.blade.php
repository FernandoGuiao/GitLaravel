@extends('layout')

@section('content')

<br>
<br>
<br>
<br>
<br>
<br>


<form action="/relatorio" method="post">
    
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
    <div class="button">
    <br>
    <br>
    <br>
        <input type="checkbox" id="admin" name="admin" value=1>
        <label for="vehicle1"> Admin</label><br>
        <br>
        <input type="checkbox" id="moderator" name="moderator" value=2>
        <label for="vehicle2"> Moderator</label><br>
        <br>
        <input type="checkbox" id="guest" name="guest" value=3>
        <label for="vehicle3"> Guest</label><br>

    <br>
    <br>
    <br>


    {!! csrf_field() !!}
        <button type="submit"> Cadastrar </button>
    </div>
</form>

@endsection