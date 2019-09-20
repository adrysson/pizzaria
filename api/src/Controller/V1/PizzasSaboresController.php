<?php
namespace App\Controller\V1;

use App\Controller\AppController;

/**
 * PizzasSabores Controller
 *
 * @property \App\Model\Table\PizzasSaboresTable $PizzasSabores
 *
 * @method \App\Model\Entity\PizzasSabore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PizzasSaboresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $sabores = $this->paginate($this->PizzasSabores);

        $this->set([
            'sabores' => $sabores,
            '_serialize' => ['sabores'],
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Pizzas Sabore id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sabor = $this->PizzasSabores->get($id, [
            'contain' => []
        ]);

        $this->set([
            'sabor' => $sabor,
            '_serialize' => ['sabor'],
        ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sabor = $this->PizzasSabores->newEntity();
        if ($this->request->is('post')) {
            $sabor = $this->PizzasSabores->patchEntity($sabor, $this->request->getData());
            if ($this->PizzasSabores->save($sabor)) {
                return $this->response->withStringBody(__('O sabor de pizza foi salvo com sucesso.'));
            }
            $this->response = $this->response->withStatus(422);
            $this->set([
                'errors' => $sabor->getErrors(),
                '_serialize' => ['errors'],
            ]);
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Pizzas Sabore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sabor = $this->PizzasSabores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'put'])) {
            $sabor = $this->PizzasSabores->patchEntity($sabor, $this->request->getData());
            if ($this->PizzasSabores->save($sabor)) {
                return $this->response->withStringBody(__('O sabor de pizza foi salvo com sucesso.'));
            }
            $this->response = $this->response->withStatus(422);
            $this->set([
                'errors' => $sabor->getErrors(),
                '_serialize' => ['errors'],
            ]);
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Pizzas Sabore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['delete']);
        $sabor = $this->PizzasSabores->get($id);
        if ($this->PizzasSabores->delete($sabor)) {
            return $this->response->withStatus(204)->withStringBody(__('O sabor de pizza foi apagado com sucesso.'));
        }
        return $this->response->withStatus(400)->withStringBody(__('Não foi possível apagar o sabor de pizza. Tente novamente.'));
    }
}
