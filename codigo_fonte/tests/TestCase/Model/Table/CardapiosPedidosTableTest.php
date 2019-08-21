<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CardapiosPedidosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CardapiosPedidosTable Test Case
 */
class CardapiosPedidosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CardapiosPedidosTable
     */
    public $CardapiosPedidos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cardapios_pedidos',
        'app.pedidos',
        'app.mesas',
        'app.agregacoes',
        'app.contas',
        'app.quotas_contas',
        'app.reservas',
        'app.clientes',
        'app.mesas_reservas',
        'app.cardapios',
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
        $config = TableRegistry::exists('CardapiosPedidos') ? [] : ['className' => CardapiosPedidosTable::class];
        $this->CardapiosPedidos = TableRegistry::get('CardapiosPedidos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CardapiosPedidos);

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
