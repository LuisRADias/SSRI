<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="bairro index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('Nome') ?></th>
            <th><?= $this->Paginator->sort('Fase') ?></th>
            <th><?= $this->Paginator->sort('qtd_real_rd11') ?></th>
            <th><?= $this->Paginator->sort('Liberação semana') ?></th>
            <th><?= $this->Paginator->sort('População') ?></th>
            <th><?= $this->Paginator->sort('Alocação') ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= h($bairro->nome) ?></td>
            <td><?= h($bairro->fase) ?></td>
            <td><?= $this->Number->format($bairro->qtd_real_rd11) ?></td>
            <td><?= $this->Number->format($bairro->liberacao_semana) ?></td>
            <td><?= $this->Number->format($bairro->populacao) ?></td>
            <td><?= $this->Number->format($bairro->alocacao) ?></td>
        </tr>
    </tbody>
    </table>
</div>
