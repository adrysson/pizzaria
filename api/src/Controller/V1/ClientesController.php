<?php
namespace App\Controller\V1;

use App\Controller\AppController;

/**
 * Clientes Controller
 *
 * @property \App\Model\Table\ClientesTable $Clientes
 *
 * @method \App\Model\Entity\Cliente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $clientes = $this->paginate($this->Clientes);

        $this->set([
            'clientes' => $clientes,
            '_serialize' => ['clientes'],
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cliente = $this->Clientes->get($id, [
            'contain' => ['Pedidos']
        ]);

        $this->set([
            'cliente' => $cliente,
            '_serialize' => ['cliente'],
        ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cliente = $this->Clientes->newEntity();
        if ($this->request->is('post')) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            if ($this->Clientes->save($cliente)) {
                return $this->response->withStringBody(__('O cliente foi salvo com sucesso.'));
            }
            $this->response = $this->response->withStatus(422);
            $this->set([
                'errors' => $cliente->getErrors(),
                '_serialize' => ['errors'],
            ]);
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cliente = $this->Clientes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'put'])) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            if ($this->Clientes->save($cliente)) {
                return $this->response->withStringBody(__('O cliente foi salvo com sucesso.'));
            }
            $this->response = $this->response->withStatus(422);
            $this->set([
                'errors' => $cliente->getErrors(),
                '_serialize' => ['errors'],
            ]);
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['delete']);
        $cliente = $this->Clientes->get($id);
        if ($this->Clientes->delete($cliente)) {
            return $this->response->withStatus(204)->withStringBody(__('O cliente foi apagado com sucesso.'));
        }
        return $this->response->withStatus(400)->withStringBody(__('Não foi possível apagar o cliente. Tente novamente.'));
    }
}
