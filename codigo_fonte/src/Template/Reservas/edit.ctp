<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reserva->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reserva->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Reservas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Mesas'), ['controller' => 'Mesas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Mesa'), ['controller' => 'Mesas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reservas form col-md-10 columns content">
    <?= $this->Form->create($reserva) ?>
    <fieldset>
        <legend><?= 'Edit Reserva' ?></legend>
        <?php
            echo $this->Form->input('cliente_id', ['options' => $clientes]);
            echo $this->Form->input('lugares');
            echo $this->Form->input('datahora');
            echo $this->Form->input('status');
            echo $this->Form->input('mesas._ids', ['options' => $mesas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
