<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $ovitrampa->ovitrampaid],
                ['confirm' => __('Tem certeza que deseja deletar: # {0}?', $ovitrampa->ovitrampaid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="ovitrampa form large-10 medium-9 columns">
    <?= $this->Form->create($ovitrampa); ?>
    <fieldset>
        <legend><?= __('Edit Ovitrampa') ?></legend>
        <?php
            echo $this->Form->input('codigo');
            echo $this->Form->input('nome');
            echo $this->Form->input('data_instalacao', array('empty' => true, 'default' => ''));
            echo $this->Form->input('data_coleta', array('empty' => true, 'default' => ''));
            echo $this->Form->input('ajuste_data_coleta');
            echo $this->Form->input('coletada');
            echo $this->Form->input('montada');
            echo $this->Form->input('agente');
            echo $this->Form->input('notas');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
