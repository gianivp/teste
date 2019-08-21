<?php
namespace App\Test\TestCase\Controller;

use App\Controller\AgregacoesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\AgregacoesController Test Case
 */
class AgregacoesControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
