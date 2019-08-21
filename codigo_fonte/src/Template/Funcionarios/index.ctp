<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Menu') ?></a></li>
        <li><?= $this->Html->link(__('Novo {0}', ['Funcionario']), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="funcionarios index col-md-10 columns content">
    <h3>Funcionarios</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Nome') ?></th>
                <th><?= $this->Paginator->sort('CPF') ?></th>
                <th><?= $this->Paginator->sort('Telefone Residêncial') ?></th>
                <th><?= $this->Paginator->sort('Telefone Celular') ?></th>
                <th><?= $this->Paginator->sort('Dt. Nascimento') ?></th>
                <th><?= $this->Paginator->sort('Status') ?></th>
                <th class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($funcionarios as $funcionario): ?>
            <tr>
                <td><?= h($funcionario->nome) ?></td>
                <td><?= h($funcionario->cpf) ?></td>
                <td><?= h($funcionario->telefone_residencial) ?></td>
                <td><?= h($funcionario->telefone_celular) ?></td>
                <td><?= h($funcionario->dt_nascimento) ?></td>
                <td><?= h($funcionario->status) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $funcionario->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $funcionario->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $funcionario->id], ['confirm' => __('Tem certeza que deseja excluir o funcionário # {0}?', $funcionario->nome), 'class'=>'btn btn-danger btn-xs']) ?>
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