<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EnderecosClientes Controller
 *
 * @property \App\Model\Table\EnderecosClientesTable $EnderecosClientes
 *
 * @method \App\Model\Entity\EnderecosCliente[] paginate($object = null, array $settings = [])
 */
class EnderecosClientesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clientes', 'Enderecos']
        ];
        $enderecosClientes = $this->paginate($this->EnderecosClientes);

        $this->set(compact('enderecosClientes'));
        $this->set('_serialize', ['enderecosClientes']);
    }

    /**
     * View method
     *
     * @param string|null $id Enderecos Cliente id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $enderecosCliente = $this->EnderecosClientes->get($id, [
            'contain' => ['Clientes', 'Enderecos']
        ]);

        $this->set('enderecosCliente', $enderecosCliente);
        $this->set('_serialize', ['enderecosCliente']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $enderecosCliente = $this->EnderecosClientes->newEntity();
        if ($this->request->is('post')) {
            $enderecosCliente = $this->EnderecosClientes->patchEntity($enderecosCliente, $this->request->getData());
            if ($this->EnderecosClientes->save($enderecosCliente)) {
                $this->Flash->success(__('The enderecos cliente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enderecos cliente could not be saved. Please, try again.'));
        }
        $clientes = $this->EnderecosClientes->Clientes->find('list', ['limit' => 200]);
        $enderecos = $this->EnderecosClientes->Enderecos->find('list', ['limit' => 200]);
        $this->set(compact('enderecosCliente', 'clientes', 'enderecos'));
        $this->set('_serialize', ['enderecosCliente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Enderecos Cliente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $enderecosCliente = $this->EnderecosClientes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enderecosCliente = $this->EnderecosClientes->patchEntity($enderecosCliente, $this->request->getData());
            if ($this->EnderecosClientes->save($enderecosCliente)) {
                $this->Flash->success(__('The enderecos cliente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enderecos cliente could not be saved. Please, try again.'));
        }
        $clientes = $this->EnderecosClientes->Clientes->find('list', ['limit' => 200]);
        $enderecos = $this->EnderecosClientes->Enderecos->find('list', ['limit' => 200]);
        $this->set(compact('enderecosCliente', 'clientes', 'enderecos'));
        $this->set('_serialize', ['enderecosCliente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Enderecos Cliente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $enderecosCliente = $this->EnderecosClientes->get($id);
        if ($this->EnderecosClientes->delete($enderecosCliente)) {
            $this->Flash->success(__('The enderecos cliente has been deleted.'));
        } else {
            $this->Flash->error(__('The enderecos cliente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
