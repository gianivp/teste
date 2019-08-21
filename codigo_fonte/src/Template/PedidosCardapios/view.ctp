<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Pedidos Cardapio']), ['action' => 'edit', $pedidosCardapio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Pedidos Cardapio']), ['action' => 'delete', $pedidosCardapio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidosCardapio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Pedidos Cardapios']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Pedidos Cardapio']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Cardapios']), ['controller' => 'Cardapios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Cardapio']), ['controller' => 'Cardapios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Pedidos']), ['controller' => 'Pedidos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Pedido']), ['controller' => 'Pedidos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pedidosCardapios view col-lg-10 col-md-9">
    <h3><?= h($pedidosCardapio->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Cardapio</th>
            <td><?= $pedidosCardapio->has('cardapio') ? $this->Html->link($pedidosCardapio->cardapio->descricao, ['controller' => 'Cardapios', 'action' => 'view', $pedidosCardapio->cardapio->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Pedido</th>
            <td><?= $pedidosCardapio->has('pedido') ? $this->Html->link($pedidosCardapio->pedido->id, ['controller' => 'Pedidos', 'action' => 'view', $pedidosCardapio->pedido->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Status</th>
            <td><?= h($pedidosCardapio->status) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($pedidosCardapio->id) ?></td>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($pedidosCardapio->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($pedidosCardapio->modified) ?></tr>
        </tr>
    </table>
</div>
