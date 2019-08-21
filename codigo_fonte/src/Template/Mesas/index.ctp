<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Menu') ?></a></li>
        <li><?= $this->Html->link(__('Nova Mesa'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Ver agregações'), ['controller' => 'Agregacoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova Agregação'), ['controller' => 'Agregacoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Ver {0}', ['Reservas']), ['controller' => 'Reservas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova {0}', ['Reserva']), ['controller' => 'Reservas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mesas index col-md-10 columns content">
    <h3>Mesas</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Número da Mesa') ?></th>
                <th><?= $this->Paginator->sort('Qtde. Cadeiras') ?></th>
                <th><?= $this->Paginator->sort('Status') ?></th>
                <th class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mesas as $mesa): ?>
            <tr>
                <td><?= $this->Number->format($mesa->numero_mesa) ?></td>
                <td><?= $this->Number->format($mesa->cadeiras) ?></td>
                <td><?= h($mesa->status) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $mesa->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $mesa->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $mesa->id], ['confirm' => __('Tem certeza que deseja excluir a mesa # {0}?', $mesa->numero_mesa), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
 <div class="paginator">
        <center>
            <ul class="pagination">
                <?= $this->Paginator->prev('&laquo; ' . __('anterior'), ['escape'=>false]) ?>
                <?= $this->Paginator->numbers(['escape'=>false]) ?>
                <?= $this->Paginator->next(__('próximo') . ' &raquo;', ['escape'=>false]) ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, exibindo {{current}} registro no total de: 
         {{count}} '))?></p>
        </div>
    </center>
</div>
</div>