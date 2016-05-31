<div class="controleliberacao index large-10 medium-9 columns">
    <div class="message">
        Número da Separação: <?php echo $n_liberacao ?> 
    </div>
    
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('n_rd11_controle') ?></th>
            <th><?= $this->Paginator->sort('pupas vivas_pré') ?></th>
            <th><?= $this->Paginator->sort('pupas mortas_pré') ?></th>
            <th><?= $this->Paginator->sort('adultos vivos_pré') ?></th>
            <th><?= $this->Paginator->sort('adultos mortos_pré') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($controlesliberacao as $list): ?>
        <tr>
            <td><?= $this->Number->format($list->n_rd11_controle) ?></td>
            <td><?= $this->Number->format($list->qtd_pupas_vivas_pre) ?></td>
            <td><?= $this->Number->format($list->qtd_pupas_mortas_pre) ?></td>
            <td><?= $this->Number->format($list->qtd_adultos_vivos_pre) ?></td>
            <td><?= $this->Number->format($list->qtd_adultos_mortos_pre) ?></td>
            <td class="actions">
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $list->controleliberacaoid], ['confirm' => __('Are you sure you want to delete # {0}?', $list->controleliberacaoid)]) ?>
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

    <?= $this->Form->create($controleliberacao); ?>
    <fieldset>
        <legend><?= __('Adicionar Controle Liberação') ?></legend>
        <?php
            echo $this->Form->input('n_rd11_controle', ['label' => 'Número rd11 controle']);
            echo $this->Form->input('qtd_pupas_vivas_pre', ['label' => 'Pupas vivas_pré']);
            echo $this->Form->input('qtd_pupas_mortas_pre', ['label' => 'Pupas mortas_pré']);
            echo $this->Form->input('qtd_adultos_vivos_pre', ['label' => 'Adultos vivos_pré']);
            echo $this->Form->input('qtd_adultos_mortos_pre', ['label' => 'Adultos mortos_pré']);
            echo $this->Form->input('qtd_pupas_vivas_pos', ['label' => 'Pupas vivas_pós']);
            echo $this->Form->input('qtd_pupas_mortas_pos', ['label' => 'Pupas mortas_pós']);
            echo $this->Form->input('qtd_adultos_vivos_pos', ['label' => 'Adultos vivos_pós']);
            echo $this->Form->input('qtd_adultos_mortos_pos', ['label' => 'Adultos mortos_pós']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Html->link(__('Voltar'),
                          ['controller' => 'liberacao', 'action' => 'index'],
                          ['class' => 'button']);
                          ?>
    <?= $this->Form->end() ?>
</div>
