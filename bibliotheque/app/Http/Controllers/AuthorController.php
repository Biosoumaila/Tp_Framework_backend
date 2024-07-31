<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;


class AuthorController extends Controller
{
    public function list_author()
    {
        $authors = Author:: orderBy('id')->paginate(2);
       return  view('author.list',compact('authors')); 
    }

    public function add_author()
    {
        return view('author.ad');
    }

    public function add_author_traitement(Request $request)
    {
       $request->validate([
        'name' => 'required',
        'biography' => 'required',
       ]);
       $author = new Author();
       $author->name = $request->name;
       $author->biography = $request->biography;

       $author->save();

       return redirect('/ad')->with('status', 'L\'Auteur a ete ajouter avec succes');
    }

    public function update_author($id)
    {
        $authors = Author::find($id);
        return view('author.update', compact('authors'));
    }

    public function update_author_traitement(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'biography' => 'required',
           ]);
           $author = Author::find($request->id);
           $author->name = $request->name;
           $author->biography = $request->biography;
           $author->update();
       return redirect('/author')->with('status', 'L\'Auteur a ete modifier a jour avec succes');
    }
    public function delete_author($id)
    {
        $author = Author::find($id);
        $author->delete();
        return redirect('/author')->with('status', 'L\'Auteur a ete suprimer a jour avec succes');
    }
}
