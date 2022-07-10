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
            <?= $this->Html->link(__('List Tipo Pase'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipoPase form content">
            <?= $this->Form->create($tipoPase) ?>
            <fieldset>
                <legend><?= __('Add Tipo Pase') ?></legend>
                <?php
                    echo $this->Form->control('tipo');
                    echo $this->Form->control('cupo');
                    echo $this->Form->control('pases');
                    echo $this->Form->control('costo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
