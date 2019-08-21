<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Menu') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Conta']), ['action' => 'edit', $conta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Conta']), ['action' => 'delete', $conta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conta->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Contas']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Conta']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Mesas']), ['controller' => 'Mesas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Mesa']), ['controller' => 'Mesas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Quotas Contas']), ['controller' => 'QuotasContas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Quotas Conta']), ['controller' => 'QuotasContas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contas view col-lg-10 col-md-9">
    <h3><?= h($conta->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Mesa</th>
            <td><?= $conta->has('mesa') ? $this->Html->link($conta->mesa->id, ['controller' => 'Mesas', 'action' => 'view', $conta->mesa->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Status</th>
            <td><?= h($conta->status) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($conta->id) ?></td>
        </tr>
        <tr>
            <th>'Valor</th>
            <td><?= $this->Number->format($conta->valor) ?></td>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($conta->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($conta->modified) ?></tr>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Quotas Contas']) ?></h4>
        <?php if (!empty($conta->quotas_contas)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Conta Id</th>
                <th>Valor</th>
                <th>Created</th>
                <th>Modified</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($conta->quotas_contas as $quotasContas): ?>
            <tr>
                <td><?= h($quotasContas->id) ?></td>
                <td><?= h($quotasContas->conta_id) ?></td>
                <td><?= h($quotasContas->valor) ?></td>
                <td><?= h($quotasContas->created) ?></td>
                <td><?= h($quotasContas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'QuotasContas', 'action' => 'view', $quotasContas->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'QuotasContas', 'action' => 'edit', $quotasContas->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'QuotasContas', 'action' => 'delete', $quotasContas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quotasContas->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
