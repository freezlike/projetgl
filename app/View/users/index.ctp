<?php
//Tester sur une variable de session l'existence d'un user connecté pour éviter l'accès à la view login
if (isset($_SESSION['token']) == '1') {
    echo '<div id="flashMessage" class="message">vous êtes déjà connecté ' . ucfirst($current_user['username']) . ' !</div>';
}
$_SESSION['token'] = NULL;
?>
<p>
<h2>Menu projetGL</h2>
<?php
//Tester il y a user de connecté
if ($logged_in) {
    //Tester le role courant
    if ($this->Session->read('Auth.User.role') == 'admin') {
        //cas où le role courant c'est ADMIN attribution des tâches d'ADMIN
        echo '<p><h3>Tâches d\'Admin</h3></p>';
        ?>

        <p class="actions">
            <?php
            echo $this->Html->link(__('Ajouter un USER'), array('controller' => 'users', 'action' => 'adduser'), array('class' => 'LinkMenu1'));
            ?>
            <br />
            <?php
            echo $this->Html->link(__('Afficher la Liste des USERS'), array('controller' => 'users', 'action' => 'listeusers'), array('class' => 'LinkMenu2'));
            ?>
        </p>
        <?php
    } else {
        //le cas contraire c'est le role de responsable
        echo '<p><h3>Tâches de Responsable</h3></p>';
        echo '<p class="actions" >';
        ?>
        <?php
        echo $this->Html->link(__('Menu Composant Logiciel'), array('controller' => 'composantlogiciels', 'action' => '/'), array('style' => 'font-size:11px;margin-right:-50px;padding:3px'));
        ?>
<!--        <a href="composantlogiciels" style="font-size:11px;margin-right:-50px;padding:3px">Menu Composant Logiciel</a>-->
        <br />
        <a href="produitlogiciels" style="font-size:11px;margin-right:-50px;padding:3px">Menu Produit Logiciel</a>

        </p>
        <?php
    }
}
?>

</p>
