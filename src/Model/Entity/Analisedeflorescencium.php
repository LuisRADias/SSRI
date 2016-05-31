<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Analisedeflorescencium Entity.
 */
class Analisedeflorescencium extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'qnt_larvas' => true,
        'qnt_larvas_ridlve' => true,
        'tecnico' => true,
    ];
}
