<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReservasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReservasTable Test Case
 */
class ReservasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ReservasTable
     */
    public $Reservas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.reservas',
        'app.clientes',
        'app.mesas',
        'app.agregacoes',
        'app.contas',
        'app.pedidos',
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
        $config = TableRegistry::exists('Reservas') ? [] : ['className' => ReservasTable::class];
        $this->Reservas = TableRegistry::get('Reservas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Reservas);

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
