

<?php
 $this->EtudiantDao=new EtudiantDao();
 $etudiants=$this->EtudiantDao->findAll();
?>


<!-- formulaire d'ajout d'une chambre -->

<div class="container margin-auto">
    <h1 class="d-flex justify-content-center font-weight-bold mt-5">LISTE DES ETUDIANTS</h1>
    <form class="form-inline my-2 my-lg-0 mt-3">
        <label for="">Matricule</label>
            <input class="form-control mr-sm-2" type="search" name="recherche" id="recherche" placeholder="rechercher" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" name="btn_recherche" id="btn_recherche" type="submit">rechercher</button>
            </form>
    <table class="table table-striped table-inverse table-responsive mt-3 scrollZone">
        <thead class="thead-inverse">
            <tr>
                <th>Matricule</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>E-mail</th>
                <th>Telephone</th>
                <th>Date de naissance</th>
            </tr>
            </thead>
            <tbody id="tbody">
            <?php foreach ($etudiants as $etudiant): ?>
                <tr>
                
                    <td><?=$etudiant->matricule?></td>
                    <td><?=$etudiant->prenom?></td>
                    <td><?=$etudiant->nom?></td>
                    <td><?=$etudiant->email?></td>
                    <td><?=$etudiant->telephone?></td>
                    <td><?=$etudiant->dateNaiss?></td>
                </tr>
            <?php endforeach ;?>
            </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> 

<script>

// $(document).ready(function () {
//     var tbody= $('#tbody');
//     $.ajax({
//         type: "post",
//         url: "BASE_URL/dao/ChambreDao.php",
//         // data: "",
//         dataType: "html",
//         success: function (data) {
//             // alert(data);
//             affiche(data,tbody);
//         }
//     });
    
//      function affiche(data, tbody) {
//          $.each(data,(indice,etudiant)=>{
//              tbody.append(`
//              <tr>
//                     <td scope="row">${etudiant.matricule}</td>
//                     <td>${etudiant.prenom}</td>
//                     <td>${etudiant.nom}</td>
//                     <td>${etudiant.email}</td>
//                     <td>${etudiant.telephone}</td>
//                     <td>${etudiant.dateNais}</td>
//                     <td><button class="btn btn-outline-info my-2 my-sm-0">modifier</button></td>
//                     <td><button class="btn btn-outline-info my-2 my-sm-0">supprimer</button></td>
//                 </tr>
//              `);
//          });
//      }
// });
</script>