<p><a href="admin.php">Retour zone admin</a></p>

<h2>Liste des crédits</h2>
<p><a href="admin.php?p=credits.add">Ajouter un crédit</a></p>

<table class="table table-bordered text-center col-md-12">
    <thead>
        <tr>
            <td>Organisme</td>
            <td>Montant</td>
        </tr>
    </thead>
    <tbody>
        
    </tbody>

<?php foreach (App::getInstance()->getTable("Credit")->all() as $credit): ?>
    <tr>
        <td><?= $credit->organisme ?></td>
        <td><?= $credit->montant ?></td>
        
    </tr>


<?php endforeach; ?>

</table>