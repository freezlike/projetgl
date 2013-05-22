<!--<div class="actions">
                   
            <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>style="margin: 10px -21px 0 -110px"
            <div class="fb-like-box" data-href="https://www.facebook.com/pages/G%C3%A9nie-logiciel/109780895715261?fref=ts" data-width="292" data-show-faces="true" data-stream="true" data-border-color="black" data-header="true"></div>
                </div>-->
<div class="actions" >
    <?php 
    //include(../Layouts/connected.php);
    //echo $_SERVER['REMOTE_ADDR'];
    echo '<br />';
    //echo $_SERVER[''];
    ?>
</div>

<br />
<?php
    
if($this->Session->read('Auth.User')!==NULL){
    ?>

<script>
    window.location = '<?php echo $this->Html->url('/users')?>';
        </script>
<?php
$_SESSION['token']='1';
    
?>
<?php

}
?>
<div class="users form" >

    <?php echo $this->Session->flash('Auth'); ?>
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('veuillez vous identifiez, merci.'); ?></legend>
        <?php
        echo $this->Form->input('username', array('placeholder' => 'Nom d\'utilisateur', 'label' => 'Nom d\'utilisateur', 'title' => 'Nom d\'utilisateur'));
        echo $this->Form->input('password', array('placeholder' => 'Mot de passe', 'type' => 'password', 'label' => 'Mot de passe', 'title' => 'Mot de passe'));
        echo $this->Form->submit('Connexion',array('class'=>'btn btn-large btn-primary'));
        ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
    <p style="text-align: right"><a href="../users/" class="b">Retour Menu</a></p>
</div>
<?php
//        }
        ?>