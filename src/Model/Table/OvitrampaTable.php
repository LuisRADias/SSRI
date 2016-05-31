<?php
namespace App\Model\Table;

use App\Model\Entity\Ovitrampa;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ovitrampa Model
 */
class OvitrampaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('ovitrampa');
        $this->displayField('ovitrampaid');
        $this->primaryKey('ovitrampaid');
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
            ->add('ovitrampaid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('ovitrampaid', 'create');
            
        $validator
            ->add('fk_analisedeovos', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('fk_analisedeovos');
            
        $validator
            ->add('fk_analisedeflorescencia', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('fk_analisedeflorescencia');
            
        $validator
            ->add('fk_identificacaodeespecies', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('fk_identificacaodeespecies');
            
        $validator
            ->allowEmpty('codigo');
            
        $validator
            ->allowEmpty('nome');
            
        $validator
            ->add('data_instalacao', 'valid', ['rule' => 'date'])
            ->allowEmpty('data_instalacao');
            
        $validator
            ->add('data_coleta', 'valid', ['rule' => 'date'])
            ->allowEmpty('data_coleta');
            
        $validator
            ->add('ajuste_data_coleta', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ajuste_data_coleta');
            
        $validator
            ->add('coletada', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('coletada');
            
        $validator
            ->add('montada', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('montada');
            
        $validator
            ->allowEmpty('agente');
            
        $validator
            ->allowEmpty('notas');

        return $validator;
    }
}
