<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TipoPase $tipoPase
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipo Pase'), ['action' => 'edit', $tipoPase->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipo Pase'), ['action' => 'delete', $tipoPase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoPase->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipo Pase'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipo Pase'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipoPase view content">
            <h3><?= h($tipoPase->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tipo') ?></th>
                    <td><?= h($tipoPase->tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tipoPase->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cupo') ?></th>
                    <td><?= $this->Number->format($tipoPase->cupo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pases') ?></th>
                    <td><?= $this->Number->format($tipoPase->pases) ?></td>
                </tr>
                <tr>
                    <th><?= __('Costo') ?></th>
                    <td><?= $this->Number->format($tipoPase->costo) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
