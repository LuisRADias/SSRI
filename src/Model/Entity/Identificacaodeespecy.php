<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Identificacaodeespecy Entity.
 */
class Identificacaodeespecy extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'estagio_especies' => true,
        'qnt_ae_aegypti' => true,
        'qnt_ae_aegypti_macho' => true,
        'qnt_ae_aegypti_femea' => true,
        'qnt_a_albopictus' => true,
        'qnt_a_albopictus_macho' => true,
        'qnt_a_albopictus_femea' => true,
    ];
}
