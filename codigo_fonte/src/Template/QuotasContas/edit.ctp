<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $quotasConta->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $quotasConta->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Quotas Contas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Contas'), ['controller' => 'Contas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Conta'), ['controller' => 'Contas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="quotasContas form col-md-10 columns content">
    <?= $this->Form->create($quotasConta) ?>
    <fieldset>
        <legend><?= 'Edit Quotas Conta' ?></legend>
        <?php
            echo $this->Form->input('conta_id', ['options' => $contas]);
            echo $this->Form->input('valor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
