<?php
namespace App\Controller\V1;

use App\Controller\AppController;

/**
 * Pedidos Controller
 *
 * @property \App\Model\Table\PedidosTable $Pedidos
 *
 * @method \App\Model\Entity\Pedido[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PedidosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['PizzasSabores', 'PizzasTamanhos', 'Clientes', 'Enderecos']
        ];
        $pedidos = $this->paginate($this->Pedidos);

        $this->set([
            'pedidos' => $pedidos,
            '_serialize' => ['pedidos'],
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Pedido id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pedido = $this->Pedidos->get($id, [
            'contain' => ['PizzasSabores', 'PizzasTamanhos', 'Clientes', 'Enderecos' => 'Estados']
        ]);

        $this->set([
            'pedido' => $pedido,
            '_serialize' => ['pedido'],
        ]);
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
                return $this->response->withStringBody(__('O pedido foi salvo com sucesso.'));
            }
            $this->response = $this->response->withStatus(422);
            $this->set([
                'errors' => $pedido->getErrors(),
                '_serialize' => ['errors'],
            ]);
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Pedido id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pedido = $this->Pedidos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'put'])) {
            $pedido = $this->Pedidos->patchEntity($pedido, $this->request->getData());
            if ($this->Pedidos->save($pedido)) {
                return $this->response->withStringBody(__('O pedido foi salvo com sucesso.'));
            }
            $this->response = $this->response->withStatus(422);
            $this->set([
                'errors' => $pedido->getErrors(),
                '_serialize' => ['errors'],
            ]);
        }
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
        $this->request->allowMethod(['delete']);
        $pedido = $this->Pedidos->get($id);
        if ($this->Pedidos->delete($pedido)) {
            return $this->response->withStatus(204);
        }
        return $this->response->withStatus(400)->withStringBody(__('Não foi possível apagar o pedido. Tente novamente.'));
    }
}
