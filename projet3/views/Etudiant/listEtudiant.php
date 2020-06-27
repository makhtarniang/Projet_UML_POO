

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
                    <td scope="row">2020NIOU0001</td>
                    <td>FATOU</td>
                    <td>NIANG</td>
                    <td>fatou04.niang@gmail.com</td>
                    <td>779184216</td>
                    <td>10/04/1997</td>
                    <td><button class="btn btn-outline-info my-2 my-sm-0">modifier</button></td>
                    <td><button class="btn btn-outline-info my-2 my-sm-0">supprimer</button></td>
                </tr>
                <tr>
                    <td scope="row">2020NIAR0002</td>
                    <td>MAKHTAR</td>
                    <td>NIANG</td>
                    <td>makhtar04.niang@gmail.com</td>
                    <td>772675432</td>
                    <td>01/10/1992</td>
                    <td><button class="btn btn-outline-info my-2 my-sm-0">modifier</button></td>
                    <td><button class="btn btn-outline-info my-2 my-sm-0">supprimer</button></td>
                </tr>
            </tbody>
    </table>
</div>
