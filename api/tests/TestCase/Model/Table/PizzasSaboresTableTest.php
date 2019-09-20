<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PizzasSaboresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PizzasSaboresTable Test Case
 */
class PizzasSaboresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PizzasSaboresTable
     */
    public $PizzasSabores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PizzasSabores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PizzasSabores') ? [] : ['className' => PizzasSaboresTable::class];
        $this->PizzasSabores = TableRegistry::getTableLocator()->get('PizzasSabores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PizzasSabores);

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
