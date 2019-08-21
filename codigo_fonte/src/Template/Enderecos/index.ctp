<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Menu') ?></a></li>
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Clientes...'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="enderecos index col-md-10 columns content">
    <h3>Endereços</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('cliente_id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('complemento') ?></th>
                <th><?= $this->Paginator->sort('numero') ?></th>
                <th class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($enderecos as $endereco): ?>
            <tr>
                <td><?= $endereco->has('cliente') ? $this->Html->link($endereco->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $endereco->cliente->id]) : '' ?></td>
                <td><?= h($endereco->nome) ?></td>
                <td><?= h($endereco->complemento) ?></td>
                <td><?= h($endereco->numero) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $endereco->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $endereco->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $endereco->id], ['confirm' => __('Tem certeza que deseja excluir o endereço # {0}?', $endereco->nome), 'class'=>'btn btn-danger btn-xs']) ?>
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

