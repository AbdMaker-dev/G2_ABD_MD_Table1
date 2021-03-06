<!-- JS, Popper.js, and jQuery -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<div>
<!-- Modal -->
<div class="" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modification d'etudiant</h5>
      </div>
      <div class="modal-body">
      <div class="col-lg-12">
					<div class="login_form_inner register_form_inner">
						<h3>Modifier etudiant</h3>
						<form action="" method="post">
						    <input type="hidden" name="className" value="Etudiants">
							<div class="form-row">
								<div class="form-group col-md-6">
								<input type="text" value="<?= isset($datas['nom'])? $datas['nom'] : "" ?>" class="form-control" name="nom" id="inputEmail4" placeholder="Nom">
								</div>
								<div class="form-group col-md-6">
								<input type="text"  value="<?= isset($datas['prenom'])? $datas['prenom'] : "" ?>" class="form-control" name="prenom" id="inputPassword4" placeholder="Prenom">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
								<input type="tel"  value="<?= isset($datas['tel'])? $datas['tel'] : "" ?>" class="form-control" name="tel" id="inputEmail4" placeholder="Telephone">
								</div>
								<div class="form-group col-md-6">
								<input type="date"  value="<?= isset($datas['dateNaiss'])? $datas['dateNaiss'] : "" ?>" class="form-control" name="dateNaiss" id="inputPassword4" placeholder="Prenom">
								</div>
							</div>
							<div class="form-group">
								<input type="email"  value="<?= isset($datas['email'])? $datas['email'] : "" ?>" class="form-control" name="email" id="inputAddress2" placeholder="Email">
							</div>

							<div class="form-row">
								<div class="form-group col-md-6">	
								<?php $b ; $n_b ; ?>
										<?php if($datas['bourse']!= 0){
											  $b = "selected";
											  $n_b = "";
										}else{
											$b = "";
											$n_b = "selected";
										}
										?>							
								<select class="custom-select mr-sm-2" name="typeEtu" id="inlineFormCustomSelect">
									<option>Type d'etudiant</option>
									<option  <?=$b ; ?> value="b">Boursier</option>
									<option  <?=$n_b ; ?> value="n-b">Non Boursier</option>
								</select>
								</div>
								<div class="form-group col-md-6">
								<select class="custom-select mr-sm-2" name="bourse" id="inlineFormCustomSelect">
									<option value="NEAN" >Type Bourse</option>
									<option <?= $datas['bourse'] == '40000' ? "selected" : "" ?> value="40000">pension-complète : 40000 fr</option>
									<option <?= $datas['bourse'] == '20000' ? "selected" : "" ?> value="20000">demi-bourse : 20000 fr</option>
								</select>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-6">								
									<div class="form-check form-check-inline">
										<?php $oui ; $non ; ?>
										<?php if($datas['num_log']!= "NEAN"){
											  $oui = "checked";
											  $non = "";
										}else{
											$oui = "";
											$non = "checked";
										}
										?>
										<label class="form-check-label" for="inlineRadio3">Loge ? </label> 
										<input <?=$oui; ?> class="form-check-input" type="radio" name="loge" value="oui" id="inlineRadio1" value="option1">
										<label class="form-check-label" for="inlineRadio1">OUI</label><br>
										
									</div>
									<div class="form-check form-check-inline">
										<input <?=$non; ?> class="form-check-input" type="radio" name="loge" value="non" id="inlineRadio2" value="option2">
										<label class="form-check-label" for="inlineRadio2">NON</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="text" value="<?= isset($datas['num_log'])? $datas['num_log'] : "" ?>" class="form-control" name="num_log" id="inputAddress" placeholder="numero logement">
							</div>
							<div class="form-group">
								<input type="text" value="<?= isset($datas['adresse'])? $datas['adresse'] : "" ?>" class="form-control" name="adresse" id="inputAddress" placeholder="Adresse">
							</div>
							<div class="form-group">
								<input type="submit" name="saveModifEtu" class="form-control btn btn-primary" value="Enregistrer">
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