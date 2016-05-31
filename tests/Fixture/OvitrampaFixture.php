<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OvitrampaFixture
 *
 */
class OvitrampaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'ovitrampa';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ovitrampaid' => ['type' => 'uuid', 'length' => null, 'default' => 'uuid_generate_v4()', 'null' => false, 'comment' => null, 'precision' => null],
        'fk_analisedeovos' => ['type' => 'uuid', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'fk_analisedeflorescencia' => ['type' => 'uuid', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'fk_identificacaodeespecies' => ['type' => 'uuid', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'codigo' => ['type' => 'string', 'length' => 80, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        'nome' => ['type' => 'string', 'length' => 80, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        'data_instalacao' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'data_coleta' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'ajuste_data_coleta' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'coletada' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'montada' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'agente' => ['type' => 'string', 'length' => 80, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        'notas' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ovitrampaid'], 'length' => []],
            'fk_ovitrampa_analisedeovos' => ['type' => 'foreign', 'columns' => ['fk_analisedeovos'], 'references' => ['analisedeovos', 'analisedeovosid'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'fk_ovitrampa_analisedeflorescencia' => ['type' => 'foreign', 'columns' => ['fk_analisedeflorescencia'], 'references' => ['analisedeflorescencia', 'analisedeflorescenciaid'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'fk_ovitrampa_identificacaodeespecies' => ['type' => 'foreign', 'columns' => ['fk_identificacaodeespecies'], 'references' => ['identificacaodeespecies', 'identificacaodeespeciesid'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'ovitrampaid' => '',
            'fk_analisedeovos' => '',
            'fk_analisedeflorescencia' => '',
            'fk_identificacaodeespecies' => '',
            'codigo' => 'Lorem ipsum dolor sit amet',
            'nome' => 'Lorem ipsum dolor sit amet',
            'data_instalacao' => '2015-12-12',
            'data_coleta' => '2015-12-12',
            'ajuste_data_coleta' => 1,
            'coletada' => 1,
            'montada' => 1,
            'agente' => 'Lorem ipsum dolor sit amet',
            'notas' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
