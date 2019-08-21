<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MesasReservas Controller
 *
 * @property \App\Model\Table\MesasReservasTable $MesasReservas
 *
 * @method \App\Model\Entity\MesasReserva[] paginate($object = null, array $settings = [])
 */
class MesasReservasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Mesas', 'Reservas']
        ];
        $mesasReservas = $this->paginate($this->MesasReservas);

        $this->set(compact('mesasReservas'));
        $this->set('_serialize', ['mesasReservas']);
    }

    /**
     * View method
     *
     * @param string|null $id Mesas Reserva id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mesasReserva = $this->MesasReservas->get($id, [
            'contain' => ['Mesas', 'Reservas']
        ]);

        $this->set('mesasReserva', $mesasReserva);
        $this->set('_serialize', ['mesasReserva']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mesasReserva = $this->MesasReservas->newEntity();
        if ($this->request->is('post')) {
            $mesasReserva = $this->MesasReservas->patchEntity($mesasReserva, $this->request->getData());
            if ($this->MesasReservas->save($mesasReserva)) {
                $this->Flash->success(__('The mesas reserva has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mesas reserva could not be saved. Please, try again.'));
        }
        $mesas = $this->MesasReservas->Mesas->find('list', ['limit' => 200]);
        $reservas = $this->MesasReservas->Reservas->find('list', ['limit' => 200]);
        $this->set(compact('mesasReserva', 'mesas', 'reservas'));
        $this->set('_serialize', ['mesasReserva']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mesas Reserva id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mesasReserva = $this->MesasReservas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mesasReserva = $this->MesasReservas->patchEntity($mesasReserva, $this->request->getData());
            if ($this->MesasReservas->save($mesasReserva)) {
                $this->Flash->success(__('The mesas reserva has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mesas reserva could not be saved. Please, try again.'));
        }
        $mesas = $this->MesasReservas->Mesas->find('list', ['limit' => 200]);
        $reservas = $this->MesasReservas->Reservas->find('list', ['limit' => 200]);
        $this->set(compact('mesasReserva', 'mesas', 'reservas'));
        $this->set('_serialize', ['mesasReserva']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mesas Reserva id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mesasReserva = $this->MesasReservas->get($id);
        if ($this->MesasReservas->delete($mesasReserva)) {
            $this->Flash->success(__('The mesas reserva has been deleted.'));
        } else {
            $this->Flash->error(__('The mesas reserva could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
