<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mesasReserva->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mesasReserva->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Mesas Reservas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Mesas'), ['controller' => 'Mesas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Mesa'), ['controller' => 'Mesas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Reservas'), ['controller' => 'Reservas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Reserva'), ['controller' => 'Reservas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mesasReservas form col-md-10 columns content">
    <?= $this->Form->create($mesasReserva) ?>
    <fieldset>
        <legend><?= 'Edit Mesas Reserva' ?></legend>
        <?php
            echo $this->Form->input('mesa_id', ['options' => $mesas]);
            echo $this->Form->input('reserva_id', ['options' => $reservas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
