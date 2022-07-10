<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pase[]|\Cake\Collection\CollectionInterface $pase
 */
?>
<div class="pase index content">
    <?= $this->Html->link(__('New Pase'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pase') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('fecha_compra') ?></th>
                    <th><?= $this->Paginator->sort('tipo') ?></th>
                    <th><?= $this->Paginator->sort('usuario') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pase as $pase): ?>
                <tr>
                    <td><?= $this->Number->format($pase->id) ?></td>
                    <td><?= h($pase->fecha_compra) ?></td>
                    <td><?= $this->Number->format($pase->tipo) ?></td>
                    <td><?= $this->Number->format($pase->usuario) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pase->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pase->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pase->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
