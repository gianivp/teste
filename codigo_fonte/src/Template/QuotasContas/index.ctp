<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Menu') ?></a></li>
        <li><?= $this->Html->link(__('Receber'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="quotasContas index col-md-10 columns content">
    <h3>Receber Conta</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('conta_id') ?></th>
                <th><?= $this->Paginator->sort('valor') ?></th>
                <th class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($quotasContas as $quotasConta): ?>
            <tr>

                <td><?= $quotasConta->has('conta') ? $this->Html->link($quotasConta->conta->id, ['controller' => 'Contas', 'action' => 'view', $quotasConta->conta->id]) : '' ?></td>
                <td><?= $this->Number->format($quotasConta->valor) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $quotasConta->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Form->postLink(__('Estornar'), ['action' => 'delete', $quotasConta->id], ['confirm' => __('Deseja estornar a quota # {0}?', $quotasConta->id), 'class'=>'btn btn-danger btn-xs']) ?>
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