<?php
namespace App\Model\Table;

use App\Model\Entity\Identificacaodeespecy;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Identificacaodeespecies Model
 */
class IdentificacaodeespeciesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('identificacaodeespecies');
        $this->displayField('identificacaodeespeciesid');
        $this->primaryKey('identificacaodeespeciesid');
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
            ->add('identificacaodeespeciesid', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('identificacaodeespeciesid', 'create');
            
        $validator
            ->add('estagio_especies', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('estagio_especies');
            
        $validator
            ->add('qnt_ae_aegypti', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qnt_ae_aegypti');
            
        $validator
            ->add('qnt_ae_aegypti_macho', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qnt_ae_aegypti_macho');
            
        $validator
            ->add('qnt_ae_aegypti_femea', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qnt_ae_aegypti_femea');
            
        $validator
            ->add('qnt_a_albopictus', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qnt_a_albopictus');
            
        $validator
            ->add('qnt_a_albopictus_macho', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qnt_a_albopictus_macho');
            
        $validator
            ->add('qnt_a_albopictus_femea', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('qnt_a_albopictus_femea');

        return $validator;
    }
}
