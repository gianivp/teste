<div class="pedidosCardapios index col-md-10 columns content">
    <h3>Preparos de Pedido</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Item') ?></th>
                <th><?= $this->Paginator->sort('Número do Pedido') ?></th>
                <th><?= $this->Paginator->sort('Status') ?></th>
                <th class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pedidosCardapios as $pedidosCardapio): ?>
            <tr>
                <td><?= $pedidosCardapio->has('pedido') ? $this->Html->link($pedidosCardapio->pedido->id, ['controller' => 'Pedidos', 'action' => 'view', $pedidosCardapio->pedido->id]) : '' ?></td>
                <td><?= $pedidosCardapio->has('cardapio') ? $this->Html->link($pedidosCardapio->cardapio->descricao, ['controller' => 'Cardapios', 'action' => 'view', $pedidosCardapio->cardapio->id]) : '' ?></td>

                <td><?= h($pedidosCardapio->status) ?></td>
                 <td class="actions" style="white-space:nowrap">
                <?= $this->Html->link(__('Iniciar Preparo'), ['action' => 'prepara', $pedidosCardapio->id], ['class'=>'btn btn-default btn-xs']) ?>
                <?= $this->Html->link(__('Finalizar'), ['action' => 'finaliza', $pedidosCardapio->id], ['class'=>'btn btn-primary btn-xs']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  