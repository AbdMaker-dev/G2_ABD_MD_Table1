<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalLong">+</button>
<table class="table table-hover mt-3">
        <thead>
            <tr>
                <th scope="col">Numero chambre</th>
                <th scope="col">Numero batiment</th>
                <th scope="col">Type de chambre</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($datas as $data ) : ?>
                <tr class="table-light">
                    <td><?= $data['numChambre'] ; ?></td>
                    <td><?= $data['numBatiment'] ; ?></td>
                    <td><?= $data['types']==1 ? "Idividule" : "Deux" ; ?></td>
                </tr>
            <?php endforeach ; ?>
        </tbody>
</table>

<!--================ Inclision du formulair pour cree les chambres =================-->
<?php include_once('formulairEregistre_Cham.php'); ?>