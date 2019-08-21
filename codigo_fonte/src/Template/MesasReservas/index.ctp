<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('New {0}', ['Mesas Reserva']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Mesas']), ['controller' => 'Mesas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Mesa']), ['controller' => 'Mesas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Reservas']), ['controller' => 'Reservas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Reserva']), ['controller' => 'Reservas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mesasReservas index col-md-10 columns content">
    <h3>Mesas Reservas</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('mesa_id') ?></th>
                <th><?= $this->Paginator->sort('reserva_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mesasReservas as $mesasReserva): ?>
            <tr>
                <td><?= $mesasReserva->has('mesa') ? $this->Html->link($mesasReserva->mesa->id, ['controller' => 'Mesas', 'action' => 'view', $mesasReserva->mesa->id]) : '' ?></td>
                <td><?= $mesasReserva->has('reserva') ? $this->Html->link($mesasReserva->reserva->id, ['controller' => 'Reservas', 'action' => 'view', $mesasReserva->reserva->id]) : '' ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mesasReserva->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mesasReserva->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mesasReserva->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mesasReserva->id), 'class'=>'btn btn-danger btn-xs']) ?>
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