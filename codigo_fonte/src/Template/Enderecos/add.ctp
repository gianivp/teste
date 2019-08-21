<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Menu') ?></a></li>
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="enderecos form col-md-10 columns content">
    <?= $this->Form->create($endereco) ?>
    <fieldset>
        <legend><?= 'Novo Endereço' ?></legend>
        <?php
            echo $this->Form->input('cliente_id', ['options' => $clientes]);
            echo $this->Form->input('nome');
            echo $this->Form->input('complemento');
            echo $this->Form->input('numero');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
