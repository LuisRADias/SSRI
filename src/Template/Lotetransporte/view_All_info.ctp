<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="controletransporte index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('n_transporte','nº transporte') ?></th>
            <th><?= $this->Paginator->sort('qtd_colheres_celula','qtd colheres célula') ?></th>
            <th><?= $this->Paginator->sort('cor_lote','Cor lote') ?></th>
            <th><?= $this->Paginator->sort('qtd_c25_completas_envio','qtd c25 completas envio') ?></th>
            <th><?= $this->Paginator->sort('qtd_c25_incompletas_envio','qtd c25 incompletas envio') ?></th>
        </tr>
    </thead>
    <tbody>
     <tr>
            <td><?= $this->Number->format($lotetransporte->n_transporte) ?></td>
            <td><?= $this->Number->format($lotetransporte->qtd_colheres_celula) ?></td>
            <td><?= h($lotetransporte->cor_lote) ?></td>
            <td><?= $this->Number->format($lotetransporte->qtd_c25_completas_envio) ?></td>
            <td><?= $this->Number->format($lotetransporte->qtd_c25_incompletas_envio) ?></td>
        </tr>
    </tbody>
    </table>
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('hora_entrada_bod', 'hora entrada bod') ?></th>
            <th><?= $this->Paginator->sort('hora_saida_upat', 'hora saída upat') ?></th> 
            <th><?= $this->Paginator->sort('hora_saida_moscamed','hora saida moscamed') ?></th>
            <th><?= $this->Paginator->sort('nome_motorista','Nome do motorista') ?></th>
            <th><?= $this->Paginator->sort('nome_supervisor_envio','Nome do supervisor do envio') ?></th>
            <th><?= $this->Paginator->sort('data_recebimento','Data Recebimento') ?></th>
            <th><?= $this->Paginator->sort('hora_chegada_lemi','horário de chegada lemi') ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= h($lotetransporte->hora_entrada_bod) ?></td>
            <td><?= h($lotetransporte->hora_saida_upat) ?></td>
            <td><?= h($lotetransporte->hora_saida_moscamed) ?></td>
            <td><?= h($lotetransporte->nome_motorista) ?></td>
            <td><?= h($lotetransporte->nome_supervisor_envio) ?></td>
            <td><?= substr($lotetransporte->data_recebimento,0,8) ?></td>
            <td><?= h($lotetransporte->hora_chegada_lemi) ?></td>
        </tr>
    </tbody>
    </table>
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('qtd_c25_completas_recebimento', 'qtd c25 completas recebidas') ?></th>
            <th><?= $this->Paginator->sort('qtd_celulas_incompletas_recebimento', 'qtd células incompletas recebidas') ?></th> 
            <th><?= $this->Paginator->sort('nome_encarregado_montagem_rd11','Nome do encarredado Montagem rd11') ?></th>
            <th><?= $this->Paginator->sort('hora_inicio_montagem_rd11','Hora de inicio da montagem rd11') ?></th>
            <th><?= $this->Paginator->sort('hora_termino_montagem_rd11','Hora de término da montagem rd11') ?></th>
            <th><?= $this->Paginator->sort('qnt_celula_rd11','qnt célula rd11') ?></th>
            <th><?= $this->Paginator->sort('qnt_rd11_montadas','qnt rd11 montadas') ?></th>
            <th><?= $this->Paginator->sort('qnt_total_machos_enviados','qnt total de machos enviados') ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= h($lotetransporte->qtd_c25_completas_recebimento) ?></td>
            <td><?= h($lotetransporte->qtd_celulas_incompletas_recebimento) ?></td>
            <td><?= h($lotetransporte->nome_encarregado_montagem_rd11) ?></td>
            <td><?= h($lotetransporte->hora_inicio_montagem_rd11) ?></td>
            <td><?= h($lotetransporte->hora_termino_montagem_rd11) ?></td>
            <td><?= h($lotetransporte->qnt_celula_rd11) ?></td>
            <td><?= h($lotetransporte->qnt_rd11_montadas) ?></td>
            <td><?= h($lotetransporte->qnt_total_machos_enviados) ?></td>
        </tr>
    </tbody>
    </table>
    <h2> Controle Transporte </h2>
    <table cellpadding="0" cellspacing="0">
    <caption ALIGN='BOTTOM'> A quantidade de registros mostrados nessa tabela é limitada. <?=$this->Html->link(__('Visualizar controles de transporte'), ['controller' => 'controletransporte', 'action' => 'viewAllInfo', $lote_transporte_id]) ?>
    <caption>
    <thead>
        <tr>
         <!--    <th><?= $this->Paginator->sort('controletransporteid','Transporte ID') ?></th>
            <th><?= $this->Paginator->sort('fk_lotetransporte','Lote') ?></th> -->
            <th><?= $this->Paginator->sort('situação_dia1','Situação Dia1') ?></th>
            <th><?= $this->Paginator->sort('situação_dia2','Situação Dia2') ?></th>
            <th><?= $this->Paginator->sort('situação_dia3','Situação Dia3') ?></th>
            <th><?= $this->Paginator->sort('comentario', 'Comentário') ?></th>
            <!-- <th class="actions"><?= __('Opções') ?></th> -->
        </tr>
    </thead>
    <tbody>
    <?php foreach ($list_controle_transporte as $controletransporte): ?>
        <tr>
           <!--  <td><?= h($controletransporte->controletransporteid) ?></td>
            <td><?= h($controletransporte->fk_lotetransporte) ?></td> -->
            <td><?= h($controletransporte->situação_dia1) ?></td>
            <td><?= h($controletransporte->situação_dia2) ?></td>
            <td><?= h($controletransporte->situação_dia3) ?></td>
            <td><?= h($controletransporte->comentario) ?></td>
           <!--  <td class="actions">
                <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $controletransporte->controletransporteid]) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $controletransporte->controletransporteid]) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $controletransporte->controletransporteid], ['confirm' => __('Are you sure you want to delete # {0}?', $controletransporte->controletransporteid)]) ?>
            </td>  -->
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>

    <h2> Liberação </h2>
    <table cellpadding="0" cellspacing="0">
    <!-- <caption ALIGN = 'BOTTOM'> A quantidade de registros mostrados nessa tabela é limitada. <?= $this->Html->link(__('Visualizar'), ['action' => 'viewAll', ]) ?> </caption>  -->
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('liberacaoid', 'Liberação ID') ?></th>
            <th><?= $this->Paginator->sort('fk_lotetransporte', 'Lote ID') ?></th>
            <th><?= $this->Paginator->sort('tempo_de_manipulacao', 'Tempo de manipulação') ?></th>
            <th><?= $this->Paginator->sort('percepcao_da_presenca_de_femeas', 'Percepção da presença de fêmeas') ?></th>
            <!-- <th class="actions"><?= __('Opções') ?></th> -->
        </tr>
    </thead>
    <tbody>
    <?php foreach ($list_liberacao as $liberacao): ?>
        <tr>
         <!--    <td><?= h($liberacao->liberacaoid) ?></td>
            <td><?= h($liberacao->fk_lotetransporte) ?></td> -->
            <td><?= $this->Number->format($liberacao->tempo_de_manipulacao) ?></td>
            <td><?= h($liberacao->percepcao_da_presenca_de_femeas) ?></td>
            <td class="actions">
                <!-- <?= $this->Html->link(__('Visualizar'), ['action' => 'viewAllInfo', $liberacao->liberacaoid]) ?> -->
              <!--   <?= $this->Html->link(__('Edit'), ['action' => 'edit', $liberacao->liberacaoid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $liberacao->liberacaoid], ['confirm' => __('Are you sure you want to delete # {0}?', $liberacao->liberacaoid)]) ?> -->
            </td> 
        </tr>

    <?php endforeach; ?>
    </tbody>

    </table>

    <h2> Temperatura transporte </h2>
    <table cellpadding="0" cellspacing="0">
    <caption ALIGN='BOTTOM'> 
        A quantidade de registros mostrados nessa tabela é limitada. <?=$this->Html->link(__('Visualizar temperaturatransporte de transporte'), ['controller' => 'temperaturatransporte', 'action' => 'viewAllInfoTransporte', $lote_transporte_id]) ?> 
    </caption>

    <thead>
        <tr>
           <!--  <th><?= $this->Paginator->sort('temperaturatransporteid') ?></th>
            <th><?= $this->Paginator->sort('fk_lotetransporte') ?></th> -->
            <th><?= $this->Paginator->sort('n_leitura', 'Número da leitura') ?></th>
            <th><?= $this->Paginator->sort('valor_leitura', 'Valor da leitura') ?></th>
            <!-- <th class="actions"><?= __('Opções') ?></th>  -->
        </tr>
    </thead>
    <tbody>
    <?php foreach ($list_temp_transporte as $temperaturatransporte): ?>
        <tr>
         <!--    <td><?= h($temperaturatransporte->temperaturatransporteid) ?></td>
            <td><?= h($temperaturatransporte->fk_lotetransporte) ?></td> -->
            <td><?= $this->Number->format($temperaturatransporte->n_leitura) ?></td>
            <td><?= $this->Number->format($temperaturatransporte->valor_leitura) ?></td>
           <!--  <td class="actions">
                <?= $this->Html->link(__('Via'), ['action' => 'view', $temperaturatransporte->temperaturatransporteid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $temperaturatransporte->temperaturatransporteid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $temperaturatransporte->temperaturatransporteid], ['confirm' => __('Are you sure you want to delete # {0}?', $temperaturatransporte->temperaturatransporteid)]) ?> 
            </td>  -->
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>

</div>