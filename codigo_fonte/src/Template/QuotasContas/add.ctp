<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Menu') ?></a></li>
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="quotasContas form col-md-10 columns content">
    <?= $this->Form->create($quotasConta) ?>
    <fieldset>
        <legend><?= 'Receber Conta' ?></legend>
        <?php
            echo $this->Form->input('conta_id', ['options' => $contas]);
            echo $this->Form->input('valor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
