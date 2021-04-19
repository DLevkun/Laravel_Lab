<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BooksController extends Controller
{
    public function save(Request $req){
        $validation = $req->validate([
            'title' => 'required|min:3|max:30',
            'author' => 'required',
            'pages' => 'required|integer',
            'year' => 'required|integer|between:0,2021'
        ]);

        $book = new Books();
        $book->title = $req->input('title');
        $book->author = $req->input('author');
        $book->pages = $req->input('pages');
        $book->year = $req->input('year');
        

        $book->save();

        return redirect()->route('list-page')->with('success', "Книга додана у підбірку");
    }

    public function getAllBooks(){
        $books = new Books;
        return view('booklist', ['data' => $books->all()]);
    }

    public function deleteBook($id){
        Books::find($id)->delete();

        return redirect()->route('list-page')->with('success', "Книгу було успішно видалено");
    }

    public function updateBook($id){
        $books = new Books;

        return view('one-book', ['data' => $books->find($id)]);
    }

    public function updateBookSubmit($id, Request $req){
        $book = Books::find($id);

        $book->title = $req->input('title');
        $book->author = $req->input('author');
        $book->pages = $req->input('pages');
        $book->year = $req->input('year');

        $book->save();

        return redirect()->route('list-page')->with('success', "Інформацію про книгу змінено");
    }
}
