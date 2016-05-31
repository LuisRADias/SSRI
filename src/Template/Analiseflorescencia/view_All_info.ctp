<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo Formulário de Análise de Fluorescência'), ['action' => 'list_add', $controle_id, $separacao_id]) ?></li>
    </ul>
</div>
<div class="analiseflorescencia index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!-- <th><?= $this->Paginator->sort('analiseflorescenciaid', 'Análise de florescência ID') ?></th>
            <th><?= $this->Paginator->sort('fk_controle', 'Controle ID') ?></th> -->
            <th><?= $this->Paginator->sort('data', 'Data') ?></th>
            <th><?= $this->Paginator->sort('qtd_total_larvas', 'Quantidade total de larvas') ?></th>
            <th><?= $this->Paginator->sort('qtd_total_larvas_florescentes', 'Quantidade total de larvas florescentes') ?></th>
            <th><?= $this->Paginator->sort('nome_responsavel', 'Nome do responsável') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($list_analiseflorescencia as $list): ?>
        <tr>
          <!--   <td><?= h($list->analiseflorescenciaid) ?></td>
            <td><?= h($list->fk_controle) ?></td> -->
            <td><?= h($list->data) ?></td>
            <td><?= $this->Number->format($list->qtd_total_larvas) ?></td>
            <td><?= $this->Number->format($list->qtd_total_larvas_florescentes) ?></td>
            <td><?= h($list->nome_responsavel) ?></td>        
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
