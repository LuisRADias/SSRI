<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo Formulário de Tetraciclina'), ['action' => 'list_add', $controle_id, $separacao_id]) ?></li>
    </ul>
</div>
<div class="tetraciclina index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
 <!--            <th><?= $this->Paginator->sort('tetraciclinaid', 'Tetraciclina ID') ?></th>
            <th><?= $this->Paginator->sort('fk_controle', 'Controle ID') ?></th> -->
            <th><?= $this->Paginator->sort('qtd_larvas', 'Quantidade de larvas') ?></th>
            <th><?= $this->Paginator->sort('qtd_pupas', 'Quantidade de pupas') ?></th>
            <th><?= $this->Paginator->sort('qtd_adultos', 'Quantidade de adultos') ?></th>
            <th><?= $this->Paginator->sort('qtd_adultos_voando', 'Quantidade de adultos voando') ?></th>
            <th><?= $this->Paginator->sort('n_dias', 'Nº de dias') ?></th>
            <th><?= $this->Paginator->sort('nome_responsavel', 'Nome do responsável') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($list_tetraciclina as $list): ?>
        <tr>
          <!--   <td><?= h($list->tetraciclinaid) ?></td>
            <td><?= h($list->fk_controle) ?></td> -->
            <td><?= $this->Number->format($list->qtd_larvas) ?></td>
            <td><?= $this->Number->format($list->qtd_pupas) ?></td>
            <td><?= $this->Number->format($list->qtd_adultos) ?></td>
            <td><?= $this->Number->format($list->qtd_adultos_voando) ?></td>
            <td><?= $this->Number->format($list->n_dias) ?></td>
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
</div>