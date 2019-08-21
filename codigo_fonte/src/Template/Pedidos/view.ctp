<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Pedido']), ['action' => 'edit', $pedido->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Pedido']), ['action' => 'delete', $pedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Pedidos']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Pedido']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Mesas']), ['controller' => 'Mesas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Mesa']), ['controller' => 'Mesas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Cardapios']), ['controller' => 'Cardapios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Cardapio']), ['controller' => 'Cardapios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pedidos view col-lg-10 col-md-9">
    <h3><?= h($pedido->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Mesa</th>
            <td><?= $pedido->has('mesa') ? $this->Html->link($pedido->mesa->id, ['controller' => 'Mesas', 'action' => 'view', $pedido->mesa->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Entrega</th>
            <td><?= h($pedido->entrega) ?></td>
        </tr>
        <tr>
            <th>Status</th>
            <td><?= h($pedido->status) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($pedido->id) ?></td>
        </tr>
        <tr>
            <th>'Valortotal</th>
            <td><?= $this->Number->format($pedido->valortotal) ?></td>
        </tr>
        <tr>
            <th>Datahora</th>
            <td><?= h($pedido->datahora) ?></tr>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($pedido->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($pedido->modified) ?></tr>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Cardapios']) ?></h4>
        <?php if (!empty($pedido->cardapios)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Codigo</th>
                <th>Descricao</th>
                <th>Created</th>
                <th>Modified</th>
                <th>Preco</th>
                <th>Status</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pedido->cardapios as $cardapios): ?>
            <tr>
                <td><?= h($cardapios->id) ?></td>
                <td><?= h($cardapios->codigo) ?></td>
                <td><?= h($cardapios->descricao) ?></td>
                <td><?= h($cardapios->created) ?></td>
                <td><?= h($cardapios->modified) ?></td>
                <td><?= h($cardapios->preco) ?></td>
                <td><?= h($cardapios->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cardapios', 'action' => 'view', $cardapios->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cardapios', 'action' => 'edit', $cardapios->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cardapios', 'action' => 'delete', $cardapios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cardapios->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
