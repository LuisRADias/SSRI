<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Ovitrampa'), ['action' => 'edit', $ovitrampa->ovitrampaid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ovitrampa'), ['action' => 'delete', $ovitrampa->ovitrampaid], ['confirm' => __('Are you sure you want to delete # {0}?', $ovitrampa->ovitrampaid)]) ?> </li>
        <li><?= $this->Html->link(__('List Ovitrampa'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ovitrampa'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="ovitrampa view large-10 medium-9 columns">
    <h2><?= h($ovitrampa->ovitrampaid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Ovitrampaid') ?></h6>
            <p><?= h($ovitrampa->ovitrampaid) ?></p>
            <h6 class="subheader"><?= __('Fk Analisedeovos') ?></h6>
            <p><?= h($ovitrampa->fk_analisedeovos) ?></p>
            <h6 class="subheader"><?= __('Fk Analisedeflorescencia') ?></h6>
            <p><?= h($ovitrampa->fk_analisedeflorescencia) ?></p>
            <h6 class="subheader"><?= __('Fk Identificacaodeespecies') ?></h6>
            <p><?= h($ovitrampa->fk_identificacaodeespecies) ?></p>
            <h6 class="subheader"><?= __('Codigo') ?></h6>
            <p><?= h($ovitrampa->codigo) ?></p>
            <!--<h6 class="subheader"><?= __('Nome') ?></h6>
            <p><?= h($ovitrampa->nome) ?></p>-->
            <h6 class="subheader"><?= __('Agente') ?></h6>
            <p><?= h($ovitrampa->agente) ?></p>
            <h6 class="subheader"><?= __('Notas') ?></h6>
            <p><?= h($ovitrampa->notas) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Ajuste Data Coleta') ?></h6>
            <p><?= $this->Number->format($ovitrampa->ajuste_data_coleta) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Data Instalacao') ?></h6>
            <p><?= h($ovitrampa->data_instalacao) ?></p>
            <h6 class="subheader"><?= __('Data Coleta') ?></h6>
            <p><?= h($ovitrampa->data_coleta) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Coletada') ?></h6>
            <p><?= $ovitrampa->coletada ? __('Yes') : __('No'); ?></p>
            <h6 class="subheader"><?= __('Montada') ?></h6>
            <p><?= $ovitrampa->montada ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
