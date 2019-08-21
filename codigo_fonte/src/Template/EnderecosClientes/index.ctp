<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('New {0}', ['Enderecos Cliente']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Clientes']), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Cliente']), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Enderecos']), ['controller' => 'Enderecos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Endereco']), ['controller' => 'Enderecos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="enderecosClientes index col-md-10 columns content">
    <h3>Enderecos Clientes</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('cliente_id') ?></th>
                <th><?= $this->Paginator->sort('endereco_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($enderecosClientes as $enderecosCliente): ?>
            <tr>
                <td><?= $this->Number->format($enderecosCliente->id) ?></td>
                <td><?= $enderecosCliente->has('cliente') ? $this->Html->link($enderecosCliente->cliente->nome, ['controller' => 'Clientes', 'action' => 'view', $enderecosCliente->cliente->id]) : '' ?></td>
                <td><?= $enderecosCliente->has('endereco') ? $this->Html->link($enderecosCliente->endereco->nome, ['controller' => 'Enderecos', 'action' => 'view', $enderecosCliente->endereco->id]) : '' ?></td>
                <td><?= h($enderecosCliente->created) ?></td>
                <td><?= h($enderecosCliente->modified) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $enderecosCliente->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $enderecosCliente->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $enderecosCliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enderecosCliente->id), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <center>
            <ul class="pagination">
                <?= $this->Paginator->prev('&laquo; ' . __('previous'), ['escape'=>false]) ?>
                <?= $this->Paginator->numbers(['escape'=>false]) ?>
                <?= $this->Paginator->next(__('next') . ' &raquo;', ['escape'=>false]) ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} records out of
         {{count}} total, starting on record {{start}}, ending on {{end}}')) ?></p>
        </div>
    </center>
</div>
</div>