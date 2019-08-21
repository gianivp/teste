<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Agregacoes Controller
 *
 * @property \App\Model\Table\AgregacoesTable $Agregacoes
 *
 * @method \App\Model\Entity\Agregaco[] paginate($object = null, array $settings = [])
 */
class AgregacoesController extends AppController
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
        $agregacoes = $this->paginate($this->Agregacoes);

        $this->set(compact('agregacoes'));
        $this->set('_serialize', ['agregacoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Agregaco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agregaco = $this->Agregacoes->get($id, [
            'contain' => ['Mesas']
        ]);

        $this->set('agregaco', $agregaco);
        $this->set('_serialize', ['agregaco']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agregaco = $this->Agregacoes->newEntity();
        if ($this->request->is('post')) {
            $agregaco = $this->Agregacoes->patchEntity($agregaco, $this->request->getData());
            if ($this->Agregacoes->save($agregaco)) {
                $this->Flash->success(__('The agregaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agregaco could not be saved. Please, try again.'));
        }
        $mesas = $this->Agregacoes->Mesas->find('list', ['limit' => 200]);
        $this->set(compact('agregaco', 'mesas'));
        $this->set('_serialize', ['agregaco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Agregaco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agregaco = $this->Agregacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agregaco = $this->Agregacoes->patchEntity($agregaco, $this->request->getData());
            if ($this->Agregacoes->save($agregaco)) {
                $this->Flash->success(__('The agregaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agregaco could not be saved. Please, try again.'));
        }
        $mesas = $this->Agregacoes->Mesas->find('list', ['limit' => 200]);
        $this->set(compact('agregaco', 'mesas'));
        $this->set('_serialize', ['agregaco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Agregaco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agregaco = $this->Agregacoes->get($id);
        if ($this->Agregacoes->delete($agregaco)) {
            $this->Flash->success(__('The agregaco has been deleted.'));
        } else {
            $this->Flash->error(__('The agregaco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
