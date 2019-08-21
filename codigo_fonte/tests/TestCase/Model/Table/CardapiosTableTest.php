<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CardapiosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CardapiosTable Test Case
 */
class CardapiosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CardapiosTable
     */
    public $Cardapios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cardapios',
        'app.pedidos',
        'app.pedidos_cardapios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cardapios') ? [] : ['className' => CardapiosTable::class];
        $this->Cardapios = TableRegistry::get('Cardapios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cardapios);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
