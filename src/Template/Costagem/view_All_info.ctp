<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo formulário contagem'), ['action' => 'list_add', $separacoes_id]) ?></li>
    </ul>
</div>
<div class="costagem index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
          <!--   <th><?= $this->Paginator->sort('costagemid', 'Contagem ID') ?></th>
            <th><?= $this->Paginator->sort('fk_separacoes', 'Separação ID') ?></th> -->
            <th><?= $this->Paginator->sort('n_amostra', 'Nº da amostra') ?></th>
            <th><?= $this->Paginator->sort('qtd_macho', 'Quantidade de machos') ?></th>
            <th><?= $this->Paginator->sort('qtd_femea', 'Quantidade de fêmeas') ?></th>
            <th><?= $this->Paginator->sort('nome_responsavel', 'Nome do responsável') ?></th>
            <th><?= $this->Paginator->sort('sexo', 'Sexo') ?></th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($list_contagem as $list): ?>
        <tr>
           <!--  <td><?= h($list->costagemid) ?></td>
            <td><?= h($list->fk_separacoes) ?></td> -->
            <td><?= $this->Number->format($list->n_amostra) ?></td>
            <td><?= $this->Number->format($list->qtd_macho) ?></td>
            <td><?= $this->Number->format($list->qtd_femea) ?></td>
            <td><?= h($list->nome_responsavel) ?></td>
            <td><?= h($list->sexo) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>

    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>