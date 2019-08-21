<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Mesas Reserva']), ['action' => 'edit', $mesasReserva->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Mesas Reserva']), ['action' => 'delete', $mesasReserva->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mesasReserva->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Mesas Reservas']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Mesas Reserva']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Mesas']), ['controller' => 'Mesas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Mesa']), ['controller' => 'Mesas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Reservas']), ['controller' => 'Reservas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Reserva']), ['controller' => 'Reservas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mesasReservas view col-lg-10 col-md-9">
    <h3><?= h($mesasReserva->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Mesa</th>
            <td><?= $mesasReserva->has('mesa') ? $this->Html->link($mesasReserva->mesa->id, ['controller' => 'Mesas', 'action' => 'view', $mesasReserva->mesa->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Reserva</th>
            <td><?= $mesasReserva->has('reserva') ? $this->Html->link($mesasReserva->reserva->id, ['controller' => 'Reservas', 'action' => 'view', $mesasReserva->reserva->id]) : '' ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($mesasReserva->id) ?></td>
        </tr>
    </table>
</div>
