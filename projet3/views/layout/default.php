<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=BASE_URL?>/public/css/style.css">
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
                <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=BASE_URL?>/chambre/addRoom">Ajouter chambre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=BASE_URL?>/chambre/listChambre">Liste chambre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=BASE_URL?>/Etudiant/addEtudiant">Ajouter Etudiant</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=BASE_URL?>/Etudiant/listEtudiant">liste des Etudiants</a>
            </li>
           
           
            </ul>
           
        </div>
        </nav>

<!-- navigation -->

<!-- formulaire d'ajout d'une chambre -->
<!-- 
<div class="margin-auto cadre_admin">
    <h1 class="d-flex align-items-center text-center font-weight-bold title">BIENVENU DANS LA GESTION D'ALLOCATION DES CHAMBRE DE L'UNIVERSITE</h1>
   
   div <?= $content_for_layout?>
 
</div> -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>