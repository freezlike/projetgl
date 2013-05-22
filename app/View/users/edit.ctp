<h1>
    Editer le USER :
    <?php ?>
</h1>
<?php
    echo $this->Form->create('User', array('action' => 'edit'));
    echo $this->Form->hidden('id');
    echo $this->Form->input('username',array('readonly'=>'readonly','label'=>'Nom d\'utilisateur :'));
    echo $this->Form->input('password',array('label'=>'Mot de passe :'));
     echo $this->Form->input('role', array('label' => 'Modifier le Role',
                'options' => array('admin' => 'Admin', 'responsable' => 'Responsable')
            ));
    echo $this->Form->end('Modifier');
?>
<p style="text-align: right"><a href="../listeusers" class="b">Retour Liste USERS</a></p>