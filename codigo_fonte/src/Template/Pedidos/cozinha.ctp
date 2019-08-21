    <h3>Pedidos</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Número da Mesa') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>


            <?php foreach ($resultado as $res): ?>
            <tr>
                <td><?= ($res->created) ?></td>
            </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
