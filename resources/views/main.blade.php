@extends('layouts.page')

@section('title', "Головна")

@section('content')
    <div class="background container">
        <h1 class="single">Головна сторінка</h1>
        <h2 class="single2"> Список користувачів </h2>
        @foreach($data as $el)
        <div class="user-list">
            <h3>{{ $el->name }} {{ $el->surname}}</h3>
            <p> Електронна адреса: {{ $el->email }} </p>
            <p> Телефон: {{ $el->phone }} </p>
            <p> Зареєстровано: {{ $el->created_at }}</p>
            <p> <b> Користувач може: </b> </p>
            @foreach($el->roles as $role)
             <p class="role-btn"> {{ $role->name }} </p>
            @endforeach
        </div>
        @endforeach
        <h1 class="single">На сайті можна робити:</h1>
        <ul class="roles">
            @foreach($roles as $role)
            <li class="role"> {{ $role->name }} </li>
            <ol class="users">
                @foreach($role->users as $user)
                <li> {{ $user->name }} {{ $user->surname }}</li>
                @endforeach
            </ol>
            @endforeach
        </ul>
    </div>    
@endsection