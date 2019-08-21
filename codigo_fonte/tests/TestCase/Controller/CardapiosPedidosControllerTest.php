<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CardapiosPedidosController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\CardapiosPedidosController Test Case
 */
class CardapiosPedidosControllerTest extends IntegrationTestCase
{

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
