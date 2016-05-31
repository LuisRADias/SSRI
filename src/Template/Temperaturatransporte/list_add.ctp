<div class="temperaturatransporte index large-10 medium-9 columns">
    <div class="message">
    Codigo do transporte: <?php echo $codigo_transporte ?> 
    </div>
    <h2>Temperatura do transporte </h2>
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!--<th><?= $this->Paginator->sort('temperaturatransporteid') ?></th>
            <th><?= $this->Paginator->sort('fk_lotetransporte') ?></th>-->
            <th><?= $this->Paginator->sort('n_leitura') ?></th>
            <th><?= $this->Paginator->sort('valor_leitura') ?></th>
            <th><?= $this->Paginator->sort('hora_leitura') ?></th>
            <!--<th class="actions"><?= __('Actions') ?></th>-->
        </tr>
    </thead>
    <tbody>
    <?php foreach ($temperaturatransporteList as $list): ?>
        <tr>
            <!--<td><?= h($temperaturatransporte->temperaturatransporteid) ?></td>
            <td><?= h($temperaturatransporte->fk_lotetransporte) ?></td>-->
            <td><?= $this->Number->format($list->n_leitura) ?></td>
            <td><?= $this->Number->format($list->valor_leitura) ?></td>
            <td><?= h($list->hora_leitura) ?></td>
            <!--<td class="actions">
                <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $temperaturatransporte->temperaturatransporteid]) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $temperaturatransporte->temperaturatransporteid]) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $temperaturatransporte->temperaturatransporteid], ['confirm' => __('Are you sure you want to delete # {0}?', $temperaturatransporte->temperaturatransporteid)]) ?>
            </td>-->
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
    <?= $this->Form->create($temperaturatransporte); ?>
    <fieldset>
        <legend><?= __('Adicionar Temperatura e transporte') ?></legend>
        <?php
            $this->Form->templates([
                'dateWidget' => '<div class="input time">{{day}}{{month}}{{year}}{{hour}}{{minute}}{{second}}{{meridian}}</div>'
            ]);
            echo $this->Form->input('n_leitura', ['label' => 'Número da leitura']);
            echo '<label>Hora da leitura</label>';
            echo $this->Form->time('hora_leitura',['empty' => false]);
            echo $this->Form->input('valor_leitura', ['label' => 'Valor da leitura']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Html->link(
                                'Voltar',
                                ['controller' => 'lotetransporte'],
                                ['class' => 'button']
                            ); ?>
    <?= $this->Form->end() ?>
</div>
