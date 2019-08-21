<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MesasReservasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MesasReservasTable Test Case
 */
class MesasReservasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MesasReservasTable
     */
    public $MesasReservas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mesas_reservas',
        'app.mesas',
        'app.agregacoes',
        'app.contas',
        'app.pedidos',
        'app.cardapios',
        'app.pedidos_cardapios',
        'app.reservas',
        'app.clientes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MesasReservas') ? [] : ['className' => MesasReservasTable::class];
        $this->MesasReservas = TableRegistry::get('MesasReservas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MesasReservas);

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
