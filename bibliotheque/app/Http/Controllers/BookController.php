<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function list_book()
    {
        $books = Book:: orderBy('id')->paginate(2);
       return  view('book.list',compact('books')); 
    }
    public function add_book()
    {
        return view('book.add');
    }
    public function add_book_traitement(Request $request)
    {
       $request->validate([
        'title' => 'required',
        'author_id' => 'required',
        'isbn' => 'required',
        'published_year' => 'required',
       ]);
       $book = new Book();
       $book->title = $request->title;
       $book->author_id = $request->author_id;
       $book->isbn = $request->isbn;
       $book->published_year = $request->published_year;
       $book->save();

       return redirect('/add')->with('status', 'Le livre a ete ajouter avec succes');
    }
    public function update_book($id)
    {
        $books = Book::find($id);
        return view('book.update', compact('books'));
    }

    public function update_book_traitement(Request $request)
    {
        $request->validate([
         'title' => 'required',
         'author_id' => 'required',
         'isbn' => 'required',
         'published_year' => 'required',
           
           ]);
           $book = Book::find($request->id);
           $book->title = $request->title;
           $book->author_id = $request->author_id;
           $book->isbn = $request->isbn;
           $book->published_year = $request->published_year;
           $author->update();
       return redirect('/book')->with('status', 'Le livre a  ete modifier a jour avec succes');
    }
    public function delete_book($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('/book')->with('status', 'Le livre a ete suprimer a jour avec succes');
    }
}