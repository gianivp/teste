<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Menu') ?></a></li>
        <li><?= $this->Html->link(__('Editar {0}', ['Cardapio']), ['action' => 'edit', $cardapio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir {0}', ['Cardapio']), ['action' => 'delete', $cardapio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cardapio->id)]) ?> </li>
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?> </li>

    </ul>
</nav>
<div class="cardapios view col-lg-10 col-md-9">
    <h3><?= h($cardapio->descricao) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Codigo</th>
            <td><?= h($cardapio->codigo) ?></td>
        </tr>
        <tr>
            <th>Status</th>
            <td><?= h($cardapio->status) ?></td>
        </tr>
        <tr>
            <th>Preço</th>
            <td><?= $this->Number->format($cardapio->preco) ?></td>
        </tr>

    </table>
    
</div>
