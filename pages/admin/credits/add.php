<p><a href="admin.php">Retour zone admin</a></p>

<?php
if(isset($_POST['organisme'],$_POST['montant'])){
    App::getInstance()->getTable('Credit')->create([    
        "organisme" => $_POST['organisme'],
        "montant" => $_POST['montant']]);
    header('Location: admin.php?p=credits');
}
?>
<h2>Ajouter un nouvel organisme</h2>

<form action="admin.php?p=credits.add" method="post">
    <input class="text-center" type="text" name="organisme" placeholder="Organisme">
    <input class="text-center" type="text" name="montant" placeholder="Montant">
    
    <input class="btn btn-success" type="submit" >
</form>