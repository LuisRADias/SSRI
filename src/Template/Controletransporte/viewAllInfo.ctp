<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo Formulário Controle Transporte'), ['action' => 'list_add', $lote_transporte_id]) ?></li>
    </ul>
</div>
<div class="controletransporte index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
        <!--     <th><?= $this->Paginator->sort('Transporte ID') ?></th>
            <th><?= $this->Paginator->sort('Lote') ?></th> -->
            <th><?= $this->Paginator->sort('hora_controle', 'Hora Controle') ?></th>
            <th><?= $this->Paginator->sort('situação_dia1', 'Situação do dia 1') ?></th>
            <th><?= $this->Paginator->sort('situação_dia2', 'Situação do dia 2') ?></th>
            <th><?= $this->Paginator->sort('situação_dia3', 'Situação do dia 3') ?></th>
            <th><?= $this->Paginator->sort('comentario', 'Comentário') ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
          <!--   <td><?= h($controletransporte->controletransporteid) ?></td>
            <td><?= h($controletransporte->fk_lotetransporte) ?></td> -->
            <td><?= h($controletransporte->hora_controle) ?></td>
            <td><?= h($controletransporte->situação_dia1) ?></td>
            <td><?= h($controletransporte->situação_dia2) ?></td>
            <td><?= h($controletransporte->situação_dia3) ?></td>
            <td><?= h($controletransporte->comentario) ?></td>
        </tr>
    </tbody>
    </table>
    
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!-- <th><?= $this->Paginator->sort('celulaid') ?></th> -->
            <!-- <th><?= $this->Paginator->sort('fk_controletransporte') ?></th> -->
            <th><?= $this->Paginator->sort('n_celula', 'Nº da célula') ?></th>
            <th><?= $this->Paginator->sort('qtd_pupas_mortas', 'Quantidade de pupas mortas') ?></th>
            <th><?= $this->Paginator->sort('qtd_adultos_emergidos', 'Quantidade de adultos emergidos') ?></th>
            <th class="actions"><?= __('Opções') ?></th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($list_celula as $list): ?>
        <tr>
          <!--   <td><?= h($celula->celulaid) ?></td>
            <td><?= h($celula->fk_controletransporte) ?></td> -->
            <td><?= $this->Number->format($list->n_celula) ?></td>
            <td><?= $this->Number->format($list->qtd_pupas_mortas) ?></td>
            <td><?= $this->Number->format($list->qtd_adultos_emergidos) ?></td>
            <td class="actions">
               <!-- <?= $this->Html->link(__('View'), ['action' => 'view', $celula->celulaid]) ?> 
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $celula->celulaid]) ?> -->
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'deleteNoReturn', $list->celulaid, $list->fk_controletransporte, $lote_id], ['confirm' => __('Tem certeza de que deseja deletar # {0}?', $list->celulaid)]) ?>
            </td>
        </tr>
    <?php endforeach; ?>

    </tbody>
    </table>
</div>