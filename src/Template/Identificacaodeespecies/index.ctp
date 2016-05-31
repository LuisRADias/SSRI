<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Identificacaodeespecy'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="identificacaodeespecies index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('identificacaodeespeciesid') ?></th>
            <th><?= $this->Paginator->sort('estagio_especies') ?></th>
            <th><?= $this->Paginator->sort('qnt_ae_aegypti') ?></th>
            <th><?= $this->Paginator->sort('qnt_ae_aegypti_macho') ?></th>
            <th><?= $this->Paginator->sort('qnt_ae_aegypti_femea') ?></th>
            <th><?= $this->Paginator->sort('qnt_a_albopictus') ?></th>
            <th><?= $this->Paginator->sort('qnt_a_albopictus_macho') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($identificacaodeespecies as $identificacaodeespecy): ?>
        <tr>
            <td><?= h($identificacaodeespecy->identificacaodeespeciesid) ?></td>
            <td><?= $this->Number->format($identificacaodeespecy->estagio_especies) ?></td>
            <td><?= $this->Number->format($identificacaodeespecy->qnt_ae_aegypti) ?></td>
            <td><?= $this->Number->format($identificacaodeespecy->qnt_ae_aegypti_macho) ?></td>
            <td><?= $this->Number->format($identificacaodeespecy->qnt_ae_aegypti_femea) ?></td>
            <td><?= $this->Number->format($identificacaodeespecy->qnt_a_albopictus) ?></td>
            <td><?= $this->Number->format($identificacaodeespecy->qnt_a_albopictus_macho) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $identificacaodeespecy->identificacaodeespeciesid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $identificacaodeespecy->identificacaodeespeciesid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $identificacaodeespecy->identificacaodeespeciesid], ['confirm' => __('Are you sure you want to delete # {0}?', $identificacaodeespecy->identificacaodeespeciesid)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
