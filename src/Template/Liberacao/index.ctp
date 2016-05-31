<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Nova Liberação'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="liberacao index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!--<th><?= $this->Paginator->sort('liberacaoid') ?></th>
            <th><?= $this->Paginator->sort('fk_lotetransporte') ?></th>-->
            <th><?= $this->Paginator->sort('hora_inicial') ?></th>
            <th><?= $this->Paginator->sort('hora_termino') ?></th>
            <th><?= $this->Paginator->sort('tempo_de_manipulacao') ?></th>
            <th><?= $this->Paginator->sort('percepcao_da_presenca_de_femeas') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($liberacao as $liberacao): ?>
        <tr>
            <!--<td><?= h($liberacao->liberacaoid) ?></td>
            <td><?= h($liberacao->fk_lotetransporte) ?></td>-->
            <td><?= substr($liberacao->hora_inicial, 0, 8) ?></td>
            <td><?= substr($liberacao->hora_termino, 0, 8) ?></td>
            <td><?= $this->Number->format($liberacao->tempo_de_manipulacao) ?></td>
            <td><?= h($liberacao->percepcao_da_presenca_de_femeas) ?></td>
            <td class="Opções">
                <?= $this->Html->link(__('Nova Separação'), ['controller' => 'Separacaoliberacao','action' => 'list_add', $liberacao->liberacaoid]) ?>
                <br>
                <?= $this->Html->link(__('Nova Subdivisão'), ['controller' => 'Subdivisao','action' => 'list_add', $liberacao->liberacaoid]) ?>
                <br>
                <?= $this->Html->link(__('Visualizar'), ['action' => 'viewAllInfo', $liberacao->liberacaoid]) ?><br>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $liberacao->liberacaoid]) ?> <br>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $liberacao->liberacaoid], ['confirm' => __('Tem certeza de que deseja deletar: # {0}?', $liberacao->liberacaoid)]) ?>
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
