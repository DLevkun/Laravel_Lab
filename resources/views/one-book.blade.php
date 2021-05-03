@extends('layouts.page');

@section('title')
    {{ $data->title }}
@endsection

@section('content')
    <div class="container">
        <h1 class="single"> {{ $data->title }} - {{ $data->author }}</h1>
        <form action="{{ route('update-submit', $data->id) }}" method="POST" class="add-book">
        @csrf
            <label for="title"> Назва книги </label>
            <input type="text" name="title" value="{{ $data->title }}">
            <label for="author"> Автор </label>
            <input type="text" name="author" value="{{ $data->author }}">
            <select name="genre">
                @foreach($genres as $genre)
                    @if($genre->id == $data->genre_id)
                        <option selected value="{{ $genre->id }}"> {{ $genre->name }} </option>
                    @else
                    <option value="{{ $genre->id }}"> {{ $genre->name }} </option>
                    @endif
                @endforeach
            </select>
            <label for="pages"> Кількість сторінок </label>
            <input type="text" name="pages" value="{{ $data->pages }}">
            <label for="year"> Рік видання </label>
            <input type="text" name="year" value="{{ $data->year }}">
            <input type="submit" class="submit" value="Зберегти">
        </form>
    </div>
@endsection