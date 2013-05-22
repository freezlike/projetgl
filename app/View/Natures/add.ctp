<div class="natures form">
<?php echo $this->Form->create('Nature'); ?>
	<fieldset>
		<legend><?php echo __('Ajouter Nature'); ?></legend>
	<?php
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Ajouter')); ?>
    <p style="text-align: right" ><a href="../natures" class="b">Retour Nature</a></p>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Liste Natures'), array('action' => 'index')); ?></li>
	</ul>
</div>
