@extends('layouts.page')

@section('title', "Особистий акаунт")

@section('content')
    <section class="registration container">
        <div class="header-account">
            <div class="chapter">
                <img src="img/Розділ3.png" alt="Розділ">
            </div>
            <h1>
                Особистий акаунт
            </h1>
            <p class="note">
                Зареєструйтесь або увійдіть, якщо в вас вже є акаунт
            </p>
        </div>
        <div class="registr-form">
            <h2>
                Реєстрація
            </h2>

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="errors">  
                        <ul>
                            <li> {{ $error }} </li>
                        </ul>    
                    </div>
                @endforeach
            @endif

            <form action="{{ route('account-submit') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Ім'я*" required>
                <input type="text" name="surname" placeholder="Прізвище*" required>
                <input type="text" name="email" placeholder="E-mail*" required>
                <input type="text" name="phone" placeholder="Телефон">
                <input type="password" name="password" placeholder="Пароль*" required>
                <p class="required">
                    *поля обов’язкові до заповнення
                </p>
                <input class="submit" type="submit" name="submit" value="Зареєструватись">
            </form>
            <div class="options">
                <h4>
                   <a href="#"> Увійти </a>
                </h4>
                <h4>
                    <a href="#"> Забули пароль? </a>
                </h4>
            </div>
        </div>
    </section>
@endsection