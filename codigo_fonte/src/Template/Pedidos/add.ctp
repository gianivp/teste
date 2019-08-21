<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Menu') ?></a></li>
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Item de Cardápio'), ['controller' => 'Cardapios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pedidos form col-md-10 columns content">
    <?= $this->Form->create($pedido) ?>
    <fieldset>
        <legend><?= 'Add Pedido' ?></legend>
        <?php
            echo $this->Form->input('mesa_id', ['options' => $mesas]);
            echo $this->Form->input('cardapios._ids', ['options' => $cardapios]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
