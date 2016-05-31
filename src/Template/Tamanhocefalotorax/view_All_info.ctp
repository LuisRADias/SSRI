<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo Formulário de Tamanho do Cefalotorax'), ['action' => 'list_add', $controle_id, $separacao_id]) ?></li>
    </ul>
</div>
<div class="tamanhocefalotorax index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
           <!--  <th><?= $this->Paginator->sort('tamanhocefalotoraxid', 'Tamanho do cefalotoráx ID') ?></th>
            <th><?= $this->Paginator->sort('fk_controle', 'Controle ID') ?></th> -->
            <th><?= $this->Paginator->sort('n_replicata', 'Nº da replicata') ?></th>
            <th><?= $this->Paginator->sort('macho') ?></th>
            <th><?= $this->Paginator->sort('femea') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($list_tam_cefalotorax as $list): ?>
        <tr>
         <!--    <td><?= h($list->tamanhocefalotoraxid) ?></td>
            <td><?= h($list->fk_controle) ?></td> -->
            <td><?= $this->Number->format($list->n_replicata) ?></td>
            <td><?= $this->Number->format($list->macho) ?></td>
            <td><?= $this->Number->format($list->femea) ?></td>
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