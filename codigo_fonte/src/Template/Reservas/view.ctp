<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Reserva']), ['action' => 'edit', $reserva->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Reserva']), ['action' => 'delete', $reserva->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reserva->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Reservas']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Reserva']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Clientes']), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Cliente']), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Mesas']), ['controller' => 'Mesas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Mesa']), ['controller' => 'Mesas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="reservas view col-lg-10 col-md-9">
    <h3><?= h($reserva->cliente->nome) ?></h3>
    <table class="table table-striped table-hover">
    
        <tr>
            <th>Status</th>
            <td><?= h($reserva->status) ?></td>
        </tr>
        <tr>
            <th>Lugares</th>
            <td><?= $this->Number->format($reserva->lugares) ?></td>
        </tr>
        <tr>
            <th>Data / hora</th>
            <td><?= h($reserva->datahora) ?></tr>
        </tr>

    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Mesas']) ?></h4>
        <?php if (!empty($reserva->mesas)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Numero Mesa</th>
                <th>Cadeiras</th>
                <th>Status</th>
                <th>Created</th>
                <th>Modified</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($reserva->mesas as $mesas): ?>
            <tr>
                <td><?= h($mesas->id) ?></td>
                <td><?= h($mesas->numero_mesa) ?></td>
                <td><?= h($mesas->cadeiras) ?></td>
                <td><?= h($mesas->status) ?></td>
                <td><?= h($mesas->created) ?></td>
                <td><?= h($mesas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Mesas', 'action' => 'view', $mesas->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Mesas', 'action' => 'edit', $mesas->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Mesas', 'action' => 'delete', $mesas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mesas->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
