<div class="subdivisao index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('data_liberacao') ?></th>
            <th><?= $this->Paginator->sort('nome') ?></th>
            <th><?= $this->Paginator->sort('supervisor') ?></th>
            <th><?= $this->Paginator->sort('qtd_alvo_rd11') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($subdivisoes as $list): ?>
        <tr>
            <td><?= h($list->data_liberacao) ?></td>
            <td><?= h($list->nome) ?></td>
            <td><?= h($list->supervisor) ?></td>
            <td><?= $this->Number->format($list->qtd_alvo_rd11) ?></td>
            <td class="actions">
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $list->subdivisaoid], ['confirm' => __('Are you sure you want to delete # {0}?', $list->subdivisaoid)]) ?>
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
    
    <?= $this->Form->create($subdivisao); ?>
    <fieldset>
        <legend><?= __('Adicionar Subdivisao') ?></legend>
        <?php
            echo '<label> Bairro </label>';
            echo $this->Form->select('fk_bairro', $options);
            echo $this->Form->input('data_liberacao', array('empty' => true, 'default' => ''));
            echo $this->Form->input('nome');
            echo $this->Form->input('supervisor');
            echo $this->Form->input('qtd_alvo_rd11');
            echo $this->Form->input('qtd_rd11_real');
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
