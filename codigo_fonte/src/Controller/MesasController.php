<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mesas Controller
 *
 * @property \App\Model\Table\MesasTable $Mesas
 *
 * @method \App\Model\Entity\Mesa[] paginate($object = null, array $settings = [])
 */
class MesasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $mesas = $this->paginate($this->Mesas);

        $this->set(compact('mesas'));
        $this->set('_serialize', ['mesas']);
    }

    /**
     * View method
     *
     * @param string|null $id Mesa id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mesa = $this->Mesas->get($id, [
            'contain' => ['Reservas', 'Agregacoes', 'Contas', 'Pedidos']
        ]);

        $this->set('mesa', $mesa);
        $this->set('_serialize', ['mesa']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mesa = $this->Mesas->newEntity();
        if ($this->request->is('post')) {
            $mesa = $this->Mesas->patchEntity($mesa, $this->request->getData());
            if ($this->Mesas->save($mesa)) {
                $this->Flash->success(__('The mesa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mesa could not be saved. Please, try again.'));
        }
        $reservas = $this->Mesas->Reservas->find('list', ['limit' => 200]);
        $this->set(compact('mesa', 'reservas'));
        $this->set('_serialize', ['mesa']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mesa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mesa = $this->Mesas->get($id, [
            'contain' => ['Reservas']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mesa = $this->Mesas->patchEntity($mesa, $this->request->getData());
            if ($this->Mesas->save($mesa)) {
                $this->Flash->success(__('The mesa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mesa could not be saved. Please, try again.'));
        }
        $reservas = $this->Mesas->Reservas->find('list', ['limit' => 200]);
        $this->set(compact('mesa', 'reservas'));
        $this->set('_serialize', ['mesa']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mesa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mesa = $this->Mesas->get($id);
        if ($this->Mesas->delete($mesa)) {
            $this->Flash->success(__('The mesa has been deleted.'));
        } else {
            $this->Flash->error(__('The mesa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
