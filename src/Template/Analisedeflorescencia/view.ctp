<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Analisedeflorescencium'), ['action' => 'edit', $analisedeflorescencium->analisedeflorescenciaid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Analisedeflorescencium'), ['action' => 'delete', $analisedeflorescencium->analisedeflorescenciaid], ['confirm' => __('Are you sure you want to delete # {0}?', $analisedeflorescencium->analisedeflorescenciaid)]) ?> </li>
        <li><?= $this->Html->link(__('List Analisedeflorescencia'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Analisedeflorescencium'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="analisedeflorescencia view large-10 medium-9 columns">
    <h2><?= h($analisedeflorescencium->analisedeflorescenciaid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Analisedeflorescenciaid') ?></h6>
            <p><?= h($analisedeflorescencium->analisedeflorescenciaid) ?></p>
            <h6 class="subheader"><?= __('Tecnico') ?></h6>
            <p><?= h($analisedeflorescencium->tecnico) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Qnt Larvas') ?></h6>
            <p><?= $this->Number->format($analisedeflorescencium->qnt_larvas) ?></p>
            <h6 class="subheader"><?= __('Qnt Larvas Ridlve') ?></h6>
            <p><?= $this->Number->format($analisedeflorescencium->qnt_larvas_ridlve) ?></p>
        </div>
    </div>
</div>
