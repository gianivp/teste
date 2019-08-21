<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Menu') ?></a></li>
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Ver {0}', 'Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo {0}', 'Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reservas form col-md-10 columns content">
    <?= $this->Form->create($reserva) ?>
    <fieldset>
        <legend><?= 'Nova Reserva' ?></legend>
        <?php
            echo $this->Form->input('cliente_id', ['options' => $clientes]);
            echo $this->Form->input('lugares');
            echo $this->Form->input('datahora');
            echo $this->Form->input('status');
            echo $this->Form->input('mesas._ids', ['options' => $mesas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
