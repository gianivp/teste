<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MesasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MesasTable Test Case
 */
class MesasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MesasTable
     */
    public $Mesas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mesas',
        'app.agregacoes',
        'app.contas',
        'app.quotas_contas',
        'app.pedidos',
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
        $config = TableRegistry::exists('Mesas') ? [] : ['className' => MesasTable::class];
        $this->Mesas = TableRegistry::get('Mesas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mesas);

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
