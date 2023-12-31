<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">

  </head>
  <body>
   
      <div class="container">
        <div class="row">
        <div class="col-lg-6">
            <h1>MODIFIER UN ETUDIANT </h1>
            
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
                <ul>
                    @foreach ($errors->all() as $error )
                        <li class="alert alert-danger">{{ $error }}</li>
                
                    @endforeach
                </ul>
            <form action="/update/traitement" method="POST">
                @csrf
                <input type="text" name="id" style="display:none" value="{{ $etudiants->id }}">
                <div class="mb-3">
                  <label for="Non" class="form-label">Nom</label>
                  <input type="text" class="form-control" id="Nom" name="nom"  value="{{ $etudiants->nom }}" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="Prenon" class="form-label">Prenom</label>
                    <input type="text" class="form-control" id="Prenom" name="prenom" value="{{ $etudiants->prenom }}" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="Classe" class="form-label">Classe</label>
                    <input type="text" class="form-control" id="Classe" name="classe" value="{{ $etudiants->classe }}"   aria-describedby="emailHelp">
                  </div>
                 
              
                <button type="submit" class="btn btn-primary">Modifer un etudiant</button>
                <a href="/etudiant" class="btn btn-danger">Revenir a la liste des etudiants</a>
              </form> 
        </div>
         
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>