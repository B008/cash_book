<div class="journals form">
<?php echo $this->Form->create('Journal'); ?>
	<fieldset>
		<legend><?php echo __('Add Journal'); ?></legend>
	<?php
		echo $this->Form->input('payee_id');
		echo $this->Form->input('detail_id');
		echo $this->Form->input('amount');
		echo $this->Form->input('payed_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Journals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Payees'), array('controller' => 'payees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payee'), array('controller' => 'payees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Details'), array('controller' => 'details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detail'), array('controller' => 'details', 'action' => 'add')); ?> </li>
	</ul>
</div>
