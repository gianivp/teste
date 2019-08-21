<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * QuotasContas Controller
 *
 * @property \App\Model\Table\QuotasContasTable $QuotasContas
 *
 * @method \App\Model\Entity\QuotasConta[] paginate($object = null, array $settings = [])
 */
class QuotasContasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Contas']
        ];
        $quotasContas = $this->paginate($this->QuotasContas);

        $this->set(compact('quotasContas'));
        $this->set('_serialize', ['quotasContas']);
    }

    /**
     * View method
     *
     * @param string|null $id Quotas Conta id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $quotasConta = $this->QuotasContas->get($id, [
            'contain' => ['Contas']
        ]);

        $this->set('quotasConta', $quotasConta);
        $this->set('_serialize', ['quotasConta']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id_conta = null)
    {
        $quotasConta = $this->QuotasContas->newEntity();
        if ($this->request->is('post')) {
            $quotasConta = $this->QuotasContas->patchEntity($quotasConta, $this->request->getData());
            if ($this->QuotasContas->save($quotasConta)) {
                $this->Flash->success(__('Pagamento de quota feito com sucesso!!!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao tentar salvar'));
        }
        $contas = $this->QuotasContas->Contas->find('list', ['limit' => 200]);
        $this->set(compact('quotasConta', 'contas'));
        $this->set('_serialize', ['quotasConta']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Quotas Conta id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $quotasConta = $this->QuotasContas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $quotasConta = $this->QuotasContas->patchEntity($quotasConta, $this->request->getData());
            if ($this->QuotasContas->save($quotasConta)) {
                $this->Flash->success(__('The quotas conta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quotas conta could not be saved. Please, try again.'));
        }
        $contas = $this->QuotasContas->Contas->find('list', ['limit' => 200]);
        $this->set(compact('quotasConta', 'contas'));
        $this->set('_serialize', ['quotasConta']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Quotas Conta id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $quotasConta = $this->QuotasContas->get($id);
        if ($this->QuotasContas->delete($quotasConta)) {
            $this->Flash->success(__('The quotas conta has been deleted.'));
        } else {
            $this->Flash->error(__('The quotas conta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
