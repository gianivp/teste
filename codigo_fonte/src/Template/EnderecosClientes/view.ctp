<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Enderecos Cliente']), ['action' => 'edit', $enderecosCliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Enderecos Cliente']), ['action' => 'delete', $enderecosCliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enderecosCliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Enderecos Clientes']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Enderecos Cliente']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Clientes']), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Cliente']), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Enderecos']), ['controller' => 'Enderecos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Endereco']), ['controller' => 'Enderecos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="enderecosClientes view col-lg-10 col-md-9">
    <h3><?= h($enderecosCliente->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Cliente</th>
            <td><?= $enderecosCliente->has('cliente') ? $this->Html->link($enderecosCliente->cliente->nome, ['controller' => 'Clientes', 'action' => 'view', $enderecosCliente->cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Endereco</th>
            <td><?= $enderecosCliente->has('endereco') ? $this->Html->link($enderecosCliente->endereco->nome, ['controller' => 'Enderecos', 'action' => 'view', $enderecosCliente->endereco->id]) : '' ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($enderecosCliente->id) ?></td>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($enderecosCliente->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($enderecosCliente->modified) ?></tr>
        </tr>
    </table>
</div>
