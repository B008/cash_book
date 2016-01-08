<div class="payees index">
	<h2><?php echo __('店名リスト'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('作成日時'); ?></th>
			<th><?php echo $this->Paginator->sort('更新日時'); ?></th>
			<th><?php echo $this->Paginator->sort('店名'); ?></th>
			<th class="actions"><?php echo __('リスト編集'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($payees as $payee): ?>
	<tr>
		<td><?php echo h($payee['Payee']['id']); ?>&nbsp;</td>
		<td><?php echo h($payee['Payee']['created']); ?>&nbsp;</td>
		<td><?php echo h($payee['Payee']['modified']); ?>&nbsp;</td>
		<td><?php echo h($payee['Payee']['payee_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('表示'), array('action' => 'view', $payee['Payee']['id'])); ?>
			<?php echo $this->Html->link(__('更新'), array('action' => 'edit', $payee['Payee']['id'])); ?>
			<?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $payee['Payee']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $payee['Payee']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('新しい店を登録'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('新しい出費を登録'), array('controller' => 'journals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('おこずかい帳に戻る'), array('controller' => 'journals', 'action' => 'index')); ?> </li>
	</ul>
</div>
