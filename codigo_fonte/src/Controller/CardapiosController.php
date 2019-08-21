<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cardapios Controller
 *
 * @property \App\Model\Table\CardapiosTable $Cardapios
 *
 * @method \App\Model\Entity\Cardapio[] paginate($object = null, array $settings = [])
 */
class CardapiosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $cardapios = $this->paginate($this->Cardapios);

        $this->set(compact('cardapios'));
        $this->set('_serialize', ['cardapios']);
    }

    /**
     * View method
     *
     * @param string|null $id Cardapio id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cardapio = $this->Cardapios->get($id, [
            'contain' => ['Pedidos']
        ]);

        $this->set('cardapio', $cardapio);
        $this->set('_serialize', ['cardapio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cardapio = $this->Cardapios->newEntity();
        if ($this->request->is('post')) {
            $cardapio = $this->Cardapios->patchEntity($cardapio, $this->request->getData());
            if ($this->Cardapios->save($cardapio)) {
                $this->Flash->success(__('The cardapio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cardapio could not be saved. Please, try again.'));
        }
        $pedidos = $this->Cardapios->Pedidos->find('list', ['limit' => 200]);
        $this->set(compact('cardapio', 'pedidos'));
        $this->set('_serialize', ['cardapio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cardapio id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cardapio = $this->Cardapios->get($id, [
            'contain' => ['Pedidos']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cardapio = $this->Cardapios->patchEntity($cardapio, $this->request->getData());
            if ($this->Cardapios->save($cardapio)) {
                $this->Flash->success(__('The cardapio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cardapio could not be saved. Please, try again.'));
        }
        $pedidos = $this->Cardapios->Pedidos->find('list', ['limit' => 200]);
        $this->set(compact('cardapio', 'pedidos'));
        $this->set('_serialize', ['cardapio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cardapio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cardapio = $this->Cardapios->get($id);
        if ($this->Cardapios->delete($cardapio)) {
            $this->Flash->success(__('The cardapio has been deleted.'));
        } else {
            $this->Flash->error(__('The cardapio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
