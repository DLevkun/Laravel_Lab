@extends('layouts.page')

@section('title', "Підбірка")

@section('content')
    <h1 class="single">Підбірка</h1>
    @foreach($data as $el)
        <div class="books-list">
            <div>
                <h1> {{ $el->title }} </h1>
                <h2> {{ $el->author }} </h2>
                <p> <b>Кількість сторінок:</b> {{ $el->pages }} </p>
                <p> <b>Рік видання:</b> {{ $el->year }} </p>
                <p> <b>Жанр: </b> {{ $el->genre->name }} </p>
            </div>    
            <div class="two-btn">
                <a href="{{ route('update-book', $el->id) }}" id="blue"> Редагувати </a>
                <a href="{{ route('delete-book', $el->id) }}" id="red"> Видалити </a>
            </div>
        </div>
    @endforeach
    <form action="{{ route('book-submit') }}" method="POST" class="add-book">
        @csrf
          <label for="title"> Назва книги </label>
          <input type='text' name="title" placeholder="Введіть назву книги">
          <label for="author"> Автор </label>
          <input type='text' name="author" placeholder="Введіть автора">
          <label for="genre"> Жанр </label>
          <select name="genre">
            @foreach($genres as $genre)
           <option value="{{ $genre->id }}"> {{ $genre->name }} </option>
            @endforeach
          </select>
          <label for="pages"> Кількість сторінок </label>
          <input type='text' name="pages" placeholder="Введіть кількість сторінок">
          <label for="year"> Рік видання </label>
          <input type='text' name="year" placeholder="Введіть рік видання">
          <input type="submit" name="submit" value="Додати" class="submit">
     </form>
@endsection