<div class="analisedeflorescencia index large-10 medium-9 columns">
    <div class="message">
        Código da armadilha: <?php echo $cod_ovitrampa?> 
    </div>
    
    <?= $this->Form->create($analisedeflorescencium); ?>
    <fieldset>
        <legend><?= __('Add Analisedeflorescencium') ?></legend>
        <?php
            echo $this->Form->input('qnt_larvas');
            echo $this->Form->input('qnt_larvas_ridlve');
            echo $this->Form->input('tecnico');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Html->link(__('Voltar'),
                          ['controller' => 'ovitrampa', 'action' => 'index'],
                          ['class' => 'button']);
                          ?>
    <?= $this->Form->end() ?>
</div>
