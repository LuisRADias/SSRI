<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo Lote de gaiola'), ['action' => 'add_dependant']) ?></li>
    </ul>
</div>
<div class="lotegaiolas index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!--<th><?= $this->Paginator->sort('lotegaiolasid') ?></th>-->
            <!--<th><?= $this->Paginator->sort('fk_lotebandejas') ?></th>-->
            <!--<th><?= $this->Paginator->sort('fk_bequer') ?></th>-->
            <th><?= $this->Paginator->sort('codigo_lote') ?></th>
            <!--<th class="actions"><?= __('Actions') ?></th>-->
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= h($lotegaiolas) ?></td>
            <!--<td class="actions">
                <?= $this->Html->link(__('Visualizar'), ['action' => 'index', $lotegaiolas->lotegaiolasid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lotegaiolas->lotegaiolasid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lotegaiolas->lotegaiolasid], ['confirm' => __('Are you sure you want to delete # {0}?', $lotegaiolas->lotegaiolasid)]) ?>
            </td>-->
        </tr>
    </tbody>

    </table>
    <h2><?= $this->Html->link(__('Producao de Ovos'), ['controller'=> 'Producaoovos','action' => 'index']) ?></h2>
     <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!--<th><?= $this->Paginator->sort('producaoovosid') ?></th>
            <th><?= $this->Paginator->sort('fk_lotegaiolas') ?></th>-->
            <th><?= $this->Paginator->sort('qtd_gaiolas') ?></th>
            <th><?= $this->Paginator->sort('data_alimentacao_sangue') ?></th>
            <th><?= $this->Paginator->sort('data_coleta') ?></th>
            <th><?= $this->Paginator->sort('peso_ovos') ?></th>
            <th class="actions"><?= __('Ações') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($producaoovos as $producaoovo): ?>
        <tr>
            <!--<td><?= h($producaoovo->producaoovosid) ?></td>
            <td><?= h($producaoovo->fk_lotegaiolas) ?></td>-->
            <td><?= $this->Number->format($producaoovo->qtd_gaiolas) ?></td>
            <td><?= h($producaoovo->data_alimentacao_sangue) ?></td>
            <td><?= h($producaoovo->data_coleta) ?></td>
            <td><?= $this->Number->format($producaoovo->peso_ovos) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Visualizar'), ['controller'=> 'Producaoovos','action' => 'view', $producaoovo->producaoovosid]) ?>
                <?= $this->Html->link(__('Editar'), ['controller'=> 'Producaoovos','action' => 'edit', $producaoovo->producaoovosid]) ?>
                <?= $this->Form->postLink(__('Deletar'), ['controller'=> 'Producaoovos','action' => 'delete', $producaoovo->producaoovosid], ['confirm' => __('Tem certeza que quer deletar esse registro?', $producaoovo->producaoovosid)]) ?>
            </td>
        </tr>
    <CAPTION ALIGN="bottom">
            Esta tabela exibe no máximo 3 registros. <?= $this->Html->link(__('Visualizar todos.'), ['controller'=> 'Producaoovos','action' => 'view_all_info',$fk_lotegaiolas,$lotegaiolas]) ?>
    </CAPTION>
    <?php endforeach; ?>
    </tbody>
    </table>

    <h2><?= $this->Html->link(__('Mortalidade de Pupas'), ['controller'=> 'Mortalidadepupas','action' => 'index']) ?></h2>
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!--<th><?= $this->Paginator->sort('mortalidadespupasid') ?></th>
            <th><?= $this->Paginator->sort('fk_lotegaiolas') ?></th>-->
            <th><?= $this->Paginator->sort('data_observacao') ?></th>
            <th><?= $this->Paginator->sort('pupas_g1') ?></th>
            <th><?= $this->Paginator->sort('pupas_g2') ?></th>
            <th><?= $this->Paginator->sort('pupas_g3') ?></th>
            <th class="actions"><?= __('Ações') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($mortalidadespupas as $mortalidadespupa): ?>
        <tr>
            <!--<td><?= h($mortalidadespupa->mortalidadespupasid) ?></td>
            <td><?= h($mortalidadespupa->fk_lotegaiolas) ?></td>-->
            <td><?= h($mortalidadespupa->data_observacao) ?></td>
            <td><?= $this->Number->format($mortalidadespupa->pupas_g1) ?></td>
            <td><?= $this->Number->format($mortalidadespupa->pupas_g2) ?></td>
            <td><?= $this->Number->format($mortalidadespupa->pupas_g3) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Visualizar'), ['controller'=> 'Mortalidadespupas','action' => 'view', $mortalidadespupa->mortalidadespupasid]) ?>
                <?= $this->Html->link(__('Editar'), ['controller'=> 'Mortalidadespupas','action' => 'edit', $mortalidadespupa->mortalidadespupasid]) ?>
                <?= $this->Form->postLink(__('Deletar'), ['controller'=> 'Mortalidadespupas','action' => 'delete', $mortalidadespupa->mortalidadespupasid], ['confirm' => __('Tem certeza que quer deletar este registro?', $mortalidadespupa->mortalidadespupasid)]) ?>
            </td>
        </tr>
    <CAPTION ALIGN="bottom">
            Esta tabela exibe no máximo 3 registros. <?= $this->Html->link(__('Visualizar todos.'), ['controller'=> 'Mortalidadespupas','action' => 'view_all_info',$fk_lotegaiolas,$lotegaiolas]) ?>
    </CAPTION>
    <?php endforeach; ?>
    </tbody>
    </table>


     <?= $this->Html->link(
                                'Voltar',
                                ['controller' => 'lotegaiolas'],
                                ['class' => 'button']
                            ); ?>
    <?= $this->Form->end() ?>
</div>
