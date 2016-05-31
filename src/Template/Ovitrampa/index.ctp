<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Nova Ovitrampa'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="ovitrampa index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('codigo') ?></th>
            <th><?= $this->Paginator->sort('nome') ?></th>
            <th><?= $this->Paginator->sort('data_instalacao') ?></th>
            <th><?= $this->Paginator->sort('data_coleta') ?></th>
            <th><?= $this->Paginator->sort('coletada') ?></th>
            <th><?= $this->Paginator->sort('montada') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($ovitrampa as $ovitrampa): ?>
        <tr>
            <td><?= h($ovitrampa->codigo) ?></td>
            <td><?= h($ovitrampa->nome) ?></td>
            <td><?= h($ovitrampa->data_instalacao) ?></td>
            <td><?= h($ovitrampa->data_coleta) ?></td>
            <td><?= $ovitrampa->coletada ? 'Sim' : 'Não' ?></td>
            <td><?= $ovitrampa->montada ? 'Sim' : 'Não' ?></td>
            <td class="Opções">
            <?php if(is_null($ovitrampa->fk_analisedeovos)) :?>
                <?= $this->Html->link(__('Nova An. Ovos'), ['controller' => 'Analisedeovos', 'action' => 'add', $ovitrampa->ovitrampaid, $ovitrampa->codigo]) ?> <br>
            <?php endif;?>
            <?php if(is_null($ovitrampa->fk_analisedeflorescencia)) :?>
                <?= $this->Html->link(__('Nova An. Florescência.'), ['controller' => 'Analisedeflorescencia', 'action' => 'add', $ovitrampa->ovitrampaid, $ovitrampa->codigo]) ?> <br>
            <?php endif;?>
            <?php if(is_null($ovitrampa->fk_identificacaodeespecies)) :?>
                <?= $this->Html->link(__('Nova Id. Espécies'), ['controller' => 'Identificacaodeespecies', 'action' => 'add', $ovitrampa->ovitrampaid, $ovitrampa->codigo]) ?> <br>
            <?php endif;?>
                <?= $this->Html->link(__('Visualizar'), ['action' => 'viewAllInfo', $ovitrampa->ovitrampaid]) ?> <br>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $ovitrampa->ovitrampaid]) ?> <br>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $ovitrampa->ovitrampaid], ['confirm' => __('Tem certeza que deseja deletar: # {0}?', $ovitrampa->ovitrampaid)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próxima') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
