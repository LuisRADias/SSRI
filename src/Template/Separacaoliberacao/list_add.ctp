<div class="separacaoliberacao index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('Liberação') ?></th>
            <th><?= $this->Paginator->sort('nº separação') ?></th>
            <th><?= $this->Paginator->sort('Data drenagem_pré') ?></th>
            <th><?= $this->Paginator->sort('Data controle liberação_pós') ?></th>
            <th class="actions"><?= __('Opções') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($separacoesliberacao as $list): ?>
        <tr>
            <td><?= h($list->fk_liberacao) ?></td>
            <td><?= $this->Number->format($list->n_separacao) ?></td>
            <td><?= h($list->data_drenagem_pre) ?></td>
            <td><?= h($list->data_controle_liberacao_pos) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Novo Controle'), ['controller' => 'controleliberacao', 'action' => 'list_add', $list->separacaoliberacaoid, $list->n_separacao]) ?>
                <br>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $list->separacaoliberacaoid], ['confirm' => __('Tem certeza de que deseja deletar: # {0}?', $list->separacaoliberacaoid)]) ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
    
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
    
    <?= $this->Form->create($separacaoliberacao); ?>
    <fieldset>
        <legend><?= __('Adicionar Separação Liberação') ?></legend>
        <?php
            echo $this->Form->input('n_separacao', ['label' => 'nº sepação']);
            echo $this->Form->input('data_drenagem_pre', array('empty' => true, 'default' => ''), ['label' => 'Data drenagem_pré']);
            echo $this->Form->input('data_controle_liberacao_pos', array('empty' => true, 'default' => ''), ['label' => 'Data controle sepação_pós']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Html->link(
                            'Voltar',
                            ['controller' => 'liberacao'],
                            ['class' => 'button']
                        ); ?>
    <?= $this->Form->end() ?>
</div>
