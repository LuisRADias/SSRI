<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Identificacaodeespecy'), ['action' => 'edit', $identificacaodeespecy->identificacaodeespeciesid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Identificacaodeespecy'), ['action' => 'delete', $identificacaodeespecy->identificacaodeespeciesid], ['confirm' => __('Are you sure you want to delete # {0}?', $identificacaodeespecy->identificacaodeespeciesid)]) ?> </li>
        <li><?= $this->Html->link(__('List Identificacaodeespecies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Identificacaodeespecy'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="identificacaodeespecies view large-10 medium-9 columns">
    <h2><?= h($identificacaodeespecy->identificacaodeespeciesid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Identificacaodeespeciesid') ?></h6>
            <p><?= h($identificacaodeespecy->identificacaodeespeciesid) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Estagio Especies') ?></h6>
            <p><?= $this->Number->format($identificacaodeespecy->estagio_especies) ?></p>
            <h6 class="subheader"><?= __('Qnt Ae Aegypti') ?></h6>
            <p><?= $this->Number->format($identificacaodeespecy->qnt_ae_aegypti) ?></p>
            <h6 class="subheader"><?= __('Qnt Ae Aegypti Macho') ?></h6>
            <p><?= $this->Number->format($identificacaodeespecy->qnt_ae_aegypti_macho) ?></p>
            <h6 class="subheader"><?= __('Qnt Ae Aegypti Femea') ?></h6>
            <p><?= $this->Number->format($identificacaodeespecy->qnt_ae_aegypti_femea) ?></p>
            <h6 class="subheader"><?= __('Qnt A Albopictus') ?></h6>
            <p><?= $this->Number->format($identificacaodeespecy->qnt_a_albopictus) ?></p>
            <h6 class="subheader"><?= __('Qnt A Albopictus Macho') ?></h6>
            <p><?= $this->Number->format($identificacaodeespecy->qnt_a_albopictus_macho) ?></p>
            <h6 class="subheader"><?= __('Qnt A Albopictus Femea') ?></h6>
            <p><?= $this->Number->format($identificacaodeespecy->qnt_a_albopictus_femea) ?></p>
        </div>
    </div>
</div>
