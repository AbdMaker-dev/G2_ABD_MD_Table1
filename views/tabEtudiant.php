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
            </tr>
        </thead>
        <tbody>
            <tr class="table-light">
                <td>Alioune Badara</td>
                <td>Diouf</td>
                <td>207 HVG 400</td>
                <td>400000</td>
                <td>4A</td>
                <td>NEAN</td>
            </tr>
            <tr class="table-light">
                <td>Moussa</td>
                <td>Tine</td>
                <td>305 HVG 400</td>
                <td>20000</td>
                <td>NEAN</td>
                <td>Centenaire</td>
            </tr>
        </tbody>
</table>

<!--================ Inclision du formulair pour cree les etudiants =================-->
<?php include_once('formulairEregistre_Etu.php'); ?>