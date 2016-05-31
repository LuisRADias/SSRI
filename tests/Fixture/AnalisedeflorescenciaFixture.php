<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AnalisedeflorescenciaFixture
 *
 */
class AnalisedeflorescenciaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'analisedeflorescencia';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'analisedeflorescenciaid' => ['type' => 'uuid', 'length' => null, 'default' => 'uuid_generate_v4()', 'null' => false, 'comment' => null, 'precision' => null],
        'qnt_larvas' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'qnt_larvas_ridlve' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'tecnico' => ['type' => 'string', 'length' => 80, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['analisedeflorescenciaid'], 'length' => []],
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
            'analisedeflorescenciaid' => '',
            'qnt_larvas' => 1,
            'qnt_larvas_ridlve' => 1,
            'tecnico' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
