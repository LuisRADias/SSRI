<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Voltar'), ['controller' => 'Lotegaiolas', 'action' => 'view_all_info', $fk_lotegaiolas,$codigo_lote]) ?> </li>
    </ul>
</div>
<div class="bequer index large-10 medium-9 columns">
 <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!--<th><?= $this->Paginator->sort('mortalidadespupasid') ?></th>
            <th><?= $this->Paginator->sort('fk_lotegaiolas') ?></th>-->
            <th><?= $this->Paginator->sort('data_observacao') ?></th>
            <th><?= $this->Paginator->sort('pupas_g1') ?></th>
            <th><?= $this->Paginator->sort('pupas_g2') ?></th>
            <th><?= $this->Paginator->sort('pupas_g3') ?></th>
            <th class="actions"><?= __('Ações') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($mortalidadespupas as $mortalidadespupa): ?>
        <tr>
            <!--<td><?= h($mortalidadespupa->mortalidadespupasid) ?></td>
            <td><?= h($mortalidadespupa->fk_lotegaiolas) ?></td>-->
            <td><?= h($mortalidadespupa->data_observacao) ?></td>
            <td><?= $this->Number->format($mortalidadespupa->pupas_g1) ?></td>
            <td><?= $this->Number->format($mortalidadespupa->pupas_g2) ?></td>
            <td><?= $this->Number->format($mortalidadespupa->pupas_g3) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $mortalidadespupa->mortalidadespupasid]) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $mortalidadespupa->mortalidadespupasid]) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $mortalidadespupa->mortalidadespupasid], ['confirm' => __('Tem certeza que quer deletar este registro?', $mortalidadespupa->mortalidadespupasid)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
