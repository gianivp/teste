<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Menu') ?></a></li>
        <li><?= $this->Html->link(__('Novo {0}', ['Cliente']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Nova {0}', ['Reserva']), ['controller' => 'Reservas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clientes index col-md-10 columns content">
    <h3>Clientes</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Nome') ?></th>
                <th><?= $this->Paginator->sort('CPF') ?></th>
                <th><?= $this->Paginator->sort('Telefone Residêncial') ?></th>
                <th><?= $this->Paginator->sort('Telefone Celular') ?></th>
                <th><?= $this->Paginator->sort('Data de Nascimento') ?></th>
                <th><?= $this->Paginator->sort('Status') ?></th>
                <th class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= h($cliente->nome) ?></td>
                <td><?= h($cliente->cpf) ?></td>
                <td><?= h($cliente->telefone_residencial) ?></td>
                <td><?= h($cliente->telefone_celular) ?></td>
                <td><?= h($cliente->dt_nascimento) ?></td>
                <td><?= h($cliente->status) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $cliente->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cliente->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $cliente->id], ['confirm' => __('Deseja excluir o cliente {0}?', $cliente->nome), 'class'=>'btn btn-danger btn-xs']) ?>
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