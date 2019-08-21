<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Menu') ?></a></li>
    
    </ul>
</nav>
<div class="contas index col-md-10 columns content">
    <h3>Contas</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Número da Mesa') ?></th>
                <th><?= $this->Paginator->sort('Valor') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contas as $conta): ?>
            <tr>
                <td><?= $conta->has('mesa') ? $this->Html->link($conta->mesa->numero_mesa, ['controller' => 'Mesas', 'action' => 'view', $conta->mesa->id]) : '' ?></td>
                <td><?= $this->Number->format($conta->valor) ?></td>
                <td><?= h($conta->status) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $conta->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Receber Conta'), ['controller' => 'QuotasContas', 'action' => 'add', $conta->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $conta->id], ['confirm' => __('Tem certeza que deseja excluir a conta # {0}?', $conta->id), 'class'=>'btn btn-danger btn-xs']) ?>

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