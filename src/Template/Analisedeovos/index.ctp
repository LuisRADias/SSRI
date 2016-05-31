<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Analisedeovo'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="analisedeovos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('analisedeovosid') ?></th>
            <th><?= $this->Paginator->sort('qnt_ovos') ?></th>
            <th><?= $this->Paginator->sort('qnt_ovo_positivos') ?></th>
            <th><?= $this->Paginator->sort('tecnico') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($analisedeovos as $analisedeovo): ?>
        <tr>
            <td><?= h($analisedeovo->analisedeovosid) ?></td>
            <td><?= $this->Number->format($analisedeovo->qnt_ovos) ?></td>
            <td><?= $this->Number->format($analisedeovo->qnt_ovo_positivos) ?></td>
            <td><?= h($analisedeovo->tecnico) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $analisedeovo->analisedeovosid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $analisedeovo->analisedeovosid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $analisedeovo->analisedeovosid], ['confirm' => __('Are you sure you want to delete # {0}?', $analisedeovo->analisedeovosid)]) ?>
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
