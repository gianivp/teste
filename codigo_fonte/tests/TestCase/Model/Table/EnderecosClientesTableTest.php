<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnderecosClientesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnderecosClientesTable Test Case
 */
class EnderecosClientesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EnderecosClientesTable
     */
    public $EnderecosClientes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.enderecos_clientes',
        'app.clientes',
        'app.enderecos',
        'app.reservas',
        'app.mesas',
        'app.agregacoes',
        'app.contas',
        'app.quotas_contas',
        'app.pedidos',
        'app.cardapios',
        'app.pedidos_cardapios',
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
        $config = TableRegistry::exists('EnderecosClientes') ? [] : ['className' => EnderecosClientesTable::class];
        $this->EnderecosClientes = TableRegistry::get('EnderecosClientes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EnderecosClientes);

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
