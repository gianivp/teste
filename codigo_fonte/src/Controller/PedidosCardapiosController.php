<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PedidosCardapios Controller
 *
 * @property \App\Model\Table\PedidosCardapiosTable $PedidosCardapios
 *
 * @method \App\Model\Entity\PedidosCardapio[] paginate($object = null, array $settings = [])
 */
class PedidosCardapiosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
 
        $this->paginate = [
            'contain' => ['Cardapios', 'Pedidos'],
            'conditions' =>  array (
            'OR' => array(
            array('pedidosCardapios.status' => 'Pendente'),
            array('pedidosCardapios.status' => 'em Andamento')
            )
        )
            //'conditions' => [
            //'pedidosCardapios.status' => ('Pendenete')]

         ];

        $pedidosCardapios = $this->paginate($this->PedidosCardapios);

        $this->set(compact('pedidosCardapios'));
        $this->set('_serialize', ['pedidosCardapios']);
    }

    /**
     * View method
     *
     * @param string|null $id Pedidos Cardapio id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pedidosCardapio = $this->PedidosCardapios->get($id, [
            'contain' => ['Cardapios', 'Pedidos']
        ]);

        $this->set('pedidosCardapio', $pedidosCardapio);
        $this->set('_serialize', ['pedidosCardapio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pedidosCardapio = $this->PedidosCardapios->newEntity();
        if ($this->request->is('post')) {
            $pedidosCardapio = $this->PedidosCardapios->patchEntity($pedidosCardapio, $this->request->getData());
            if ($this->PedidosCardapios->save($pedidosCardapio)) {
                $this->Flash->success(__('The pedidos cardapio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pedidos cardapio could not be saved. Please, try again.'));
        }
        $cardapios = $this->PedidosCardapios->Cardapios->find('list', ['limit' => 200]);
        $pedidos = $this->PedidosCardapios->Pedidos->find('list', ['limit' => 200]);
        $this->set(compact('pedidosCardapio', 'cardapios', 'pedidos'));
        $this->set('_serialize', ['pedidosCardapio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pedidos Cardapio id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pedidosCardapio = $this->PedidosCardapios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pedidosCardapio = $this->PedidosCardapios->patchEntity($pedidosCardapio, $this->request->getData());
            if ($this->PedidosCardapios->save($pedidosCardapio)) {
                $this->Flash->success(__('The pedidos cardapio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pedidos cardapio could not be saved. Please, try again.'));
        }
        $cardapios = $this->PedidosCardapios->Cardapios->find('list', ['limit' => 200]);
        $pedidos = $this->PedidosCardapios->Pedidos->find('list', ['limit' => 200]);
        $this->set(compact('pedidosCardapio', 'cardapios', 'pedidos'));
        $this->set('_serialize', ['pedidosCardapio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pedidos Cardapio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pedidosCardapio = $this->PedidosCardapios->get($id);
        if ($this->PedidosCardapios->delete($pedidosCardapio)) {
            $this->Flash->success(__('The pedidos cardapio has been deleted.'));
        } else {
            $this->Flash->error(__('The pedidos cardapio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function prepara($id = null){
        $pedidosCardapio = $this->PedidosCardapios->get($id);
        $pedidosCardapio->status = 'Em andamento';

        if ($this->PedidosCardapios->save($pedidosCardapio)) {
                $this->Flash->success(__('Item com preparo iniciado'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao iniciar'));
    }

    public function finaliza($id = null){
        $pedidosCardapio = $this->PedidosCardapios->get($id);
        $pedidosCardapio->status = 'Finalizado';

        if ($this->PedidosCardapios->save($pedidosCardapio)) {
                $this->Flash->success(__('Item com preparo iniciado'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao iniciar'));


    }
}
