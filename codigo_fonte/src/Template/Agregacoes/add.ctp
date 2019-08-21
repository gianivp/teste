<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Agregacoes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Mesas'), ['controller' => 'Mesas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Mesa'), ['controller' => 'Mesas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="agregacoes form col-md-10 columns content">
    <?= $this->Form->create($agregaco) ?>
    <fieldset>
        <legend><?= 'Add Agregaco' ?></legend>
        <?php
            echo $this->Form->input('mesa_id', ['options' => $mesas, 'empty' => true]);
            echo $this->Form->input('mesa_id_a');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
