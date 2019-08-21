<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

/**
 * Pedidos Controller
 *
 * @property \App\Model\Table\PedidosTable $Pedidos
 *
 * @method \App\Model\Entity\Pedido[] paginate($object = null, array $settings = [])
 */
class PedidosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {

        $this->paginate = [
            'contain' => ['Mesas']
        ];
        $pedidos = $this->paginate($this->Pedidos);

        $this->set(compact('pedidos'));
        $this->set('_serialize', ['pedidos']);
    }

    /**
     * View method
     *
     * @param string|null $id Pedido id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pedido = $this->Pedidos->get($id, [
            'contain' => ['Mesas', 'Cardapios']
        ]);

        $this->set('pedido', $pedido);
        $this->set('_serialize', ['pedido']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pedido = $this->Pedidos->newEntity();
        if ($this->request->is('post')) {
            $pedido = $this->Pedidos->patchEntity($pedido, $this->request->getData());
            if ($this->Pedidos->save($pedido)) {
                $this->Flash->success(__('The pedido has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pedido could not be saved. Please, try again.'));
        }
        $mesas = $this->Pedidos->Mesas->find('list', ['limit' => 200]);
        $cardapios = $this->Pedidos->Cardapios->find('list', ['limit' => 200]);
        $this->set(compact('pedido', 'mesas', 'cardapios'));
        $this->set('_serialize', ['pedido']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pedido id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pedido = $this->Pedidos->get($id, [
            'contain' => ['Cardapios']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pedido = $this->Pedidos->patchEntity($pedido, $this->request->getData());
            if ($this->Pedidos->save($pedido)) {
                $this->Flash->success(__('The pedido has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pedido could not be saved. Please, try again.'));
        }
        $mesas = $this->Pedidos->Mesas->find('list', ['limit' => 200]);
        $cardapios = $this->Pedidos->Cardapios->find('list', ['limit' => 200]);
        $this->set(compact('pedido', 'mesas', 'cardapios'));
        $this->set('_serialize', ['pedido']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pedido id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pedido = $this->Pedidos->get($id);
        if ($this->Pedidos->delete($pedido)) {
            $this->Flash->success(__('The pedido has been deleted.'));
        } else {
            $this->Flash->error(__('The pedido could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function cozinha ()
    {
        $conn = ConnectionManager::get('default');
        $stmt = $conn->execute('select * from pedidos_cardapios');
     //   $results = $stmt ->fetchAll();


      //  $this->set(compact('$stmt'));
       // $this->set('_serialize', ['$stmt']);
       // $this->set('stmt', $stmt);

   //     $pedidos = $this->paginate($this->Pedidos);

        //$this->set(compact('pedidos'));
         $rows = $stmt->fetchAll('assoc');
         $this->set('resultado', $rows);
    }

}
