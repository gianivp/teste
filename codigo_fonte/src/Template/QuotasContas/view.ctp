<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Quotas Conta']), ['action' => 'edit', $quotasConta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Quotas Conta']), ['action' => 'delete', $quotasConta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quotasConta->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Quotas Contas']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Quotas Conta']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Contas']), ['controller' => 'Contas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Conta']), ['controller' => 'Contas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="quotasContas view col-lg-10 col-md-9">
    <h3><?= h($quotasConta->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Conta</th>
            <td><?= $quotasConta->has('conta') ? $this->Html->link($quotasConta->conta->id, ['controller' => 'Contas', 'action' => 'view', $quotasConta->conta->id]) : '' ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($quotasConta->id) ?></td>
        </tr>
        <tr>
            <th>'Valor</th>
            <td><?= $this->Number->format($quotasConta->valor) ?></td>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($quotasConta->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($quotasConta->modified) ?></tr>
        </tr>
    </table>
</div>
