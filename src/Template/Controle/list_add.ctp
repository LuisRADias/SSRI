<div class="controle index large-10 medium-9 columns">
    <div class="message">
        Codigo da Separação: <?php echo $n_separacao ?> 
    </div>
    
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
            <!-- <th><?= $this->Paginator->sort('foto_cefalotorax', 'Foto do cefalotorax') ?></th> -->
            <th class="actions"><?= __('Opções') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($Controles as $list): ?>
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
            <!-- <td><?= h($list->foto_cefalotorax) ?></td> -->
            <td class="actions">
                <?= $this->Html->link(__('N. Tetra.'), ['controller' => 'tetraciclina', 'action' => 'list_add', $list->controleid, $separacoes_id]) ?>
                <br>
                <?= $this->Html->link(__('N. Tam. Cefalo.'), ['controller' => 'tamanhocefalotorax', 'action' => 'list_add', $list->controleid, $separacoes_id]) ?>
                <br>
                <?= $this->Html->link(__('N. A. Fluor.'), ['controller' => 'analiseflorescencia', 'action' => 'list_add', $list->controleid, $separacoes_id]) ?>
                <br>
                <?= $this->Html->link(__('N. R. da A.'), ['controller' => 'amostrarepasse', 'action' => 'list_add', $list->controleid, $separacoes_id]) ?>
                <br>
               <!--  <?= $this->Html->link(__('Visualizar'), ['action' => 'viewAllInfo', $separacoes_id]) ?>
                <br> -->
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'deleteNoReturn', $list->controleid, $list->fk_separacoes], ['confirm' => __('Tem certeza de que deseja deletar # {0}?', $list->controleid)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <tfoot ALIGN='BOTTOM'> 
        <p> Legenda: <br>
            N. Tetra     = Novo registro de Tetraciclina; <br>
            N. Tam.      = Novo registro de tamanho de cefalotórax; <br>
            N. A. Fluor. = Novo registro de análise de fluorescência <br>
            N. R. da A.  = Novo registro de repasse da amostra
        </p>
    </tfoot>

    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>

        <?= $this->Form->create($controle); ?>
        <fieldset>
            <legend><?= __('Adicionar Controle') ?></legend>
            <?php
                echo $this->Form->input('qtd_pupa_colher', ['label' => 'Quantidades de pupas por colher']);
                echo $this->Form->input('qtd_total_bandejas_separ', ['label' => 'Quantidade total de bandejas separadas']);
                echo $this->Form->input('qtd_bandejas_controle', ['label' => 'Quantidade de bandejas de controle']);
                echo $this->Form->input('qtd_total_colheres_macho', ['label' => 'Quantidade total de colheres macho']);
                echo $this->Form->input('qtd_total_colheres_femea', ['label' => 'Quantidade total de colheres fêmeas']);
                echo $this->Form->input('qtd_total_colheres_colonia', ['label' => 'Quantidade total de colheres da colônia']);
                echo $this->Form->input('total_colheres_controle', ['label' => 'Total de colheres de controle']);
                echo $this->Form->input('nome_responsavel', ['label' => 'Nome do responsável']);
                echo $this->Form->input('foto_cefalotorax', ['label' =>  'Foto do cefalotorax']);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Enviar')) ?>
        <?= $this->Html->link(
                                'Voltar',
                                ['controller' => 'separacoes'],
                                ['class' => 'button']
                            ); ?>
        <?= $this->Form->end() ?>
</div>
