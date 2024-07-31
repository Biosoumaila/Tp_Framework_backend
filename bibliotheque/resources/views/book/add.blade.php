<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Add Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">

        <div class="row">

            <div class="col s12">

                <h1>Creer un livre</h1>
                <hr>
                @if (session('status'))
                  <div class="alert alert-success">
                     {{session('status')}}
                  </div>
                @endif
                 <ul>
                  @foreach($errors->all() as $error)
                  <li class="alert alert-danger">{{$error}}</li>
                  @endforeach
                  </ul>
                
                <form action="/add/traitement" method="post" class="form-group">
                @csrf
                  <div class="form-group">
                    <label for="Title">Title</label>
                      <input type="text" class="form-control" id="Title" name="title">
                  </div>

                  <div class="form-group">
                    <label for="author_id">Author_id</label>
                      <input type="number" class="form-control" id="Author_id" name="author_id">
                  </div>

                  <div class="form-group">
                    <label for="isbn">isbn</label>
                      <input type="text" class="form-control" id="Isbn" name="isbn">
                  </div>

                  <div class="form-group">
                    <label for="published_year">Published_year</label>
                      <input type="year" class="form-control" id="Published_year" name="published_year">
                  </div>

                  <br>
                    <button type="submit" class="btn btn-primary">Creer un Livre</button>
                  <br> <br>
                  <a href="/book" class="btn btn-danger">Afficher les livres</a>
                </form>
                
        </div>
    
    </div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>