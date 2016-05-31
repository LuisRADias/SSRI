<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <?php if(!is_null($ovitrampa->fk_analisedeovos)) :?>
            <li><?= $this->Html->link(__('Editar Análise de Ovos'), ['controller' => 'Analisedeovos', 'action' => 'edit', $ovitrampa->fk_analisedeovos, $ovitrampa->ovitrampaid, $ovitrampa->codigo]) ?></li>
        <?php endif;?>
        <?php if(!is_null($ovitrampa->fk_analisedeflorescencia)) :?>
            <li><?= $this->Html->link(__('Editar Análise de Florescencia'), ['controller' => 'Analisedeflorescencia', 'action' => 'edit', $ovitrampa->fk_analisedeflorescencia, $ovitrampa->ovitrampaid, $ovitrampa->codigo]) ?></li>
        <?php endif;?>
        <?php if(!is_null($ovitrampa->fk_identificacaodeespecies)) :?>
            <li><?= $this->Html->link(__('Editar Identificação de Espécies'), ['controller' => 'Identificacaodeespecies', 'action' => 'edit', $ovitrampa->fk_identificacaodeespecies, $ovitrampa->ovitrampaid, $ovitrampa->codigo]) ?></li>
        <?php endif;?>
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="ovitrampa index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('codigo') ?></th>
            <th><?= $this->Paginator->sort('nome') ?></th>
            <th><?= $this->Paginator->sort('data_instalacao') ?></th>
            <th><?= $this->Paginator->sort('data_coleta') ?></th>
            <th><?= $this->Paginator->sort('ajuste_data_coleta') ?></th>
            <th><?= $this->Paginator->sort('coletada') ?></th>
            <th><?= $this->Paginator->sort('montada') ?></th>
            <th><?= $this->Paginator->sort('agente') ?></th>
            <th><?= $this->Paginator->sort('notas') ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= h($ovitrampa->codigo) ?></td>
            <td><?= h($ovitrampa->nome) ?></td>
            <td><?= h($ovitrampa->data_instalacao) ?></td>
            <td><?= h($ovitrampa->data_coleta) ?></td>
            <td><?= h($ovitrampa->ajuste_data_coleta) ?></td>
            <td><?= $ovitrampa->coletada ? 'Sim' : 'Não' ?></td>
            <td><?= $ovitrampa->montada ? 'Sim' : 'Não' ?></td>
            <td><?= h($ovitrampa->agente) ?></td>
            <td><?= h($ovitrampa->notas) ?></td>
        </tr>
    </tbody>
    </table>
    
    <h2> Análise de Ovos </h2>
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th>Quantidade de ovos</th>
            <th>Quantidade de ovos positivos</th>
            <th>Técnico</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= h($ovos->qnt_ovos) ?></td>
            <td><?= h($ovos->qnt_ovo_positivos) ?></td>
            <td><?= h($ovos->tecnico) ?></td>
        </tr>
    </tbody>
    </table>
    
    <h2> Análise de Florescencia </h2>
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th>Quantidade de larvas</th>
            <th>Quantidade de larvas RIDL+ve</th>
            <th>Técnico</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= h($florescencia->qnt_larvas) ?></td>
            <td><?= h($florescencia->qnt_larvas_ridlve) ?></td>
            <td><?= h($florescencia->tecnico) ?></td>
        </tr>
    </tbody>
    </table>
    
    <h2> Identificação de Espécies </h2>
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th>Estágio das espécies</th>
            <th>Quantidade de Aedes Aegypti</th>
            <th>Quantidade de Aedes Aegypti Macho</th>
            <th>Quantidade de Aedes Aegypti Fêmea</th>
            <th>Quantidade de Aedes Albopictus</th>
            <th>Quantidade de Aedes Albopictus Macho</th>
            <th>Quantidade de Aedes Albopictus Fêmea</th>
 
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= h($especies->estagio_especies) ?></td>
            <td><?= h($especies->qnt_ae_aegypti_macho + $especies->qnt_ae_aegypti_femea) ?></td>
            <td><?= h($especies->qnt_ae_aegypti_macho) ?></td>
            <td><?= h($especies->qnt_ae_aegypti_femea) ?></td>
            <td><?= h($especies->qnt_a_albopictus_macho + $especies->qnt_a_albopictus_femea) ?></td>
            <td><?= h($especies->qnt_a_albopictus_macho) ?></td>
            <td><?= h($especies->qnt_a_albopictus_femea) ?></td>
        </tr>
    </tbody>
    </table>
</div>
