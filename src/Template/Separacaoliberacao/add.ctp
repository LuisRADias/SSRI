<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="separacaoliberacao form large-10 medium-9 columns">
    <?= $this->Form->create($separacaoliberacao); ?>
    <fieldset>
        <legend><?= __('Adicionar Separação liberação') ?></legend>
        <?php
            echo $this->Form->input('fk_liberacao', ['label' => 'Liberação']);
            echo $this->Form->input('n_separacao', ['label' => 'nº sepação']);
            echo $this->Form->input('data_drenagem_pre', array('empty' => true, 'default' => ''), ['label' => 'Data drenagem_pré']);
            echo $this->Form->input('data_controle_liberacao_pos', array('empty' => true, 'default' => ''), ['label' => 'Data controle sepação_pós']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
