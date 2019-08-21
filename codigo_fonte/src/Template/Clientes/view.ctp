<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Menu') ?></a></li>

        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?> </li>

    </ul>
</nav>
<div class="clientes view col-lg-10 col-md-9">
    <h3><?= h($cliente->nome) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>CPF</th>
            <td><?= h($cliente->cpf) ?></td>
        </tr>
        <tr>
            <th>Telefone Residencial</th>
            <td><?= h($cliente->telefone_residencial) ?></td>
        </tr>
        <tr>
            <th>Telefone Celular</th>
            <td><?= h($cliente->telefone_celular) ?></td>
        </tr>
        <tr>
            <th>Status</th>
            <td><?= h($cliente->status) ?></td>
        </tr>
        <tr>
            <th>Dt Nascimento</th>
            <td><?= h($cliente->dt_nascimento) ?></tr>
        </tr>
        <tr>
            <th>Criado em:</th>
            <td><?= h($cliente->created) ?></tr>
        </tr>
        <tr>
            <th>Modificado em:</th>
            <td><?= h($cliente->modified) ?></tr>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Endereços do Cliente') ?></h4>
        <?php if (!empty($cliente->enderecos)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Rua</th>
                <th>Complemento</th>
                <th>Número</th>
                <th class="actions"><?= __('ações') ?></th>
            </tr>
            <?php foreach ($cliente->enderecos as $enderecos): ?>
            <tr>
                <td><?= h($enderecos->nome) ?></td>
                <td><?= h($enderecos->complemento) ?></td>
                <td><?= h($enderecos->numero) ?></td>
                <td class="actions">

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Enderecos', 'action' => 'edit', $enderecos->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Enderecos', 'action' => 'delete', $enderecos->id], ['confirm' => __('Tem certeza que deseja excluir o endereço: # {0}?', $enderecos->nome)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Reservas feitas pelo cliente') ?></h4>
        <?php if (!empty($cliente->reservas)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Lugares</th>
                <th>Data/hora</th>
                <th>Status</th>
                <th class="actions"><?= __('Ações') ?></th>
            </tr>
            <?php foreach ($cliente->reservas as $reservas): ?>
            <tr>
                <td><?= h($reservas->lugares) ?></td>
                <td><?= h($reservas->datahora) ?></td>
                <td><?= h($reservas->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Reservas', 'action' => 'view', $reservas->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Reservas', 'action' => 'edit', $reservas->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Reservas', 'action' => 'delete', $reservas->id], ['confirm' => __('Deseja excluir a reserva? ', $reservas->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
