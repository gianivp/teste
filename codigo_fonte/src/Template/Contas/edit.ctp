<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $conta->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $conta->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Contas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Mesas'), ['controller' => 'Mesas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Mesa'), ['controller' => 'Mesas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Quotas Contas'), ['controller' => 'QuotasContas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Quotas Conta'), ['controller' => 'QuotasContas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contas form col-md-10 columns content">
    <?= $this->Form->create($conta) ?>
    <fieldset>
        <legend><?= 'Edit Conta' ?></legend>
        <?php
            echo $this->Form->input('mesa_id', ['options' => $mesas]);
            echo $this->Form->input('valor');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
