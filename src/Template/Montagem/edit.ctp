<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $montagem->montagemid],
                ['confirm' => __('Tem certeza que deseja deletar # {0}?', $montagem->montagemid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="montagem form large-10 medium-9 columns">
    <?= $this->Form->create($montagem); ?>
    <fieldset>
        <legend><?= __('Editar Montagem') ?></legend>
        <?php
            echo $this->Form->input('data_montagem', array('empty' => true, 'default' => ''));
            echo $this->Form->input('nome_responsavel');
            echo $this->Form->input('qtd_bandejas_montadas');
            echo $this->Form->input('tipo_bandeja');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
