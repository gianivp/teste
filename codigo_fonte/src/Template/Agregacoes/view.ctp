<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Agregaco']), ['action' => 'edit', $agregaco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Agregaco']), ['action' => 'delete', $agregaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agregaco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Agregacoes']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Agregaco']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Mesas']), ['controller' => 'Mesas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Mesa']), ['controller' => 'Mesas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="agregacoes view col-lg-10 col-md-9">
    <h3><?= h($agregaco->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Mesa</th>
            <td><?= $agregaco->has('mesa') ? $this->Html->link($agregaco->mesa->id, ['controller' => 'Mesas', 'action' => 'view', $agregaco->mesa->id]) : '' ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($agregaco->id) ?></td>
        </tr>
        <tr>
            <th>'Mesa Id A</th>
            <td><?= $this->Number->format($agregaco->mesa_id_a) ?></td>
        </tr>
    </table>
</div>
