<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Menu') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Funcionarios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="funcionarios form col-md-10 columns content">
    <?= $this->Form->create($funcionario) ?>
    <fieldset>
        <legend><?= 'Add Funcionario' ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('cpf');
            echo $this->Form->input('telefone_residencial');
            echo $this->Form->input('telefone_celular');
            echo $this->Form->input('dt_nascimento', ['empty' => true, 'default' => '']);
            echo $this->Form->input('status');
            echo $this->Form->input('dt_admissao');
            echo $this->Form->input('dt_demissao', ['empty' => true, 'default' => '']);
            echo $this->Form->input('pis');
            echo $this->Form->input('salario');
            echo $this->Form->input('comissao');
            echo $this->Form->input('email');
            echo $this->Form->input('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
