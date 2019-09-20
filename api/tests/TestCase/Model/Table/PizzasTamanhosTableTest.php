<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PizzasTamanhosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PizzasTamanhosTable Test Case
 */
class PizzasTamanhosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PizzasTamanhosTable
     */
    public $PizzasTamanhos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PizzasTamanhos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PizzasTamanhos') ? [] : ['className' => PizzasTamanhosTable::class];
        $this->PizzasTamanhos = TableRegistry::getTableLocator()->get('PizzasTamanhos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PizzasTamanhos);

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
