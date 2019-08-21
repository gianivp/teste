<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Menu') ?></a></li>
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Ver Reservas do Cliente'), ['controller' => 'Reservas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova reserva para o cliente'), ['controller' => 'Reservas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clientes form col-md-10 columns content">
    <?= $this->Form->create($cliente) ?>
    <fieldset>
        <legend><?= 'Novo Cliente' ?></legend>
        <?php

            $opts = array('Ativo' => __('Ativo'), 'Desativo' => __('Desativo'));
            echo $this->Form->input('nome', array('label'=>'Nome Completo'));
            echo $this->Form->input('cpf', array('label' => 'CPF'));
            echo $this->Form->input('telefone_residencial');
            echo $this->Form->input('telefone_celular');
            echo $this->Form->input('status');
            echo $this->Form->input('dt_nascimento', ['empty' => true, 'default' => '']);
            echo $this->Form->input('status', array('options' => $opts, 'label' => __('Status')));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>



