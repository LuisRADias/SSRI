<?php
namespace App\Model\Table;

use App\Model\Entity\Analisedeovo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Analisedeovos Model
 */
class AnalisedeovosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('analisedeovos');
        $this->displayField('analisedeovosid');
        $this->primaryKey('analisedeovosid');
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
            ->add('analisedeovosid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('analisedeovosid', 'create');
            
        $validator
            ->add('qnt_ovos', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qnt_ovos');
            
        $validator
            ->add('qnt_ovo_positivos', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qnt_ovo_positivos');
            
        $validator
            ->allowEmpty('tecnico');

        return $validator;
    }
}
