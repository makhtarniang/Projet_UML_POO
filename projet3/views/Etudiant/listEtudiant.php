

<!-- formulaire d'ajout d'une chambre -->

<div class="container margin-auto">
    <h1 class="d-flex justify-content-center font-weight-bold mt-5">LISTE DES ETUDIANTS</h1>
    <form class="form-inline my-2 my-lg-0">
        <label for="">Matricule</label>
                <input class="form-control mr-sm-2" type="search" placeholder="rechercher" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">rechercher</button>
            </form>
    <table class="table table-striped table-inverse table-responsive scrollZone">
        <thead class="thead-inverse">
            <tr>
                <th>Matricule</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>E-mail</th>
                <th>Telephone</th>
                <th>Date de naissance</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach($etudiants as $datas): ?>
                    <td scope="row"><?= $datas->matricule()?></td>
                    <td><?= $datas["prenom"];?></td>
                    <td><?= $datas->nom()?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button class="btn btn-outline-info my-2 my-sm-0">modifier</button></td>
                    <td><button class="btn btn-outline-info my-2 my-sm-0">supprimer</button></td>
                </tr>
                <?php endforeach ?>
            </tbody>
    </table>
</div>
