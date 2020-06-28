<div>
<form action="" method="post" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="recherche" type="search" placeholder="Search" aria-label="Search">
      <div class="col-auto my-1">
      <select name="type"class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Choose type</option>
        <option value="matricule">Matrcule</option>
        <option value="bourse">Boursier</option>
        <option value="num_log">Logement</option>
      </select>
    </div>
      <input type="submit" name="rech" class="btn btn-outline-success my-2 my-sm-0" value="Search">
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
                <td><a href="http://localhost/git/G2_ABD_MD_Table1/admin/modifier/<?= $data['id'] ; ?>" class="btn btn-outline-info">modifier</a></td>
                <td><a  href="http://localhost/git/G2_ABD_MD_Table1/admin/supprimer/<?= $data['id'] ; ?>" type="button" class="btn btn-outline-danger">supprimer</a></td>
            </tr>
            <?php endforeach ; ?>
        </tbody>
</table>

<!--================ Inclision du formulair pour cree les etudiants =================-->
<?php include_once('formulairEregistre_Etu.php'); ?>