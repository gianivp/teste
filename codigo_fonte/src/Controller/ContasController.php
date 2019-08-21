<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contas Controller
 *
 * @property \App\Model\Table\ContasTable $Contas
 *
 * @method \App\Model\Entity\Conta[] paginate($object = null, array $settings = [])
 */
class ContasController extends AppController
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
        $contas = $this->paginate($this->Contas);

        $this->set(compact('contas'));
        $this->set('_serialize', ['contas']);
    }

    /**
     * View method
     *
     * @param string|null $id Conta id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $conta = $this->Contas->get($id, [
            'contain' => ['Mesas', 'QuotasContas']
        ]);

        $this->set('conta', $conta);
        $this->set('_serialize', ['conta']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $conta = $this->Contas->newEntity();
        if ($this->request->is('post')) {
            $conta = $this->Contas->patchEntity($conta, $this->request->getData());
            if ($this->Contas->save($conta)) {
                $this->Flash->success(__('The conta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conta could not be saved. Please, try again.'));
        }
        $mesas = $this->Contas->Mesas->find('list', ['limit' => 200]);
        $this->set(compact('conta', 'mesas'));
        $this->set('_serialize', ['conta']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Conta id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $conta = $this->Contas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $conta = $this->Contas->patchEntity($conta, $this->request->getData());
            if ($this->Contas->save($conta)) {
                $this->Flash->success(__('The conta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conta could not be saved. Please, try again.'));
        }
        $mesas = $this->Contas->Mesas->find('list', ['limit' => 200]);
        $this->set(compact('conta', 'mesas'));
        $this->set('_serialize', ['conta']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Conta id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $conta = $this->Contas->get($id);
        if ($this->Contas->delete($conta)) {
            $this->Flash->success(__('The conta has been deleted.'));
        } else {
            $this->Flash->error(__('The conta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
