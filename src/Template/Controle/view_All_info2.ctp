<div class="actions columns large-2 medium-3">
    <h3><?= __('Voltar para') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo formulário controle'), ['action' => 'list_add', $separacoes_id]) ?></li>
    </ul>
</div>
<div class="controle index large-10 medium-9 columns">
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
    <tbody>
        <tr>
<!--             <td><?= h($controle->controleid) ?></td>
            <td><?= h($controle->fk_separacoes) ?></td> -->
            <td><?= $this->Number->format($controle->qtd_pupa_colher) ?></td>
            <td><?= $this->Number->format($controle->qtd_total_bandejas_separ) ?></td>
            <td><?= $this->Number->format($controle->qtd_bandejas_list) ?></td>
            <td><?= $this->Number->format($controle->qtd_total_colheres_macho) ?></td>
            <td><?= $this->Number->format($controle->qtd_total_colheres_femea) ?></td>
            <td><?= $this->Number->format($controle->qtd_total_colheres_colonia) ?></td>
            <td><?= $this->Number->format($controle->total_colheres_controle) ?></td>
            <td><?= h($controle->nome_responsavel) ?></td>
            <td><?= h($controle->foto_cefalotorax) ?></td>
            
        </tr>
    </tbody>
    </table>
    <h2> Tetraciclina </h2>
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
    <caption ALIGN='BOTTOM'>
        Essa tabela exibe no máximo 3 registros.
        <?= $this->Html->link(__('Visualizar'), ['controller' => 'tetraciclina', 'action' => 'viewAllInfo', $controle_id, $separacoes_id]) ?>
    </caption>
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

    <h2> Tamanho cefalotorax </h2>

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
    <caption ALIGN='BOTTOM'>
        Essa tabela exibe no máximo 3 registros.
        <?= $this->Html->link(__('Visualizar'), ['controller' => 'tamanhocefalotorax', 'action' => 'viewAllInfo', $controle_id, $separacoes_id]) ?>
    </caption>
    <tbody>
    <?php foreach ($list_tam_celafotorax as $list): ?>
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

    <h2> Análise de Fluorescência </h2>

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
    <caption ALIGN='BOTTOM'>
        Essa tabela exibe no máximo 3 registros.
        <?= $this->Html->link(__('Visualizar'), ['controller' => 'analiseflorescencia', 'action' => 'viewAllInfo', $controle_id, $separacoes_id]) ?>
    </caption>
    <tbody>
    <?php foreach ($list_analise_florescencia as $list): ?>
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

    <h2> Repasse da Amostra</h2>

    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
         <!--    <th><?= $this->Paginator->sort('amostrarepasseid', 'Repasse da amostra ID') ?></th>
            <th><?= $this->Paginator->sort('fk_controle', 'Controle ID') ?></th> -->
            <th><?= $this->Paginator->sort('n_amostra', 'Nº da amostra') ?></th>
            <th><?= $this->Paginator->sort('qtd_machos', 'Quantidade de machos') ?></th>
            <th><?= $this->Paginator->sort('qtd_femeas', 'Quantidade de fêmeas') ?></th>
            <th><?= $this->Paginator->sort('nome_responsavel', 'Nome do responsável') ?></th>
        </tr>
    </thead>
    <caption ALIGN='BOTTOM'>
        Essa tabela exibe no máximo 3 registros.
        <?= $this->Html->link(__('Visualizar'), ['controller' => 'amostrarepasse', 'action' => 'viewAllInfo', $controle_id, $separacoes_id]) ?>
    </caption>
    <tbody>
    <?php foreach ($list_amostra_repasse as $list): ?>
        <tr>
         <!--    <td><?= h($list->amostrarepasseid) ?></td>
            <td><?= h($list->fk_controle) ?></td> -->
            <td><?= $this->Number->format($list->n_amostra) ?></td>
            <td><?= $this->Number->format($list->qtd_machos) ?></td>
            <td><?= $this->Number->format($list->qtd_femeas) ?></td>
            <td><?= h($list->nome_responsavel) ?></td>
            
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
</div>
