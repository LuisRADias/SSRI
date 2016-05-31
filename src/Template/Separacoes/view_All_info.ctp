<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="separacoes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
           <!--  <th><?= $this->Paginator->sort('separacoesid', 'Separações ID') ?></th>
            <th><?= $this->Paginator->sort('fk_lotebandejas', 'Lote bandejas') ?></th> -->
            <th><?= $this->Paginator->sort('data_separacao', 'Data') ?></th>
            <th><?= $this->Paginator->sort('hora_finalizacao', 'Horário de finalização') ?></th>
            <th><?= $this->Paginator->sort('n_separacao', 'Nº separação') ?></th>
            <th><?= $this->Paginator->sort('qtd_colheres_macho', 'Qtd colheres macho') ?></th>
            <th><?= $this->Paginator->sort('qtd_colheres_femea', 'Qtd colheres femea') ?></th>
            <th><?= $this->Paginator->sort('qtd_bdj_descart_ap_separ', 'Qtd Bandejas descartadas ao Separar') ?></th>
        </tr>
    </thead>
    <tbody>
     <tr>
      <!--   <td><?= h($separacao->separacoesid) ?></td> linkando com costagem
        <td><?= h($separacao->fk_lotebandejas) ?></td> -->
        <td><?= h(strstr($separacao->data_separacao, ',', true)) ?></td>
        <td><?= h($separacao->hora_finalizacao) ?></td>
        <td><?= $this->Number->format($separacao->n_separacao) ?></td>
        <td><?= $this->Number->format($separacao->qtd_colheres_macho) ?></td>
        <td><?= $this->Number->format($separacao->qtd_colheres_femea) ?></td>
        <td><?= $this->Number->format($separacao->qtd_bdj_descart_ap_separ) ?></td>
    </tr>
    </tbody>
    </table>
    
    <h2> Controle </h2>

    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!-- <th><?= $this->Paginator->sort('controleid', 'Controle ID') ?></th>
            <th><?= $this->Paginator->sort('fk_separacoes', 'Separação ID') ?></th> -->
            <th><?= $this->Paginator->sort('qtd_pupa_colher', 'Quantidade de pupas por colher') ?></th>
            <th><?= $this->Paginator->sort('qtd_total_bandejas_separ', 'Quantidade total de bandejas separadas') ?></th>
            <th><?= $this->Paginator->sort('qtd_bandejas_controle', 'Quantidade de bandejas de controle') ?></th>
            <th><?= $this->Paginator->sort('qtd_total_colheres_macho', 'Quantidade total de colheres macho') ?></th>
            <th><?= $this->Paginator->sort('qtd_total_colheres_femea', 'Quantidade total de colheres fêmeas') ?></th>
            <th><?= $this->Paginator->sort('qtd_total_colheres_colonia', 'Quantidade total de colheres da colônia') ?></th>
            <th><?= $this->Paginator->sort('total_colheres_controle', 'Total de colheres de controle') ?></th>
            <th><?= $this->Paginator->sort('nome_responsavel', 'Nome do responsável') ?></th>
            <th><?= $this->Paginator->sort('foto_cefalotorax', 'Foto do cefalotorax') ?></th>
        </tr>
    </thead>
    <caption ALIGN='BOTTOM'> Essa tabela exibe no máximo 3 registros.
        <?= $this->Html->link(__('Visualizar controles'), ['controller' => 'controle', 'action' => 'viewAllInfo', $separacoes_id]) ?>
    </caption>
    <tbody>
    <?php foreach ($list_controle as $list): ?>
        <tr>
<!--             <td><?= h($list->controleid) ?></td>
            <td><?= h($list->fk_separacoes) ?></td> -->
            <td><?= $this->Number->format($list->qtd_pupa_colher) ?></td>
            <td><?= $this->Number->format($list->qtd_total_bandejas_separ) ?></td>
            <td><?= $this->Number->format($list->qtd_bandejas_list) ?></td>
            <td><?= $this->Number->format($list->qtd_total_colheres_macho) ?></td>
            <td><?= $this->Number->format($list->qtd_total_colheres_femea) ?></td>
            <td><?= $this->Number->format($list->qtd_total_colheres_colonia) ?></td>
            <td><?= $this->Number->format($list->total_colheres_controle) ?></td>
            <td><?= h($list->nome_responsavel) ?></td>
            <td><?= h($list->foto_cefalotorax) ?></td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>

    <h2> Contagens </h2>

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
    <caption ALIGN='BOTTOM'> 
        Essa tabela exibe no máximo 3 registros. 
        <?= $this->Html->link(__('Visualizar contagens'), ['controller' => 'costagem', 'action' => 'viewAllInfo', $separacoes_id]) ?> 
    </caption>
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
</div>