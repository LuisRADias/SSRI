<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IdentificacaodeespeciesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IdentificacaodeespeciesTable Test Case
 */
class IdentificacaodeespeciesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.identificacaodeespecies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Identificacaodeespecies') ? [] : ['className' => 'App\Model\Table\IdentificacaodeespeciesTable'];        $this->Identificacaodeespecies = TableRegistry::get('Identificacaodeespecies', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Identificacaodeespecies);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
