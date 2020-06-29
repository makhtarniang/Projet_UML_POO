
<!-- formulaire d'ajout d'une chambre -->

<div class="container margin-auto">
    <h1 class="d-flex justify-content-center font-weight-bold mt-5">AJOUTER UNE CHAMBRE</h1>
    <form method="post" action="<?=BASE_URL?>/chambre/addRoom" mt-3>
        <div class="form-group">
            <label for="">numero Chambre</label>
            <input type="text" disabled class="form-control" name="numero" id="numero" placeholder="numero chambre">
            
        </div>
        <div class="form-group">
            <label for="">Numero batiment</label>
            <input type="text" class="form-control" id="numeroBat" name="numeroBat" required>
            <small id="" class="form-text text-muted"><?=@$error['numeroBat'];?></small>
        </div>
        <div class="col-auto my-1">
            <label class="" for="">type de Chambre</label>
            <select class="custom-select mr-sm-2" id="type" name="type" required>
                <option  selected>selectionne un type de chambre</option>
                <option name="individuel" id="individuel">individuel</option>
                <option name="Adeux" id="Adeux"> Adeux</option>
            </select>
        </div>
        <button type="submit" name="btn_enregistrer" id="btn_enregistrer" class="btn btn-info">Enregistrer</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> 

<script>
    $(document).ready(function(){
        $('#btn_enregistrer').click(function(){
            // valid=true;
            // if($('#numChambre').val()==""){
            //     $('#numChambre').css('border-color','#FF0016')
            //     valid=false;
            // }
            if($('#numeroBat').val()==""){
                $('#numeroBat').css('border-color','#FF0016')
                valid=false;
            }
            return valid;
        });
    });
</script>