<!-- JS, Popper.js, and jQuery -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<div>
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Enregistrement chambre</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <div class="col-lg-12">
					<div class="login_form_inner register_form_inner">
						<h3>Enregistre chambre</h3>
						<form action="" method="post">
						    <input type="hidden" name="className" value="Chambres">
							<div class="form-row">
								<div class="form-group col-md-6">
								<input type="text" class="form-control" name="numChambre" id="inputEmail4" placeholder="Numero chambre">
								</div>
								<div class="form-group col-md-6">
								<input type="text" class="form-control" name="numBatiment" id="inputPassword4" placeholder="Numero Batiment">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">								
								<select class="custom-select mr-sm-2" name="types" id="inlineFormCustomSelect">
									<option selected>Type de chambre</option>
									<option value="1">individuel</option>
									<option value="2">deux</option>
								</select>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" name="saveCham" class="form-control btn btn-primary" value="Enregistrer">
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