<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pase $pase
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pase'), ['action' => 'edit', $pase->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pase'), ['action' => 'delete', $pase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pase->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pase'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pase'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pase view content">
            <h3><?= h($pase->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pase->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo') ?></th>
                    <td><?= $this->Number->format($pase->tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usuario') ?></th>
                    <td><?= $this->Number->format($pase->usuario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Compra') ?></th>
                    <td><?= h($pase->fecha_compra) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
