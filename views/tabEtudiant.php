<div>
<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <div class="col-auto my-1">
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Choose type</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
</div>
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalLong">+</button>
<table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Prenom</th>
                <th scope="col">Nom</th>
                <th scope="col">Matricule</th>
                <th scope="col">Bourse</th>
                <th scope="col">Numero chambre</th>
                <th scope="col">Adresse</th>
                <th scope="col">tel</th>
                <th scope="col">email</th>
                <th scope="col">date de naissance</th>
                <th scope="col">Modifier</th>
                <th scope="col">Suprimmer</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($datas as $data ) : ?>
            <tr class="table-light">
                <td><?= $data['prenom'] ; ?></td>
                <td><?= $data['nom'] ; ?></td>
                <td><?= $data['matricule'] ; ?></td>
                <td><?= ($data['bourse']==0) ? "NEAN" : $data['bourse'] ; ?></td>
                <td><?= $data['num_log'] ; ?></td>
                <td><?= $data['adresse'] ; ?></td>
                <td><?= $data['tel'] ; ?></td>
                <td><?= $data['email'] ; ?></td>
                <td><?= $data['dateNaiss'] ; ?></td>
                <td><button type="button" class="btn btn-outline-info">modifier</button></td>
                <td><button type="button" class="btn btn-outline-danger">supprimer</button></td>
            </tr>
            <?php endforeach ; ?>
        </tbody>
</table>

<!--================ Inclision du formulair pour cree les etudiants =================-->
<?php include_once('formulairEregistre_Etu.php'); ?>