<?php
namespace App\Model\Table;

use App\Model\Entity\Analisedeflorescencium;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Analisedeflorescencia Model
 */
class AnalisedeflorescenciaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('analisedeflorescencia');
        $this->displayField('analisedeflorescenciaid');
        $this->primaryKey('analisedeflorescenciaid');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('analisedeflorescenciaid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('analisedeflorescenciaid', 'create');
            
        $validator
            ->add('qnt_larvas', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qnt_larvas');
            
        $validator
            ->add('qnt_larvas_ridlve', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qnt_larvas_ridlve');
            
        $validator
            ->allowEmpty('tecnico');

        return $validator;
    }
}
