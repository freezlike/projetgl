<div class="types form">
<?php echo $this->Form->create('Type'); ?>
	<fieldset>
		<legend><?php echo __('Ajouter Type'); ?></legend>
	<?php
		echo $this->Form->input('libelle');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Ajouter')); ?>
    <p style="text-align: right" ><a href="../composantlogiciels" class="b">Retour Composant Logiciels</a></p>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Liste Types'), array('action' => 'index')); ?></li>
	</ul>

</div>

