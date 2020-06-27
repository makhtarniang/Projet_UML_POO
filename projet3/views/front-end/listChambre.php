<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <a class="navbar-brand" href="#">ODC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="admin.php">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addRoom.php">Ajouter chambre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="listChambre.php">Liste chambre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addEtudiant.php">Ajouter Etudiant</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="listEtudiant.php">liste des Etudiants</a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
            </ul>
           
        </div>
        </nav>

<!-- navigation -->

<!-- formulaire d'ajout d'une chambre -->

<div class="container margin-auto bg-white">
            
    <h1 class="d-flex justify-content-center font-weight-bold mt-5">LISTE DES CHAMBRES</h1>
    <form class="form-inline my-2 my-lg-0">
                <label for="">type :</label>
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <label for="">departement :</label>
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">rechercher</button>
            </form>
    <table class="table table-striped table-inverse table-responsive scrollZone">
        <thead class="thead-inverse">
            <tr>
                <th>numero</th>
                <th>numero batiment</th>
                <th>type</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">2020NIOU0001</td>
                    <td>B1</td>
                    <td>individuel</td>
                    <td><button class="btn btn-outline-info my-2 my-sm-0">modifier</button></td>
                    <td><button class="btn btn-outline-info my-2 my-sm-0">supprimer</button></td>
                </tr>
               
            </tbody>
    </table>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>