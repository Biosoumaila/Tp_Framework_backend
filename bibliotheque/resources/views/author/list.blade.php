<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Authors list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="container text-center">

        <div class="row">

            <div class="col s12">

                <h1>Liste des auteurs</h1>
                <hr>
                    <a  href="/ad" class="btn btn-primary">Creer un Auteur</a>
                <hr>

                @if (session('status'))
                    <div class="alert alert-success">
                         {{session('status')}}
                    </div>
                @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Author_id</th>
                                <th>Name</th>
                                <th>Biography</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                            <tbody>
                                @php
                                  $ide = 1;  
                                @endphp
                                    @foreach($authors as $author)
                                    
                                        <tr>
                                            <td>{{$ide}}</td>
                                            <td>{{$author->name}}</td>
                                            <td>{{$author->biography}}</td>
                                            <td>
                                                <a href="/update-author/{{$author->id}}" class="btn btn-info">Mettre a jour</a>
                                                <a href="/delete-author/{{$author->id}}" class="btn btn-danger">Supprimer</a>
                                            </td>
                                        </tr>
                                        @php
                                            $ide +=1;
                                        @endphp
                                    @endforeach
                            </tbody>
                    </table>

                    {{$authors->links()}}
        </div>
    
    </div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>