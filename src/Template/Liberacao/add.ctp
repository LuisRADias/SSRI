<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="liberacao form large-10 medium-9 columns">
    <?= $this->Form->create($liberacao); ?>
    <fieldset>
        <legend><?= __('Adicionar Liberacao') ?></legend>
        <?php
            $this->Form->templates([
                'dateWidget' => '<div class="input time">{{hour}}{{minute}}{{second}}{{meridian}}</div>'
            ]);
            
            echo '<label> Número do Transporte </label>';
            echo $this->Form->select('fk_lotetransporte', $options);
            //echo $this->Form->input('fk_lotetransporte', ['label' => '']);
            echo '<label> Horário de inicio </label>';
            echo $this->Form->datetime('hora_inicial', array('empty' => false, 'default' => ''));
            echo '<label> Horário de término </label>';
            echo $this->Form->datetime('hora_termino', array('empty' => false, 'default' => ''));
            echo $this->Form->input('tempo_de_manipulacao');
            echo $this->Form->input('percepcao_da_presenca_de_femeas');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
