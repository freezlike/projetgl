<html>
    <head>
        <title>Ajouter un User</title>
    </head>
    <body>
    <!-- app/View/Users/addUser.ctp -->
    <div class="users form">
    <?php echo $this->Form->create('User');?>
        <fieldset>
            <legend><?php echo __('Ajouter User'); ?></legend>
            <?php echo $this->Form->input('username',array('placeholder' => 'Nom User','label' => 'Nom d\'utilisateur'));
            echo $this->Form->input('password',array('placeholder' => 'Mot de passe','label' => 'Mot de passe'));
            //echo $this->Form->input('image',array('label' => 'Image de profil','type' => 'file'));
            echo $this->Form->input('role', array(
                'options' => array('admin' => 'Admin', 'responsable' => 'Responsable')
            ));
        ?>
        </fieldset>
    <?php echo $this->Form->end(__('Ajouter'));?>
        <p style="text-align: right">
            <?php 
                echo $this->Html->link(__('Retour Menu'),array('controller'=>'users','action'=>'/'),array('class'=>'b'));
            ?>
        </p>
        
    </div>
    <div>
        
    </div>
    </body>
</html>