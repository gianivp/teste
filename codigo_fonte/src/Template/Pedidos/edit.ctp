<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pedido->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Pedidos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Mesas'), ['controller' => 'Mesas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Mesa'), ['controller' => 'Mesas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Cardapios'), ['controller' => 'Cardapios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Cardapio'), ['controller' => 'Cardapios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pedidos form col-md-10 columns content">
    <?= $this->Form->create($pedido) ?>
    <fieldset>
        <legend><?= 'Edit Pedido' ?></legend>
        <?php
            echo $this->Form->input('mesa_id', ['options' => $mesas]);
            echo $this->Form->input('datahora');
            echo $this->Form->input('valortotal');
            echo $this->Form->input('entrega');
            echo $this->Form->input('status');
            echo $this->Form->input('cardapios._ids', ['options' => $cardapios]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
