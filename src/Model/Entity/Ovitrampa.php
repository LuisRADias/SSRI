<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ovitrampa Entity.
 */
class Ovitrampa extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fk_analisedeovos' => true,
        'fk_analisedeflorescencia' => true,
        'fk_identificacaodeespecies' => true,
        'codigo' => true,
        'nome' => true,
        'data_instalacao' => true,
        'data_coleta' => true,
        'ajuste_data_coleta' => true,
        'coletada' => true,
        'montada' => true,
        'agente' => true,
        'notas' => true,
    ];
}
