<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PedidosCardapiosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PedidosCardapiosTable Test Case
 */
class PedidosCardapiosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PedidosCardapiosTable
     */
    public $PedidosCardapios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pedidos_cardapios',
        'app.cardapios',
        'app.pedidos',
        'app.mesas',
        'app.agregacoes',
        'app.contas',
        'app.quotas_contas',
        'app.reservas',
        'app.clientes',
        'app.enderecos',
        'app.mesas_reservas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PedidosCardapios') ? [] : ['className' => PedidosCardapiosTable::class];
        $this->PedidosCardapios = TableRegistry::get('PedidosCardapios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PedidosCardapios);

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
