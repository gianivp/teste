<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AgregacoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AgregacoesTable Test Case
 */
class AgregacoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AgregacoesTable
     */
    public $Agregacoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.agregacoes',
        'app.mesas',
        'app.contas',
        'app.quotas_contas',
        'app.pedidos',
        'app.cardapios',
        'app.pedidos_cardapios',
        'app.reservas',
        'app.clientes',
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
        $config = TableRegistry::exists('Agregacoes') ? [] : ['className' => AgregacoesTable::class];
        $this->Agregacoes = TableRegistry::get('Agregacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Agregacoes);

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
