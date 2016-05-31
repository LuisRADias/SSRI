<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AnalisedeflorescenciaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AnalisedeflorescenciaTable Test Case
 */
class AnalisedeflorescenciaTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.analisedeflorescencia'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Analisedeflorescencia') ? [] : ['className' => 'App\Model\Table\AnalisedeflorescenciaTable'];        $this->Analisedeflorescencia = TableRegistry::get('Analisedeflorescencia', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Analisedeflorescencia);

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
