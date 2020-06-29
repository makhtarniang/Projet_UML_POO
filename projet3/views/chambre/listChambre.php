
<?php  


$this->dao=new ChambreDao();
$chambre=$this->dao->findAll();
?>

<!-- formulaire d'ajout d'une chambre -->

<div class="container margin-auto bg-white">
            
    <h1 class="d-flex justify-content-center font-weight-bold mt-5">LISTE DES CHAMBRES</h1>
    <form class="form-inline my-2 my-lg-0">
                <label for="">type : </label>
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <label for="">departement : </label>
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
            <?php foreach($chambre as $chambres):?>
                <tr>

                    
                    <td scope="row"><?= $chambres->numero?></td>
                    <td><?=$chambres->numeroBat?></td>
                    <td><?=$chambres->type?></td>
                    <td><button class="btn btn-outline-info my-2 my-sm-0">modifier</button></td>
                    <td><button class="btn btn-outline-info my-2 my-sm-0">supprimer</button></td>
            <?php endforeach; ?>
                </tr>
               
            </tbody>
    </table>
</div>
