<div class="identificacaodeespecies index large-10 medium-9 columns">
    <div class="message">
        Código da armadilha: <?php echo $cod_ovitrampa?> 
    </div>
    
    <?= $this->Form->create($identificacaodeespecy); ?>
    <fieldset>
        <legend><?= __('Edit Identificacaodeespecy') ?></legend>
        <?php
            echo $this->Form->input('estagio_especies');
            //echo $this->Form->input('qnt_ae_aegypti');
            echo $this->Form->input('qnt_ae_aegypti_macho');
            echo $this->Form->input('qnt_ae_aegypti_femea');
            //echo $this->Form->input('qnt_a_albopictus');
            echo $this->Form->input('qnt_a_albopictus_macho');
            echo $this->Form->input('qnt_a_albopictus_femea');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Html->link(__('Voltar'),
                          ['controller' => 'ovitrampa', 'action' => 'index'],
                          ['class' => 'button']);
                          ?>
    <?= $this->Form->end() ?>
</div>
