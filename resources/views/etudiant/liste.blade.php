<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD IN LARAVEL </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

  <div class="container text-center">
    <div class="row">
      <div class="col-lg-6 ">
        <h1>CRUD LARAVEL 10</h1>
        <a href="/ajouter" class="btn btn-primary">Ajouter un etudiant</a>
        @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif
      </div>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom </th>
            <th scope="col">Classes</th>
            <th scope="col">Photo</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {{-- @php
          $ide = 1;
          @endphp --}}
          @foreach ($etudiants as $etudiant )
          <tr>
            <td>{{ $etudiant->id }}</td>
            <td>{{ $etudiant->nom }}</td>
            <td>{{ $etudiant->prenom }}</td>
            <td>{{ $etudiant->classe }}</td>
            <td>
              {{-- @if ( $etudiant->images ) --}}
                    {{-- <img src="{{ $etudiant->images->path }}" alt="profile utilisateurs"> --}}
                    {{-- <img src="{{ assets('images/' . $etudiant->images->path) }}" alt="photo profile"/> --}}
                    {{-- {{ $etudiant->images->path }} --}}
                    {{ $etudiant->image ? $etudiant->image->etudiant_id: "pas d'image " }}

                    
                   {{-- <img src="{{ $etudiant->images ? $etudiant->images->path: "pas d'image " }}" alt="">  --}}
              
              {{-- @else
              <h6>pas dimage</h6>
              @endif --}}
            </td>

            <td>
              <a href="/update-etudiant/{{ $etudiant->id }}" class="btn btn-primary">Update</a>
              <a href="/delete-etudiant/{{ $etudiant->id }}" class="btn btn-danger">Delete</a>

            </td>
            
          </tr>
          {{-- @php
          $ide += 1;
          @endphp --}}

          @endforeach


         
        </tbody>

      </table>
      {{-- {{ $etudiants->links() }} --}}

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.js"></script>
</body>

</html>