<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Editar {0}', ['Funcionario']), ['action' => 'edit', $funcionario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir {0}', ['Funcionario']), ['action' => 'delete', $funcionario->id], ['confirm' => __('Tem certeza que deseja exlcuir # {0}?', $funcionario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Funcionarios']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Funcionario']), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="funcionarios view col-lg-10 col-md-9">
    <h3><?= h($funcionario->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Nome</th>
            <td><?= h($funcionario->nome) ?></td>
        </tr>
        <tr>
            <th>Cpf</th>
            <td><?= h($funcionario->cpf) ?></td>
        </tr>
        <tr>
            <th>Telefone Residencial</th>
            <td><?= h($funcionario->telefone_residencial) ?></td>
        </tr>
        <tr>
            <th>Telefone Celular</th>
            <td><?= h($funcionario->telefone_celular) ?></td>
        </tr>
        <tr>
            <th>Status</th>
            <td><?= h($funcionario->status) ?></td>
        </tr>
        <tr>
            <th>Pis</th>
            <td><?= h($funcionario->pis) ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= h($funcionario->email) ?></td>
        </tr>
        <tr>
            <th>Senha</th>
            <td><?= h($funcionario->password) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($funcionario->id) ?></td>
        </tr>
        <tr>
            <th>'Salario</th>
            <td><?= $this->Number->format($funcionario->salario) ?></td>
        </tr>
        <tr>
            <th>'Comissao</th>
            <td><?= $this->Number->format($funcionario->comissao) ?></td>
        </tr>
        <tr>
            <th>Dt Nascimento</th>
            <td><?= h($funcionario->dt_nascimento) ?></tr>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($funcionario->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($funcionario->modified) ?></tr>
        </tr>
        <tr>
            <th>Dt Admissao</th>
            <td><?= h($funcionario->dt_admissao) ?></tr>
        </tr>
        <tr>
            <th>Dt Demissao</th>
            <td><?= h($funcionario->dt_demissao) ?></tr>
        </tr>
    </table>
</div>
