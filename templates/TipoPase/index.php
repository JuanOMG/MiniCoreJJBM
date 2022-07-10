<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TipoPase[]|\Cake\Collection\CollectionInterface $tipoPase
 */
?>
<div class="tipoPase index content">
    <?= $this->Html->link(__('New Tipo Pase'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipo Pase') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('tipo') ?></th>
                    <th><?= $this->Paginator->sort('cupo') ?></th>
                    <th><?= $this->Paginator->sort('pases') ?></th>
                    <th><?= $this->Paginator->sort('costo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tipoPase as $tipoPase): ?>
                <tr>
                    <td><?= $this->Number->format($tipoPase->id) ?></td>
                    <td><?= h($tipoPase->tipo) ?></td>
                    <td><?= $this->Number->format($tipoPase->cupo) ?></td>
                    <td><?= $this->Number->format($tipoPase->pases) ?></td>
                    <td><?= $this->Number->format($tipoPase->costo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipoPase->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipoPase->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipoPase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoPase->id)]) ?>
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
