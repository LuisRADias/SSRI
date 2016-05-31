<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Analisedeovo Entity.
 */
class Analisedeovo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'qnt_ovos' => true,
        'qnt_ovo_positivos' => true,
        'tecnico' => true,
    ];
}
