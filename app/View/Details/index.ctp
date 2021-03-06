<div class="details index">
	<h2><?php echo __('費目リスト'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('作成日時'); ?></th>
			<th><?php echo $this->Paginator->sort('更新日時'); ?></th>
			<th><?php echo $this->Paginator->sort('費目'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($details as $detail): ?>
	<tr>
		<td><?php echo h($detail['Detail']['id']); ?>&nbsp;</td>
		<td><?php echo h($detail['Detail']['created']); ?>&nbsp;</td>
		<td><?php echo h($detail['Detail']['modified']); ?>&nbsp;</td>
		<td><?php echo h($detail['Detail']['detail_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $detail['Detail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $detail['Detail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $detail['Detail']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $detail['Detail']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('新しい費目を登録'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('新しい出費を登録'), array('controller' => 'journals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('おこずかい帳に戻る'), array('controller' => 'journals', 'action' => 'index')); ?> </li>
	</ul>
</div>
