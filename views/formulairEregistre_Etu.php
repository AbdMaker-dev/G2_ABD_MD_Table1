<!-- JS, Popper.js, and jQuery -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<div>
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Enregistrement etudiant</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="col-lg-12">
					<div class="login_form_inner register_form_inner">
						<h3>Enregistre etudiant</h3>
						<form>
						    <div class="form-group">
								<input type="text" class="form-control" id="inputAddress2" placeholder="Matrcule">
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
								<input type="text" class="form-control" id="inputEmail4" placeholder="Nom">
								</div>
								<div class="form-group col-md-6">
								<input type="text" class="form-control" id="inputPassword4" placeholder="Prenom">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
								<input type="email" class="form-control" id="inputEmail4" placeholder="Telephone">
								</div>
								<div class="form-group col-md-6">
								<input type="date" class="form-control" id="inputPassword4" placeholder="Prenom">
								</div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="inputAddress2" placeholder="Email">
							</div>

							<div class="form-row">
								<div class="form-group col-md-6">								
								<select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
									<option selected>Type d'etudiant</option>
									<option value="1">Boursier</option>
									<option value="2">Non Boursier</option>
								</select>
								</div>
								<div class="form-group col-md-6">
								<select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
									<option selected>Type Bourse</option>
									<option value="1">pension-complète : 40000 fr</option>
									<option value="2">demi-bourse : 20000 fr</option>
								</select>
								</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="inputAddress" placeholder="Adresse">
							</div>

							<div class="form-row">
								<div class="form-group col-md-6">								
									<div class="form-check form-check-inline">
										<label class="form-check-label" for="inlineRadio3">Loge ? </label> 
										<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
										<label class="form-check-label" for="inlineRadio1">OUI</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
										<label class="form-check-label" for="inlineRadio2">NON</label>
									</div>
								</div>
							</div>

							<div class="form-group">
								<input type="submit" class="form-control btn btn-primary" value="Enregistrer">
							</div>
							</form>
					</div>
				</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>