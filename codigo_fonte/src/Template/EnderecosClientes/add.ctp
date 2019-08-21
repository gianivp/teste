<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Enderecos Clientes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Enderecos'), ['controller' => 'Enderecos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Endereco'), ['controller' => 'Enderecos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="enderecosClientes form col-md-10 columns content">
    <?= $this->Form->create($enderecosCliente) ?>
    <fieldset>
        <legend><?= 'Add Enderecos Cliente' ?></legend>
        <?php
            echo $this->Form->input('cliente_id', ['options' => $clientes]);
            echo $this->Form->input('endereco_id', ['options' => $enderecos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
