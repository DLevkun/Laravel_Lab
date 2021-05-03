@extends('layouts.page')

@section('title', "Книги")

@section('content')
     <div class="container main-wrap">
          <h1 class="single">Книги</h1>
          <section class="genre-list">
               <div class="chapter">
                    <img src="/img/Розділ3.png" alt="Розділ">
               </div>
               <div class="wrap-genres">
                    <div class="column">
                         <p>
                              <?php $count = 0; ?>
                              @foreach($genres as $genre)
                                   @if(isset($genre_id) && $genre->id == $genre_id)
                                   <a href="{{ route('get-genre-book', $genre->id) }}"> <b> {{ $genre->name }} </b> </a> <br>
                                   @else
                                   <a href="{{ route('get-genre-book', $genre->id) }}"> {{ $genre->name }} </a> <br>
                                   @endif
                                   <?php $count = $count + 1; ?>
                                   @if($count == 5)
                                        @break
                                   @endif
                              @endforeach
                         </p>
                    </div>
                    <div class="column">
                         <p>
                              <?php $count = 0; ?>
                              @foreach($genres as $genre)
                                   @if($count < 5)
                                        <?php $count = $count + 1; ?>
                                        @continue
                                   @endif

                                   @if(isset($genre_id) && $genre->id == $genre_id)
                                   <a href="{{ route('get-genre-book', $genre->id) }}"> <b> {{ $genre->name }} </b> </a> <br>
                                   @else
                                   <a href="{{ route('get-genre-book', $genre->id) }}"> {{ $genre->name }} </a> <br>
                                   @endif
                                   <?php $count = $count + 1; ?>
                                   @if($count == 10)
                                        @break
                                   @endif
                              @endforeach
                         </p>
                    </div>
                    <div class="column" id="third">
                         <p>
                              <?php $count = 0; ?>
                              @foreach($genres as $genre)
                                   @if($count < 10)
                                        <?php $count = $count + 1; ?>
                                        @continue
                                   @endif
                                   @if(isset($genre_id) && $genre->id == $genre_id)
                                   <a href="{{ route('get-genre-book', $genre->id) }}"> <b> {{ $genre->name }} </b> </a> <br>
                                   @else
                                   <a href="{{ route('get-genre-book', $genre->id) }}"> {{ $genre->name }} </a> <br>
                                   @endif
                                   <?php $count = $count + 1; ?>
                              @endforeach
                         </p>
                    </div>
               </div>
          </section>
          @if(isset($books))
               @if(count($books) == 0)
                    <h1 class="single"> Немає книг :( </h1> 
               @endif
               @foreach($books as $book)
                    <div class="books-list">
                         <div>
                              <h1> {{ $book->title }} </h1>
                              <h2> {{ $book->author }} </h2>
                              <p> <b>Кількість сторінок:</b> {{ $book->pages }} </p>
                              <p> <b>Рік видання:</b> {{ $book->year }} </p>
                              <p> <b>Жанр: </b> {{ $book->genre->name }} </p>
                         </div>    
                         <div class="one-btn">
                              <a href="#" id="yellow"> Читати </a>
                         </div>
                    </div>
               @endforeach    
          @endif
     </div>
@endsection