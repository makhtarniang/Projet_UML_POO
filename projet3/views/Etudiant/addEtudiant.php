

<!-- navigation -->

<!-- formulaire d'ajout d'une chambre -->

<div class="container margin-auto">
    <h1 class="d-flex justify-content-center font-weight-bold mt-5">AJOUTER UN ETUDIANT</h1>
    <form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Matricule</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="matricule" value="matricule" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">nom</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="nom" value="nom" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">prenom</label>
      <div class="input-group">
        <!--  -->
        <input type="text" class="form-control" id="validationCustomUsername" placeholder="prenom" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">E-mail</label>
      <input type="email" class="form-control" id="validationCustom03" placeholder="niang@gmail.com" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Telephone</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="Telephone" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">date de naissance</label>
      <input type="date" class="form-control" id="validationCustom05" placeholder="votre date de naissance" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Bourse</label>
      <select id="inputState" class="form-control">
        <option selected>select</option>
        <option>boursier</option>
        <option>boursier logé</option>
        <option>non boursier</option>
      </select>     
       <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>

  <button class="btn btn-info" type="submit">enregistrer</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</div>
