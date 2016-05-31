<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="liberacao index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!--<th><?= $this->Paginator->sort('liberacaoid') ?></th>
            <th><?= $this->Paginator->sort('fk_lotetransporte') ?></th>-->
            <th><?= $this->Paginator->sort('hora_inicial') ?></th>
            <th><?= $this->Paginator->sort('hora_termino') ?></th>
            <th><?= $this->Paginator->sort('tempo_de_manipulacao') ?></th>
            <th><?= $this->Paginator->sort('percepcao_da_presenca_de_femeas') ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <!--<td><?= h($liberacao->liberacaoid) ?></td>
            <td><?= h($liberacao->fk_lotetransporte) ?></td>-->
            <td><?= substr($liberacao->hora_inicial, 0, 8) ?></td>
            <td><?= substr($liberacao->hora_termino, 0, 8) ?></td>
            <td><?= $this->Number->format($liberacao->tempo_de_manipulacao) ?></td>
            <td><?= h($liberacao->percepcao_da_presenca_de_femeas) ?></td>
        </tr>
    </tbody>
    </table>


<h2> Separações </h2>

<table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!--<th><?= $this->Paginator->sort('Separa/libera ID') ?></th>
            <th><?= $this->Paginator->sort('Liberação') ?></th>-->
            <th><?= $this->Paginator->sort('Nº separação') ?></th>
            <th><?= $this->Paginator->sort('Data drenagem_pré') ?></th>
            <th><?= $this->Paginator->sort('Data controle liberação_pós') ?></th>
        </tr>
    </thead>
    <tbody>
        <caption ALIGN='BOTTOM'> 
            Essa tabela exibe no máximo 3 registros. 
            <?= $this->Html->link(__('Visualizar separações'), ['controller' => 'Separacaoliberacao', 'action' => 'viewAllInfo', $liberacao_id]) ?> 
        </caption>
        <?php foreach ($list_separacao as $list): ?>
            <tr>
                <!--<td><?= h($list->separacaoliberacaoid) ?></td>
                <td><?= h($list->fk_liberacao) ?></td>-->
                <td><?= $this->Number->format($list->n_separacao) ?></td>
                <td><?= h($list->data_drenagem_pre) ?></td>
                <td><?= h($list->data_controle_liberacao_pos) ?></td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>

<h2> Subdivisões </h2>

<table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!--<th><?= $this->Paginator->sort('subdivisaoid') ?></th>
            <th><?= $this->Paginator->sort('fk_liberacao') ?></th>
            <th><?= $this->Paginator->sort('fk_bairro') ?></th>-->
            <th><?= $this->Paginator->sort('data_liberacao') ?></th>
            <th><?= $this->Paginator->sort('nome') ?></th>
            <th><?= $this->Paginator->sort('supervisor') ?></th>
            <th><?= $this->Paginator->sort('qtd_alvo_rd11') ?></th>
        </tr>
    </thead>
    <tbody>
        <caption ALIGN='BOTTOM'> 
            Essa tabela exibe no máximo 3 registros. 
            <?= $this->Html->link(__('Visualizar subdivisões'), ['controller' => 'Subdivisao', 'action' => 'viewAllInfo', $liberacao_id]) ?> 
        </caption>
        <?php foreach ($list_subdivisao as $list): ?>
            <tr>
                <!--<td><?= h($list->subdivisaoid) ?></td>
                <td><?= h($list->fk_liberacao) ?></td>
                <td><?= h($list->fk_bairro) ?></td>-->
                <td><?= h($list->data_liberacao) ?></td>
                <td><?= h($list->nome) ?></td>
                <td><?= h($list->supervisor) ?></td>
                <td><?= $this->Number->format($list->qtd_alvo_rd11) ?></td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>

</div>   
