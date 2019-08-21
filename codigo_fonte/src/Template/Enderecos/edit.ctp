<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Menu') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Excluir'),
                ['action' => 'delete', $endereco->id],
                ['confirm' => __('Tem certeza que deseja excluir o endereço # {0}?', $endereco->nome)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="enderecos form col-md-10 columns content">
    <?= $this->Form->create($endereco) ?>
    <fieldset>
        <legend><?= 'Editar Endereço' ?></legend>
        <?php
            echo $this->Form->input('cliente_id', ['options' => $clientes]);
            echo $this->Form->input('nome');
            echo $this->Form->input('complemento');
            echo $this->Form->input('numero');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
