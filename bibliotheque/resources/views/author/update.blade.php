<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Add Authors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">

        <div class="row">

            <div class="col s12">

                <h1> Modifier un Auteur</h1>
                <hr>
                @if (session('status'))
                <div class="alert alert-success">
                  {(session('status'))}
                </div>
                @endif
                 <ul>
                  @foreach($errors->all() as $error)
                  <li class="alert alert-danger">{{$error}}</li>
                  @endforeach
                  </ul>
                
                <form action="/update/traitement" method="post" class="form-group">
                @csrf

                <input type="text" name="id" style="display: none;" value="{{$authors->id}}">
                
                <div class="forme-group">
                    <label for="Name">Name</label>
                      <input type="text" class="form-control" id="Name" name="name" value="{{$authors->name}}">
                  </div>

                  <div class="forme-group">
                    <label for="biography">Biography</label>
                      <input type="text" class="form-control" id="Biography" name="biography" value="{{$authors->biography}}" >
                  </div>
                  <br>
                  <button type="submit" class="btn btn-primary">Modifier un Auteur </button>
                  <br> <br>
                  <a href="/author" class="btn btn-danger">Afficher les Auteurs</a>
                </form>
        </div>
    </div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>