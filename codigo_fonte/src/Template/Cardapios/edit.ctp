<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cardapio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cardapio->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Cardapios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cardapios form col-md-10 columns content">
    <?= $this->Form->create($cardapio) ?>
    <fieldset>
        <legend><?= 'Editar Cardápio' ?></legend>
        <?php
            echo $this->Form->input('codigo');
            echo $this->Form->input('descricao');
            echo $this->Form->input('preco');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
