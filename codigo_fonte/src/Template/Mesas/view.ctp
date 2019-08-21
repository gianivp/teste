<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Mesa']), ['action' => 'edit', $mesa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Mesa']), ['action' => 'delete', $mesa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mesa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Mesas']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Mesa']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Agregacoes']), ['controller' => 'Agregacoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Agregaco']), ['controller' => 'Agregacoes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Contas']), ['controller' => 'Contas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Conta']), ['controller' => 'Contas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Pedidos']), ['controller' => 'Pedidos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Pedido']), ['controller' => 'Pedidos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Reservas']), ['controller' => 'Reservas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Reserva']), ['controller' => 'Reservas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mesas view col-lg-10 col-md-9">
    <h3><?= h($mesa->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Status</th>
            <td><?= h($mesa->status) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($mesa->id) ?></td>
        </tr>
        <tr>
            <th>'Numero Mesa</th>
            <td><?= $this->Number->format($mesa->numero_mesa) ?></td>
        </tr>
        <tr>
            <th>'Cadeiras</th>
            <td><?= $this->Number->format($mesa->cadeiras) ?></td>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($mesa->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($mesa->modified) ?></tr>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Agregacoes']) ?></h4>
        <?php if (!empty($mesa->agregacoes)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Mesa Id</th>
                <th>Mesa Id A</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($mesa->agregacoes as $agregacoes): ?>
            <tr>
                <td><?= h($agregacoes->id) ?></td>
                <td><?= h($agregacoes->mesa_id) ?></td>
                <td><?= h($agregacoes->mesa_id_a) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Agregacoes', 'action' => 'view', $agregacoes->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Agregacoes', 'action' => 'edit', $agregacoes->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Agregacoes', 'action' => 'delete', $agregacoes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agregacoes->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Contas']) ?></h4>
        <?php if (!empty($mesa->contas)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Mesa Id</th>
                <th>Valor</th>
                <th>Status</th>
                <th>Created</th>
                <th>Modified</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($mesa->contas as $contas): ?>
            <tr>
                <td><?= h($contas->id) ?></td>
                <td><?= h($contas->mesa_id) ?></td>
                <td><?= h($contas->valor) ?></td>
                <td><?= h($contas->status) ?></td>
                <td><?= h($contas->created) ?></td>
                <td><?= h($contas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Contas', 'action' => 'view', $contas->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Contas', 'action' => 'edit', $contas->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contas', 'action' => 'delete', $contas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contas->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Pedidos']) ?></h4>
        <?php if (!empty($mesa->pedidos)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Mesa Id</th>
                <th>Datahora</th>
                <th>Valortotal</th>
                <th>Entrega</th>
                <th>Status</th>
                <th>Created</th>
                <th>Modified</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($mesa->pedidos as $pedidos): ?>
            <tr>
                <td><?= h($pedidos->id) ?></td>
                <td><?= h($pedidos->mesa_id) ?></td>
                <td><?= h($pedidos->datahora) ?></td>
                <td><?= h($pedidos->valortotal) ?></td>
                <td><?= h($pedidos->entrega) ?></td>
                <td><?= h($pedidos->status) ?></td>
                <td><?= h($pedidos->created) ?></td>
                <td><?= h($pedidos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pedidos', 'action' => 'view', $pedidos->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pedidos', 'action' => 'edit', $pedidos->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pedidos', 'action' => 'delete', $pedidos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidos->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Reservas']) ?></h4>
        <?php if (!empty($mesa->reservas)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Cliente Id</th>
                <th>Lugares</th>
                <th>Datahora</th>
                <th>Status</th>
                <th>Created</th>
                <th>Modified</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($mesa->reservas as $reservas): ?>
            <tr>
                <td><?= h($reservas->id) ?></td>
                <td><?= h($reservas->cliente_id) ?></td>
                <td><?= h($reservas->lugares) ?></td>
                <td><?= h($reservas->datahora) ?></td>
                <td><?= h($reservas->status) ?></td>
                <td><?= h($reservas->created) ?></td>
                <td><?= h($reservas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Reservas', 'action' => 'view', $reservas->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Reservas', 'action' => 'edit', $reservas->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reservas', 'action' => 'delete', $reservas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservas->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
