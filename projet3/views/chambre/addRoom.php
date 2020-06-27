
<!-- navigation -->

<!-- formulaire d'ajout d'une chambre -->

<div class="container margin-auto">
    <h1 class="d-flex justify-content-center font-weight-bold mt-5">AJOUTER UNE CHAMBRE</h1>
    <form mt-3>
        <div class="form-group">
            <label for="">numero Chambre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group">
            <label for="">Numero departement</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="col-auto my-1">
        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            <option selected>selectionne un type</option>
            <option value="individuel">chambre individuel</option>
            <option value="Adeux">chambre a deux</option>
        </select>
        </div>
        <button type="submit" class="btn btn-info">Enregistrer</button>
    </form>
</div>

