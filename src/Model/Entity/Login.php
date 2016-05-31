<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Login Entity.
 */
class Login extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'senha' => true,
        'email' => true,
    ];
}
