<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Analisedeovo'), ['action' => 'edit', $analisedeovo->analisedeovosid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Analisedeovo'), ['action' => 'delete', $analisedeovo->analisedeovosid], ['confirm' => __('Are you sure you want to delete # {0}?', $analisedeovo->analisedeovosid)]) ?> </li>
        <li><?= $this->Html->link(__('List Analisedeovos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Analisedeovo'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="analisedeovos view large-10 medium-9 columns">
    <h2><?= h($analisedeovo->analisedeovosid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Analisedeovosid') ?></h6>
            <p><?= h($analisedeovo->analisedeovosid) ?></p>
            <h6 class="subheader"><?= __('Tecnico') ?></h6>
            <p><?= h($analisedeovo->tecnico) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Qnt Ovos') ?></h6>
            <p><?= $this->Number->format($analisedeovo->qnt_ovos) ?></p>
            <h6 class="subheader"><?= __('Qnt Ovo Positivos') ?></h6>
            <p><?= $this->Number->format($analisedeovo->qnt_ovo_positivos) ?></p>
        </div>
    </div>
</div>
