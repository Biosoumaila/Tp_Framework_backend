<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Books list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="container text-center">

        <div class="row">

            <div class="col s12">

                <h1>Book</h1>
                <hr>
                    <a  href="/add" class="btn btn-primary">Creer un livre</a>
                <hr>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Author_id</th>
                                <th>Isbn</th>
                                <th>Published_year</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                            <tbody>
                                @php
                                  $ide = 1;  
                                @endphp
                                    @foreach($books as $book)
                                    
                                        <tr>
                                            <td>{{$ide}}</td>
                                            <td>{{$book->title}}</td>
                                            <td>{{$book->author_id}}</td>
                                            <td>{{$book->isbn}}</td>
                                            <td>{{$book->published_year}}</td>

                                            <td>
                                                <a href="/update-book/{{$book->id}}" class="btn btn-info">Mettre a jour</a>
                                                <a href="/delete-book/{{$book->id}}" class="btn btn-danger">Supprimer</a>
                                            </td>
                                        </tr>
                                        @php
                                            $ide +=1;
                                        @endphp
                                    @endforeach
                            </tbody>
                    </table>

                    {{$books->links()}}
        </div>
    
    </div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>