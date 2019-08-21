<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Menu') ?></a></li>
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova agração'), ['controller' => 'Agregacoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Nova {0}', 'Reserva'), ['controller' => 'Reservas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mesas form col-md-10 columns content">
    <?= $this->Form->create($mesa) ?>
    <fieldset>
        <legend><?= 'Nova Mesa' ?></legend>
        <?php
            echo $this->Form->input('numero_mesa');
            echo $this->Form->input('cadeiras');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
