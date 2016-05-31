<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $producaoovo->producaoovosid],
                ['confirm' => __('Tem certeza que quer deletar este registro?', $producaoovo->producaoovosid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Producao de Ovos'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="producaoovos form large-10 medium-9 columns">
    <?= $this->Form->create($producaoovo); ?>
    <fieldset>
        <legend><?= __('Editar Producao de Ovo') ?></legend>
        <?php
            //echo $this->Form->input('fk_lotegaiolas');
            echo $this->Form->input('qtd_gaiolas');
            echo $this->Form->input('data_alimentacao_sangue', array('empty' => true, 'default' => ''));
            echo $this->Form->input('data_coleta', array('empty' => true, 'default' => ''));
            echo $this->Form->input('peso_ovos');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
