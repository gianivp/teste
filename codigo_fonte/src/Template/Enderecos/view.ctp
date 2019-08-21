<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>

        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="enderecos view col-lg-10 col-md-9">
    <h3><?= h($endereco->nome) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Cliente</th>
            <td><?= $endereco->has('cliente') ? $this->Html->link($endereco->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $endereco->cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Complemento</th>
            <td><?= h($endereco->complemento) ?></td>
        </tr>
        <tr>
            <th>Numero</th>
            <td><?= h($endereco->numero) ?></td>
        </tr>
    </table>
</div>
