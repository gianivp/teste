<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Pedidos Cardapios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Cardapios'), ['controller' => 'Cardapios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Cardapio'), ['controller' => 'Cardapios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pedidosCardapios form col-md-10 columns content">
    <?= $this->Form->create($pedidosCardapio) ?>
    <fieldset>
        <legend><?= 'Add Pedidos Cardapio' ?></legend>
        <?php
            echo $this->Form->input('cardapio_id', ['options' => $cardapios]);
            echo $this->Form->input('pedido_id', ['options' => $pedidos]);
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
