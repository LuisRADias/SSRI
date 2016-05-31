<div class="analisedeovos column large-10 medium-9 columns">
    <div class="message">
        Código da armadilha: <?php echo $cod_ovitrampa?> 
    </div>

    <?= $this->Form->create($analisedeovo); ?>
    <fieldset>
        <legend><?= __('Edit Analisedeovo') ?></legend>
        <?php
            echo $this->Form->input('qnt_ovos');
            echo $this->Form->input('qnt_ovo_positivos');
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
