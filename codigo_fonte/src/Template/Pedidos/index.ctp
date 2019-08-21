<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Menu') ?></a></li>
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pedidos index col-md-10 columns content">
    <h3>Pedidos</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Número da Mesa') ?></th>
                <th><?= $this->Paginator->sort('datahora') ?></th>
                <th><?= $this->Paginator->sort('valortotal') ?></th>
                <th><?= $this->Paginator->sort('entrega') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pedidos as $pedido): ?>
            <tr>
                <td><?= $pedido->has('mesa') ? $this->Html->link($pedido->mesa->numero_mesa, ['controller' => 'Mesas', 'action' => 'view', $pedido->mesa->id]) : '' ?></td>
                <td><?= h($pedido->datahora) ?></td>
                <td><?= $this->Number->format($pedido->valortotal) ?></td>
                <td><?= h($pedido->entrega) ?></td>
                <td><?= h($pedido->status) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $pedido->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $pedido->id], ['confirm' => __('Deseja Excluir o pedido da mesa # {0}?', $pedido->mesa_id), 'class'=>'btn btn-danger btn-xs']) ?>
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